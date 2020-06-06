<!DOCTYPE HTML>
<html lang="pl">

    
<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_zaloguj.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Martel&amp;display=swap" rel="stylesheet">
    
    

    
</head>
    
<body>
         
  <?php
    session_start();
        
    $host = "localhost"; 
    $db_user = "root"; 
    $db_password = "";
    $db_name = "instaboard";
        
    $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
   
        $login = $_GET['login'];
        $haslo = $_GET['haslo'];
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");
        $sql = "SELECT * FROM uzytkownicy WHERE login='$login'"; 
        $_SESSION['zalogowany'] = false;
        if ($rezultat = @$dbh->query($sql))
        
        {
            $ilu_userow = $rezultat->rowCount();
            $wiersz = $rezultat->fetch(PDO::FETCH_ASSOC);
            if($ilu_userow>0)
            {
                if(password_verify($haslo, $wiersz['haslo']))
                { 
                    $_SESSION['id'] = $wiersz['id'];
                    $_SESSION['login'] = $wiersz['login'];
                    $_SESSION['haslo'] = $wiersz['haslo'];
                    $_SESSION['email'] = $wiersz['email'];
                    $_SESSION['narodowosc'] = $wiersz['narodowosc'];
                    $_SESSION['plec'] = $wiersz['plec'];                   
                    if($wiersz['blokada']==true){
                        $_SESSION['blad'] = '<span style="color:red">Twoje Konto zostało zablokowane(W sprawie pytań skontaktuj się z adminem - admin@wp.pl )</span>';
                        header('Location: zaloguj1.php');}
                     else {  
                        $_SESSION['zalogowany'] = true;    
                        unset($_SESSION['blad']);
                        $rezultat->closeCursor();
                        header('Location: index.php'); 
                     }
                }
                else {
                    $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                    header('Location: zaloguj1.php');}
                }
               
            }
                 
            
        else { 
                
                $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
                header('Location: zaloguj1.php');
                $_SESSION = array();
        }
        
        
        
         
        
    
     

    
    
    
?>
        
    
    
    
        
</body>

</html>