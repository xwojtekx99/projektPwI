<!DOCTYPE HTML>
<html lang="pl">
    
<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_top5profili.css">
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
                <h2>
                TOP 5 profili InstaBoard 
                </h2>
                    <div id="opis1">
                    </div>
                    <div class="hover14 column">
                      <div>
                          <figure><a href="jakisprofil.html" target="_parent"><img src="https://images.pexels.com/photos/1036620/pexels-photo-1036620.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" width="300" height="200" alt="1">    </a></figure> 
                          <div id="napis">
                          <p>color_Jami3</p></div>
                      </div>
                      <div>
                          <figure><a href="jakisprofil1.html" target="_parent"><img src="https://images.pexels.com/photos/3781520/pexels-photo-3781520.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="300" height="200" alt="2"></a></figure>
                        <div id="napis1">
                          <p>ana.bell</p></div>
                      </div>
                      <div>
                          <figure><a href="jakisprofil2.html" target="_parent"><img src="https://images.pexels.com/photos/3807789/pexels-photo-3807789.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="300" height="200" alt="3"></a></figure>
                        <div class="napis2">
                          <p>50ngLOV3</p></div>
                          <figure><a href="jakisprofil3.html" target="_parent"><img src="https://images.pexels.com/photos/372042/pexels-photo-372042.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="300" height="200" alt="4"></a></figure>
                        <div class="napis2">
                          <p>/\les</p></div>
                          <figure><a href="jakisprofil4.html" target="_parent"><img src="https://images.pexels.com/photos/374044/pexels-photo-374044.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" width="300" height="200" alt="5"></a></figure>
                        <div class="napis2">
                          <p>Paulx3</p></div>
                      </div>
                    </div>
                </article>
            </div>        
        
    
        <div style="clear: both"></div>
       <footer>
                Projekt przygotowany przez Wojciecha Klimaszewskiego <br>
                email: projekt.www@wp.pl            
        </footer>
        
        
    
        
    
    
    
        
</body>

</html>