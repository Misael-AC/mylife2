<?php
date_default_timezone_set('America/Mazatlan');
class queryObtener
{
    public function selectInv2($Carro1)
    {

        $sql = "SELECT* FROM `tbl_lotes`  WHERE `Carro` = $Carro1";
        global $con;
        return $con->query($sql);
        // $row = $con->query($sql)->fetchAll();

        // $response= $con->query($sql)->fetchAll();
    }
}

class queryInsertar
{
    public function insertar_as($Carro, $Modelo, $Core, $Plunger, $Shaft, $Spring, $Plate_a, $Plate_wave, $Base, $Yoke, $Coil, $Screw)
    {
        $Hora_llenado = date('H:i:s');
        $sql = "INSERT INTO `tbl_lotes` (`id`,`Carro`, `Modelo`, `Core`, `Plunger`, `Shaft`,`Spring`,`Plate_a`,`Plate_wave`,`Base`,`Yoke`,`Coil`,`Screw`,`Hora_llenado`) VALUES ('','$Carro', '$Modelo', '$Core', '$Plunger', '$Shaft','$Spring','$Plate_a','$Plate_wave','$Base','$Yoke','$Coil','$Screw','$Hora_llenado');";
        global $con;
        return $con->query($sql);
    }
}

class queryActualizar
{


    public function act($Carro, $Sleeve, $Rango, $Linea)
    {
        $fecha = date('Y-m-d');
        $Hora_lavado = date('H:i:s');

        $sql = "UPDATE `tbl_lotes` set 
        `Sleeve`='$Sleeve',
        `Rango`='$Rango', 
        Linea='$Linea',
        Hora_lavado='$Hora_lavado'
        WHERE `Carro`=$Carro";
        global $con;
        return $con->query($sql);
    }
    public function act1($Carro1)
    {
        $fechas = date('Y-m-d ');
        $Hora_ensamble = date('H:i:s');
        $sql = "UPDATE `tbl_lotes` set 
        Hora_ensamble='$Hora_ensamble'
        WHERE `Carro`=$Carro1 ";
        global $con;
        return $con->query($sql);
    }
    
    
    public function insert_ss($Carro, $Modelo, $Core, $Plunger, $Shaft, $Spring, $Plate_a, $Plate_wave, $Base, $Yoke, $Coil, $Screw)
    {
        $fechas = date('Y-m-d');
        $sql = "SELECT *FROM `tbl_lotes` where `Carro`=$Carro and  CAST(fechas as DATE)='$fechas'"; 
        global $con;
        $row = $con->query($sql)->fetch();
        // $response= $con->query($sql)->fetchAll();
        if ($row >0) {
    echo 'Carro ya agregado';
 
} else {
echo 'Nuevo Carro agregado';
    $Hora_llenado = date('H:i:s');
    $sql = "INSERT INTO `tbl_lotes` (`id`,`Carro`, `Modelo`, `Core`, `Plunger`, `Shaft`,`Spring`,`Plate_a`,`Plate_wave`,`Base`,`Yoke`,`Coil`,`Screw`,`Hora_llenado`) VALUES ('','$Carro', '$Modelo', '$Core', '$Plunger', '$Shaft','$Spring','$Plate_a','$Plate_wave','$Base','$Yoke','$Coil','$Screw','$Hora_llenado');";
    global $con;
    return $con->query($sql);


   }
}
}