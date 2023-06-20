<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("php/conexion.php");
    $fecha = date("Y-m-d ");
    $resultado =mysqli_query($conexion, "SELECT inv_max FROM inv WHERE id=26 and fecha='$fecha'");
$row= mysqli_fetch_assoc($resultado);
$resultado1 =mysqli_query($conexion, "SELECT inv_min FROM inv WHERE id=26 and fecha='$fecha'");
$row1= mysqli_fetch_assoc($resultado1);
    $num1="10";
    $num2="41";
   
    if($row1['inv_min']== $row['inv_max']){
        echo'son iguales';

    }elseif($row1['inv_min']>= $row['inv_max']){
        echo'num2 es mayor inv_max';
}elseif($row1['inv_min']<= $row['inv_max']){
    echo'inv max  es mayor que num2';
}else{
    echo'aaa';
}
    ?>
    <form id="myForm" name="formulario" method="post" action="">
  <input type="submit" />
  <button type="button" id="consulta">Consulta</button>
 
</form>
</body>
</html>