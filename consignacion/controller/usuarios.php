<?php
    header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Usuarios.php");
    $usuario = new Usuario();

    $body = json_decode(file_get_contents("php://input"), true);

    switch($_GET["op"]){
        case "GetAll";
            $datos=$usuario->get_usuarios();
            echo json_encode($datos);
        break;

        case "GetId";
            $datos=$usuario->get_usuarios_by_id($body["id_usuario"]);
            echo json_encode($datos);
        break;

        case "Insert";
            $datos=$usuario->insert_usuarios($body["id_usuario"],$body["nom_usuario"],$body["ape_usuario"],$body["num_doc_usuario"],$body["tel_usuario"],$body["direccion_usuario"]);
            echo "Correcto";
        break;

        case "Update";
            $datos=$usuario->update_usuarios($body["id_usuario"],$body["nom_usuario"],$body["ape_usuario"],$body["num_doc_usuario"],$body["tel_usuario"],$body["direccion_usuario"]);
            echo "Update exitoso";
        break;

        case "Delete";
            $datos=$usuario->delete_usuarios($body["id_usuario"]);
            echo "Delete exitoso";
        break;
    }
?>