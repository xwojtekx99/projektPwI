<!DOCTYPE HTML>
<html lang="pl">

    
<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_admin2.css">
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
                    <a href="zablokuj.php" class="textlink">Zablokuj</a>
                </div>
                <div class="p">
                    <a href="odblokuj.php" class="textlink">Odblokuj</a>
                </div>
               
               
                                     
            
            </nav>
            <article>
               <div id="delete">
                    <h1>ODBLOKUJ</h1>
                </div>
                <div id="dane">
                    <form action="odblokuj2.php" method="get">
                    <p>Wybierz login użytkownika, którego chcesz odblokować:</p>
                    <select name="login">
                    
                      <?php
                        $host = "localhost"; 
                        $db_user = "root"; 
                        $db_password = "";
                        $db_name = "instaboard";


                        $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
                        $sql = $dbh->query('SELECT login FROM uzytkownicy WHERE blokada=1;');


                        while ($row = $sql->fetch()) {
                            echo "<option value='" .$row['login']. "'>" .$row['login']. "</option>";
                
                        }

                    ?>
                    
                    <br>
                    <input type="submit" value="ODBLOKUJ"> <br> 
                    </select>
                    <?php
                        session_start();
                        if(isset($_SESSION['komunikat'])){    
                            echo ($_SESSION['komunikat']);
                            unset($_SESSION['komunikat']); 
                        }
                    ?>
                </form>
                </div>    
        </article>     
        
    
        <div style="clear: both"></div>
        <footer>
            
                Projekt przygotowany przez Wojciecha Klimaszewskiego <br>
                email: projekt.www@wp.pl            
        </footer>
        </div>
            
        
</body>

</html>