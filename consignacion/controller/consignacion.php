<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Consignacion.php");
    $consignacion = new Consignacion();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll";
            $datos=$consignacion->get_consignacion();
            echo json_encode($datos);
        break;

        case "GetId";
            $datos=$consignacion->get_consignacion_by_id($body["id_cons"]);
            echo json_encode($datos);
        break;

        case "Insert";
            $datos=$consignacion->insert_consignacion($body["id_cons"],$body["fecha_cons"],$body["hora_cons"],$body["monto_cons"],$body["id_usuario"]);
            echo "Insert exitoso";
        break;

        case "Update";
            $datos=$consignacion->update_consignacion($body["id_cons"],$body["fecha_cons"],$body["hora_cons"],$body["monto_cons"]);
            echo "Update exitoso";
        break;

        case "Delete";
            $datos=$consignacion->delete_consignacion($body["id_cons"]);
            echo "Delete exitoso";
        break;
    }
?>