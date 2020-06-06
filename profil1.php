<?php
  
  $db = mysqli_connect("localhost", "root", "", "instaboard");
  $msg = "";
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  if (isset($_POST['upload'])) {
  	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $image = $_FILES['image']['name'];
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO post (image, image_text,profil_fk) VALUES ('$image', '$image_text',NULL)";
  	mysqli_query($db, $sql);
  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM post");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="style.css">
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
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
                        <a href="wyloguj.php" class="textlink">Wyloguj</a>
                    </div>');
                }   
                ?>
               
                                     
            
            </nav>
            <article>
                <div id="content">
                  <?php
                    while ($row = mysqli_fetch_array($result)) {
                      echo "<div id='img_div'>";
                        echo "<img src='images/".$row['image']."' >";
                        echo "<p>".$row['image_text']."</p>";
                      echo "</div>";
                    }
                  ?>
                  <form method="POST" action="profil.php" enctype="multipart/form-data">
                    <input type="hidden" name="size" value="1000000">
                    <div>
                      <input type="file" name="image">
                    </div>
                    <div>
                      <textarea 
                        id="text" 
                        cols="40" 
                        rows="4" 
                        name="image_text" 
                        placeholder="Podpisz się i dodaj opis :)"></textarea>
                    </div>
                    <div>
                        <button type="submit" name="upload">DODAJ</button>
                    </div>
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