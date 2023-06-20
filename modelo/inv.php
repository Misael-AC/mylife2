<?php
class classQueries {
    function MostrarInventario(){
        $sql = "SELECT * FROM tbl_inventario";
        global $con;
        return $con->query($sql);
    }

    function FiltradoValidacion($Fechas){
        $sql = "SELECT * FROM `tbl_lotes` WHERE `Fechas` = (CASE WHEN '$Fechas' = NULL OR '$Fechas' = '' THEN `Fechas` ELSE '$Fechas' END) ";
        global $con;
        return $con->query($sql);
    }

    public function MostrarLineas(){
        $sql = "SELECT DISTINCT Carro FROM tbl_lotes ORDER BY Carro ASC";
        global $con;
        $query = $con->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function MostrarModelos(){
        $sql = "SELECT DISTINCT Carro FROM `tbl_lotes`";
        global $con;
        $query = $con->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
}
?>