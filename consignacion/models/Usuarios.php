<?php
    class Usuario extends Conectar{
        public function get_usuarios(){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
        }

        public function get_usuarios_by_id($id_usuario){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_usuarios($id_usuario,$nom_usuario,$ape_usuario,$num_doc_usuario,$tel_usuario,$direccion_usuario){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="INSERT INTO usuarios(id_usuario,nom_usuario,ape_usuario,num_doc_usuario,tel_usuario,direccion_usuario) VALUES (?, ?, ?, ?, ?, ?)";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $id_usuario);
        $sql->bindValue(2, $nom_usuario);
        $sql->bindValue(3, $ape_usuario);
        $sql->bindValue(4, $num_doc_usuario);
        $sql->bindValue(5, $tel_usuario);
        $sql->bindValue(6, $direccion_usuario);
        $sql->execute();
    }

    public function update_usuarios($id_usuario,$nom_usuario,$ape_usuario,$num_doc_usuario,$tel_usuario,$direccion_usuario){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="UPDATE usuarios set nom_usuario = ?,ape_usuario = ?,num_doc_usuario = ?,tel_usuario = ?,direccion_usuario = ? WHERE id_usuario = ?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1, $nom_usuario);
        $sql->bindValue(2, $ape_usuario);
        $sql->bindValue(3, $num_doc_usuario);
        $sql->bindValue(4, $tel_usuario);
        $sql->bindValue(5, $direccion_usuario);
        $sql->bindValue(6, $id_usuario);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete_usuarios($id_usuario){
        $conectar= parent::conexion();
        parent::set_names();
        $sql="DELETE FROM usuarios WHERE id_usuario = $id_usuario";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $result=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    }

?>