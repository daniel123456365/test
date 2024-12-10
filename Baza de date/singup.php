<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css"> 
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <title>Office solution</title>
</head>
   <body>
      <div class="header">
         <div class="container">
                 <div class="logo">
                    <a href="index.php"><img src="imagini/logo.png"></a>
                </div>
                   <div class="nav">

                  </div>
         </div>
      </div>

      <div class="login">
          <div class="container">
                          <h1>Sign Up!</h1>
              <form method="POST" action="includes/singup.inc.php">
                <input type="text" name="nume" placeholder="Nume"><br>
                <input type="text" name="prenume" placeholder="Prenume"><br>
                <input type="text" name="email" placeholder="E-mail"><br>
                <input type="password" name="password" placeholder="Parola"><br>
                <input type="submit" name="Sign Up" value="Sign Up">
              </form>
              <?php
              if (isset($_GET['info']) && $_GET['info'] == 'ok') {
                  echo '<p style="text-align: center; color: green; font-size: 20px">Contul a fost creeat cu succes</p>';
              } else if (isset($_GET['info']) && $_GET['info'] == 'eroare') {
                  echo '<p style="text-align: center; color: red; font-size: 20px">Nu ati completat datele!</p>';
              } else if (isset($_GET['info']) && $_GET['info'] == 'exista') {
                  echo '<p style="text-align: center; color: red; font-size: 20px">Email folosit!</p>';
              }
              ?>
          </div>
     </div>
   </body>
</html> 