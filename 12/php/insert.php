  <?php
include 'conexion.php';

$linea=   $_POST['linea'];
$nombre=   $_POST['nombre'];
$rango=   $_POST['rango'];
$modelo=   $_POST['modelo'];
$inv_min=   $_POST['inv_min'];
$fecha = date("Y-m-d ");
//$inv_max= mysqli_query($conexion,"SELECT inv_min FROM inv WHERE id=26");
$a=100;
$b=980;
$inv_mini= "SELECT inv_min FROM inv WHERE  id=26";
$query= "INSERT INTO inv(id,linea,nombre,rango,modelo,inv_min,fecha)
        VALUES('','$linea','$nombre','$rango','$modelo','$inv_min', '$fecha')"; 
  if(isset($_REQUEST['subir'])){
    $verificarnomina= mysqli_query($conexion, "SELECT* FROM inv WHERE  fecha='$fecha'  and modelo='$modelo'and rango='$rango'");
        if(mysqli_num_rows($verificarnomina)>0){
             $resultado =mysqli_query($conexion, "SELECT inv_max FROM inv WHERE fecha='$fecha'  and modelo='$modelo'and rango='$rango'");
             $row= mysqli_fetch_assoc($resultado);
             $resultado1 =mysqli_query($conexion, "SELECT inv_min FROM inv WHERE fecha='$fecha'  and modelo='$modelo'and rango='$rango'");
            $row1= mysqli_fetch_assoc($resultado1);
            if($row1['inv_min']>= $row['inv_max']){
                echo'
                <script>
                alert("inventario maximo");
                window.location="../a.php"; 
            
            </script>';

        }elseif($row1['inv_min']<= $row['inv_max']){  $query=" UPDATE INV
                    SET inv_min = 
                        (
                            (SELECT SUM(cle.inv_min) 
                        FROM inv  cle where  fecha='$fecha'  and modelo='$modelo'and rango='$rango' )+'$inv_min' 
                        )
                        WHERE  fecha='$fecha'  and modelo='$modelo'and rango='$rango'";
                 echo'
                 <script>
                 alert("Sumando +1");
                 window.location="../a.php"; 
             
             </script>';
           
             $ejecutar=  mysqli_query($conexion, $query);
             exit();
                   }
    }else{   
        $ejecutar=  mysqli_query($conexion, $query);
        if($ejecutar){echo'
            <script>
            alert("Agregando Nueva caja");
            window.location="../a.php"; 
        
        </script>';

    }
}
}

?>
