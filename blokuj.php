<?php
            session_start();
            $login = $_GET['id']; 
            $login = htmlentities($login, ENT_QUOTES, "UTF-8");
            $host = "localhost"; 
            $db_user = "root"; 
            $db_password = "";
            $db_name = "instaboard";


            $dbh = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
            $sql = ("UPDATE uzytkownicy SET blokada=true WHERE login='$login';");
            $stmt = $dbh->exec($sql);
            if (!$stmt) {
                $_SESSION['komunikat']='<span style="color:red">Błedny login/bądź użytkownik jest już zablokowany</span>';; 
                header('Location: zablokuj.php'); 
                exit(); 
            }
            else
            {
                $_SESSION['komunikat']='<span style="color:red">Użytkownik pomyślnie zablokowany</span>';; 
                header('Location: zablokuj.php');
            }
            
            
            
            
            
    
?>