<?php
session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> 
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <title> Document</title>
</head>
   <body>
      <div class="header">
         <div class="container">
                 <div class="logo">
                    <a href="/Proiect Web Design/index.html"><img src="imagini/logo.png"></a>
                </div>
         </div>
      </div>

      <?php
             if (isset($_SESSION['id'])) {
                echo 'Bun venit' .$_SESSION['prenume'];
            }
      ?>

      <div class="login">
          <div class="container">
                          <h1>Bine ai venit!</h1>
              <form method="POST" action="includes\login.inc.php">
                <input type="text" name="e-mail" placeholder="E-mail"><br>
                <input type="password" name="password" placeholder="Parola"><br>
                <input type="submit" name="Log In" value="Log In">
              </form>
              <?php
                if (isset($_GET['info']) && $_GET['info'] == 'gresit') {
                  echo '<p style="text-align: center; color: red; font-size: 20px">Parola este gresita!</p>';
                }
              ?>
              <div class="nav">
                      <ul>
                         <li><a href="index.php"> Home</li>
                         <li><a href="singup.php">Sign Up</li>
                      </ul>
                  </div>
          </div>
     </div>
   </body>
</html> 