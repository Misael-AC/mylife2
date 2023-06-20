<?php
@session_start();
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 0;
}

require_once "../Config/conexion.php";
require_once "../modelo/modelo.php";


$obtener = new queryObtener();
$insertar = new queryInsertar();
$actualizar = new queryActualizar();


switch ($page) {
    case 1:
        try {

            $response = $actualizar->insert_ss($_POST['Carro'], $_POST['Modelo'], $_POST['Core'], $_POST['Plunger'], $_POST['Shaft'], $_POST['Spring'], $_POST['Plate_a'], $_POST['Plate_wave'], $_POST['Base'], $_POST['Yoke'], $_POST['Coil'], $_POST['Screw']);
         
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;
    case 2:
        try {
            $response = $obtener->selectInv2($_POST['Carro']);
            foreach ($response as $row) {
                if ($response) {
                    $response = $actualizar->act($_POST['Carro'], $_POST['Sleeve'], $_POST['Rango'], $_POST['Linea']);
                    // echo 'Registro correcto';
                }
            }
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;
    case 3:
        try {


            $response = $obtener->selectInv2($_POST['Carro1']);
            foreach ($response as $row) {

                if ($row['Carro'] > 0) {
                    if ($response) {


                        $response = $actualizar->act1($_POST['Carro1']);
                        echo 'Registro correcto';
                    }
                }
            }
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;
}