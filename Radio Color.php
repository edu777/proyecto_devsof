<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script> 
	function cambiaColor(){ 
   	 
   		for (var i=0; i<document.coloreando.color.length;i++){ 
      		if (document.coloreando.color[i].checked) 
         	break; 
   		}
		//aqui solo se esta enviando el id el color encontrado segun el radio que se escogio siguiendo el value que poseen
   		document.getElementById('1').style.backgroundColor = document.coloreando.color[i].value
	} 
</script>
</head>
<title>Radio de color</title>
<!--Empesamos con el Cuerpo o Body-->
<body>
	<form name=coloreando>
<fieldset>
   <legend>Elige un color</legend>
   <input  type="radio" name="color" value="Red" checked/> Rojo 
   <input  type="radio" name="color" value="Blue"/>Azul 
   <input  type="radio" name="color" value="Green"/> Verde 
   <input  type="radio" name="color" value="Yellow"/>Amarillo  
</fieldset>
	<br>
	<input type="Button" name="" value="Cambia Color" onclick="cambiaColor()"> 

	<div align="center">
	<table id=1 width="150px" height="100px" border="1">
		<tr>
			<td>&nbsp;</td>
  		</tr>
	</table>
 	.-----. .-----. </div>
    
	</form>
	<!--y se cierra el Form/ Finalizado Crasmic -->

	<script src="js/jquery.min.js"></script>
	<script src="js/actua.js"></script>
</body>
</html>