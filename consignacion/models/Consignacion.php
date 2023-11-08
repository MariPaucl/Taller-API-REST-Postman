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
    }

?>