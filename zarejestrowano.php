<?php
 
    session_start();
        $login = $_GET['login'];  
        $email = $_GET['email'];
        $haslo1 = $_GET['haslo1'];
        $haslo2 = $_GET['haslo2'];
        $narodowosc = $_GET['narodowosc'];
        $plec = $_GET['plec']; 
        
        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $haslo1 = htmlentities($haslo1, ENT_QUOTES, "UTF-8");
        $haslo2 = htmlentities($haslo2, ENT_QUOTES, "UTF-8");
        $email = htmlentities($email, ENT_QUOTES, "UTF-8");
        
                      
        $host = "localhost"; 
        $db_user = "root"; 
        $db_password = "";
        $db_name = "instaboard";
        
        
        $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
         
        if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
        {
            $_SESSION['blad']="Błędny adres e-mail!";
            header('Location: zarejestruj.php');
            exit(); 
        }

        if ($haslo1!=$haslo2){
            $_SESSION['blad']='Podane hasla sa rozne'; 
            header('Location: zarejestruj.php');
            exit(); 
        }
        if ((strlen($haslo1)<5) || (strlen($haslo1)>20))
        {
            $_SESSION['blad']="Hasło musi posiadać od 5 do 20 znaków!";
            header('Location: zarejestruj.php');
            exit(); 
        }
        
        $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
        $rezultat = $dbh->query("SELECT login FROM uzytkownicy WHERE login='$login'");
                 
                if (!$rezultat) throw new Exception($polaczenie->error);
                 
                $ile_takich_nickow = $rezultat->rowCount();
                if($ile_takich_nickow>0)
                {
                    $_SESSION['blad']="Istnieje już uzytkownik o takim loginie! Wybierz inny.";
                    header('Location: zarejestruj.php');
                    exit(); 
                }
        $rezultat1 = $dbh->query("SELECT id FROM uzytkownicy WHERE email='$email'");
                 
                if (!$rezultat1) throw new Exception($polaczenie->error);
                 
                $ile_takich_emaili = $rezultat1->rowCount();
                if($ile_takich_emaili>0)
                {
                    $_SESSION['blad']="Ten email jest juz powiazany z innym kontem! Wybierz inny.";
                    header('Location: zarejestruj.php');
                    exit(); 
                }

        
            
         
        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
   
        $sql = "INSERT INTO uzytkownicy values(NULL, '$login', '$haslo_hash', '$email', '$narodowosc', '$plec', 0 )"; 
        
        if ($rezultat = @$dbh->exec($sql))
        
        {
            if(!isset($_GET['login']) || !isset($_GET['haslo1']) || !isset($_GET['email']) || !isset($_GET['narodowosc']) || !isset($_GET['plec']))
            {
                $_SESSION['blad']='Nie zostawiaj pustych pul'; 
                header('Location: zarejestruj.php');
                exit(); 
            }
            }
        else
        {                   
            header('Location: zarejestruj.php');                
        } 
    
?>
 
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>Rejestracja</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_zarejestruj.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Martel&amp;display=swap" rel="stylesheet">
    
    

    
</head>
    
<body>
    <div id="container">
        <header>
                <a href="index.php" class="textlink">InstaBoard</a>
        </header>
            <nav>
                <div class="p">
                    <a href="zaloguj1.php" class="textlink">Zaloguj</a>
                </div>
                <div class="p">
                    <a href="top5profili.php" class="textlink">Top 5 profili</a>
                </div>
                <div class="p">
                    <a href="top5zdjec.php" class="textlink">Top 5 zdjęć</a>
                </div>
                <div class="p">
                    <a href="top5filmow.php" class="textlink">Top 5 filmów</a>
                </div>
            </nav>
            <article>
                <h3>Dziękujemy za rejestrację w InstaBoard! Możesz już zalogować się na swoje konto!</h3><br>
                <br>  
            </article>               
        </div>
        

        
</body>

</html>