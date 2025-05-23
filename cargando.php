


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="/scripts/jquery-3.6.0.min.js"></script>
		<script src="/scripts/jquery.jclock-min.js" type="text/javascript"></script>
   		<script type="text/javascript" src="/scripts/functions2.js"></script>  	
        
           <style>*{
    
    margin:0;
    padding:0;
    font-family: arial;
    }</style>

    <title>Cargando</title>
</head>


<body style="background-color:#dcdcdc2d;">
  <div id="resultado"></div>




<center><div style="width: 100%;margin-top: 35%;">    
  
  <center><a style="font-size: 20px;">Espere un momento.. <br> Estamos comprobando su conexión</a><br>
    <a style="font-size: 20px;">No tardará más de un minuto.</a></center><br><br>

  <img src="/img/loader.gif" alt="" srcset="" width="30%"></center>
  
</div>

<script language="javascript">
$(document).ready(function() {
	setInterval(consultar_estado,2000);	
    console.log("Cargando")
});
</script>

</body>


    

</html>