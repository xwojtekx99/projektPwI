<!DOCTYPE HTML>
<html lang="pl">

    
<head>
    <meta charset="utf-8"/>
    <title>InstaBoard</title>
    <meta name="description" content="Oto moja wersja instagrama. Zapraszam do zapoznania sie z nia" />
    <meta name="keywords" content="zdjecia, instagram, top photo" /> 
    <meta name="author" content="Wojciech Klimaszewski" />
    <link rel="stylesheet" href="style.css">
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
                if(!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] == false)
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
                if(isset($_SESSION['login']) && $_SESSION['login']=='admin'){
                echo('<div class="p">
                    <a href="admin.html" class="textlink">Panel Admina</a>
                </div>'); }
                if(isset($_SESSION['zalogowany']) && $_SESSION['zalogowany'] == true)
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
                <h2>Witaj w InstaBoard !</h2>
                
                <p> Przykladowy tekst, a mianowicie Jan Matejko urodził się w 1838 r. w Krakowie. W 1858 r. ukończył tam Szkołę Sztuk Pięknych, następnie kształcił się w Monachium i w Wiedniu. Już młodzieńcze dzieła Matejki zyskały międzynarodowe uznanie, a artystę okrzyknięto jednym z najwybitniejszych twórców malarstwa historycznego w Europie. Stworzył on ponad trzysta obrazów olejnych oraz setki rysunków i szkiców. Jest też autorem polichromii kościoła Mariackiego w Krakowie. Swoje obrazy Matejko wielokrotnie prezentował na wystawach w najważniejszych europejskich ośrodkach kultury. </p>
        </article>     
        
    
        <div style="clear: both"></div>
        <footer>
                Projekt przygotowany przez Wojciecha Klimaszewskiego <br>
                email: projekt.www@wp.pl            
        </footer>
        </div>
            
        
</body>

</html>