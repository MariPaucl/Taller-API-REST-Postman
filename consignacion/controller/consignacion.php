<?php
    require_once("../config/conexion.php");
    require_once("../models/Consignacion.php");
    $consignacion = new Consignacion();

    switch($_GET["op"]){
        case "GetAll";
            $datos=$consignacion->get_consignacion();
            echo json_encode($datos);
        break;
    }
?>