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
                    <h1>ZAREJESTRUJ</h1>
                </div>
                <div id="dane">
                    <form action="zarejestrowano.php" method="get">
                    Login:<br>
                    <input type="text" name="login" size="50"><br>
                    Email:<br>
                    <input type="text" name="email" size="50"><br>
                    Hasło:<br>
                    <input type="password" name="haslo1" size="50"><br>
                    Powtórz hasło:<br>
                    <input type="password" name="haslo2" size="50"><br>
                    Narodowosc:<br>
                     <select name="narodowosc">
                         <option value="Anglia">Anglia</option>
                         <option value="Belgia">Belgia</option>
                         <option value="Chiny">Chiny</option>
                         <option value="Hiszpania">Hiszpania</option>
                         <option value="Japonia">Japonia</option>
                         <option value="Kanada">Kanada</option>
                         <option value="Luksemburg">Luksemburg</option>
                         <option value="Niemcy">Niemcy</option>
                         <option value="Polska">Polska</option>
                         <option value="Portugalia">Portugalia</option>
                         <option value="Włochy">Włochy</option>
                         <option value="Zambia">Zambia</option>                      
                     </select> <br>
                    Płeć:<br>
                    <label>
                        <input type="radio" name="plec" value="Mężczyzna"> Mężczyzna
                    </label>

                    <label>
                        <input type="radio" name="plec" value="Kobieta"> Kobieta
                    </label> <br>
                        <input type="submit" value="Dołącz"> <br>
                        <?php
                        session_start();    
                        if (isset($_SESSION['blad'])){
                                echo $_SESSION['blad'];
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