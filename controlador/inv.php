<?php
@session_start();
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 0;
}

require_once '../config/conexion.php';
require_once '../modelo/inv.php';


switch ($page) {

    case 1:
        try {
            $objConsulta = new classQueries();
            $array = array();

            if($_POST)
            {
                foreach ($_POST as $key => $value) {
                    if (empty($value)){
                        $_POST[$key] = NULL;
                    }
                }
                // $linea = $_POST['linea'];
                // $modelo = $_POST['modelo'];
                $Fechas = $_POST['Fechas'];
                $resultado = $objConsulta->FiltradoValidacion($Fechas);
            } else {
                $resultado = $objConsulta->MostrarInventario();
            }

            foreach ($resultado as $row) :
                // $array[] = $row;
                $array["data"][] = $row;
            endforeach;

            if ($array == []) {
                $array = null;
                echo '{"sEcho": 1,"iTotalRecords": "0","iTotalDisplayRecords": "0","aaData": []}';
            } else {
                echo json_encode($array);
            }
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;

    case 2:
        try {
            $objConsulta = new classQueries();
            $resultado = $objConsulta->MostrarLineas();
            echo json_encode($resultado);
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;

    case 3:
        try {
            $objConsulta = new classQueries();
            $resultado = $objConsulta->MostrarModelos();
            echo json_encode($resultado);
        } catch (Exception $e) {
            $e->getMessage();
            echo $e;
        }
        break;
}

?>