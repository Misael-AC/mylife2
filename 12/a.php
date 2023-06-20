<?php
include("php/conexion.php");
$modelo="SELECT * FROM inv GROUP BY modelo";
$resModelo=$conexion->query($modelo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<script  type="text/javascript"
    src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js">
</script>
<!DOCTYPE html>
<html>
<body>

<p>Escanea</p>
<form action="php/insert.php" method="post">
<input type="text" name="palabra" id="palabra">
<br>
<input type="submit" onclick="myFunction()" name="subir">
<br>

    <input type="text" name="linea" id="linea">
    <input type="text" name="nombre" id="nombre">
    <input type="text" name="rango" id="rango">
    <input type="text" name="modelo" id="modelo">
    <input type="text" name="inv_min" id="inv_min">
</form>
<form method="post" action="a.php">

<div class="col-12 row">
	<select name="xmodelos">
					<option value="">modelo </option>
					<?php
						while ($registromodelo = $resModelo->fetch_array(MYSQLI_BOTH))
						{
							echo '<option value="'.$registromodelo['modelo'].'">'.$registromodelo['modelo'].'</option>';
						}
					?>
				</select>


<input type="date"  name="xcarrera"onchange="obtenerFecha(this)" />
 
				<button name="buscar" type="submit">Buscar</button>

</body>
</html>
<script>


  </script>
  <script>
    function myFunction() {
    var palabra = document.getElementById("palabra").value;
    var letras;
    letras = palabra.substr(0,7); 
    document.getElementById("linea").value = letras;
    //
    var palabra = document.getElementById("palabra").value;
    var letras;
    letras = palabra.substr(8,13); 
    document.getElementById("nombre").value = letras;
    //
    var palabra = document.getElementById("palabra").value;
    var letras;
    letras = palabra.substr(21,6);
    document.getElementById("rango").value = letras;
    // 
    var palabra = document.getElementById("palabra").value;
    var letras;
    letras = palabra.substr(27,15);
    document.getElementById("modelo").value = letras;
    //
    var palabra = document.getElementById("palabra").value;
    var letras;
    letras = palabra.substr(42,2);
    document.getElementById("inv_min").value = letras;
    }
    const myForm = document.querySelector('#myForm');

const btnConsulta = document.querySelector('#consulta');

myForm.addEventListener('submit', event => {
  event.preventDefault();
  console.log('Envío del formulario');
});

btnConsulta.addEventListener('click', event => {
  event.preventDefault();
  console.log('Click del botón consulta. Lanza aquí el modal, si es que hace falta...');
});
  </script>
  <script>
				function obtenerFecha(e)
{

  var fecha = moment(e.value);
  console.log("Fecha original:" + e.value);
  console.log("Fecha formateada es: " + fecha.format("DD/MM/YYYY"));
}
</script>
<script src="https://momentjs.com/downloads/moment.js"></script>
