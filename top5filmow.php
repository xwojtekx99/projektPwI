<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style_top5filmow.css">
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
                <h1>Top 5 filmów </h1>
               
                <div class="film">
                
                <div class="button"><video controls width="480" height="270" >
	           <source src="https://player.vimeo.com/external/312662160.sd.mp4?s=22154e69be5722a528e3c1cc374250af726a2b44&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  	           <source src="lesson.ogg" type="video/ogg">
               </video><br /></div>

                <div class="button"><video controls width="480" height="270" >
	           <source src="https://player.vimeo.com/external/288190258.sd.mp4?s=8bbc2d25f23cf412a99bd2dbdfa08688fd973ce8&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  	           <source src="lesson.ogg" type="video/ogg">
               </video><br /></div>

                <div class="button"><video controls width="480" height="270" >
	           <source src="https://player.vimeo.com/external/344481124.sd.mp4?s=5e7b9f0e16a0b64fd15c8af2068a32a5bb980143&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
  	           <source src="lesson.ogg" type="video/ogg">
               </video><br /></div>

                <div class="button"><video controls width="480" height="270" >
	           <source src="https://player.vimeo.com/external/336580092.sd.mp4?s=9181434ea80b13c4a0002a6eab046a8e7f7461a4&profile_id=139&oauth2_token_id=57447761" type="video/mp4">
  	           <source src="lesson.ogg" type="video/ogg">
               </video><br /></div>
                    
                <div class="button"><video controls width="480" height="270" >
	           <source src="https://player.vimeo.com/external/288608416.sd.mp4?s=6e1dab389bcc1844194b783b99812f1cb30d247b&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  	           <source src="lesson.ogg" type="video/ogg">
               </video><br /></div>
                
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