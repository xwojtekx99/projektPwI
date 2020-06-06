<?php
            session_start();
            $login = $_GET['login']; 
            $login = htmlentities($login, ENT_QUOTES, "UTF-8");
            $host = "localhost"; 
            $db_user = "root"; 
            $db_password = "";
            $db_name = "instaboard";


            $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
            $sql = ("UPDATE uzytkownicy SET blokada=false WHERE login='$login';");
            $stmt = $dbh->exec($sql);
            if (!$stmt) {
                $_SESSION['komunikat']='<span style="color:red">Błedny login/bądź użytkownik nie jest zablokowany</span>';; 
                header('Location: odblokuj.php'); 
                exit(); 
            }
            else
            {
                $_SESSION['komunikat']='<span style="color:red">Użytkownik pomyślnie odblokowany</span>';; 
                header('Location: odblokuj.php');
            }
            
            
            
            
            
    
?>