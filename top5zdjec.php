<!DOCTYPE HTML>
<html lang="pl">
    
<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_top5zdjec.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji+2" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Martel&amp;display=swap" rel="stylesheet">
    
    

    
</head>
    
<body>
    <div id="container">
        <header>
                <a href="index.php" class="textlink">InstaBoard</a>
        </header>
            <nav>
                <?php
                session_start();
                if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany']= false)
                {
                    echo('<div class="p">
                        <a href="zaloguj1.php" class="textlink">Zaloguj</a>
                    </div>
                    <div class="p">
                        <a href="zarejestruj.php" class="textlink">Zarejestruj</a>
                    </div>');
                }?>
                <div class="p">
                    <a href="top5profili.php" class="textlink">Top 5 profili</a>
                </div>
                <div class="p">
                    <a href="top5zdjec.php" class="textlink">Top 5 zdjęć</a>
                </div>
                <div class="p">
                    <a href="top5filmow.php" class="textlink">Top 5 filmów</a>
                </div>    
                <?php
                if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] = true)
                {
                    echo('<div class="p">
                        <a href="profil.php" class="textlink">Tablica</a>
                    </div>
                    <div class="p">
                        <a href="wyloguj.php" class="textlink">Wyloguj</a>
                    </div>');
                }   
                ?>
                                     
            
            </nav>
            <article>
                <h1>Top 5 zdjęć </h1>
               
                <div class="hovergallery">
                
                <div class="button"><a href="jakisprofil.html" target="_parent"><img src="https://images.pexels.com/photos/412840/pexels-photo-412840.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="foto"/></a><br />1</div>

                <div class="button"><a href="jakisprofil1.html" target="_parent"><img src="https://images.pexels.com/photos/2065195/pexels-photo-2065195.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="foto"/></a><br />2</div>

                <div class="button"><a href="jakisprofil2.html" target="_parent"><img src="https://images.pexels.com/photos/1043473/pexels-photo-1043473.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="foto"/></a><br />3</div>

                <div class="button"><a href="jakisprofil3.html" target="_parent"><img src="https://images.pexels.com/photos/1821095/pexels-photo-1821095.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="foto"/></a><br />4</div>
                    
                <div class="button"><a href="jakisprofil4.html" target="_parent"><img src="https://images.pexels.com/photos/1921168/pexels-photo-1921168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="foto" />
                </a><br />5</div>

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