<?php
    class Consignacion extends Conectar{
        public function get_consignacion(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM consignacion";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_consignacion_by_id($id_cons){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM consignacion WHERE id_cons = $id_cons";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_consignacion($id_cons,$fecha_cons,$hora_cons,$monto_cons,$id_usuario){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT INTO consignacion(id_cons,fecha_cons,hora_cons,monto_cons,id_usuario) VALUES (?, ?, ?, ?, ?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $id_cons);
        $sql->bindValue(2, $fecha_cons);
        $sql->bindValue(3, $hora_cons);
        $sql->bindValue(4, $monto_cons);
        $sql->bindValue(5, $id_usuario);
        $sql->execute();
}

public function update_consignacion($id_cons,$fecha_cons,$hora_cons,$monto_cons){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="UPDATE consignacion set fecha_cons = ?, hora_cons = ?, monto_cons = ? WHERE id_cons = ?";
    $sql=$conectar->prepare($sql);
    $sql->bindValue(1, $fecha_cons);
    $sql->bindValue(2, $hora_cons);
    $sql->bindValue(3, $monto_cons);
    $sql->bindValue(4, $id_cons);
    $sql->execute();
    return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
}

public function delete_consignacion($id_cons){
    $conectar= parent::conexion();
    parent::set_names();
    $sql="DELETE FROM consignacion WHERE id_cons = $id_cons";
    $sql=$conectar->prepare($sql);
    $sql->execute();
    return $result=$sql->fetchAll(PDO::FETCH_ASSOC);
}
    }
?>