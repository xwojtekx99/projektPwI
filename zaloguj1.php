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
    <div id="container">
        <header>
                <a href="index.php" class="textlink">InstaBoard</a>
        </header>
            <nav>
                <div class="p">
                    <a href="zaloguj1.php" class="textlink">Zaloguj</a>
                </div>
                <div class="p">
                    <a href="zarejestruj.php" class="textlink">Zarejestruj</a>
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
                <div id="zaloguj">
                    <h1>ZALOGUJ</h1>
                </div>
                <div id="dane">
                    <form action="zaloguj.php" method="get">
                    Login:<br>
                    <input type="text" name="login" size="50"><br>
                    Hasło:<br>
                    <input type="password" name="haslo" size="50"><br> 
                    <div id="dolacz">
                        <a href="zarejestruj.php" class="rej"> Nie masz konta ?  Dołącz do nas !</a>
                    
                    </div>
                    <input type="submit" value="Zaloguj"><br>  
                    <?php
                        session_start();
                        if(isset($_SESSION['blad'])) {   
                            echo ($_SESSION['blad']);
                            unset($_SESSION['blad']);
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