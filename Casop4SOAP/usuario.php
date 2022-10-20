<?php
    class Usuario{
        public function Bienvenido($mensaje){
            return "hola". $mensaje;
        }
        //crud insertar
        public function InsertarRestaurante($nombre,$direccion,$telefono){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("INSERT INTO restaurante (nombre,direccion,telefono)
            VALUES (:nombre,:direccion,:telefono)");
            $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $consulta->bindParam(":direccion",$direccion,PDO::PARAM_STR);
            $consulta->bindParam(":telefono",$telefono,PDO::PARAM_STR);
            $consulta->execute();
            return 1;
        }
        //consultar
        public function ObtenerRestaurante(){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("SELECT * FROM restaurante");
            $consulta->execute();
            $consulta->setFetchMode(PDO::FETCH_ASSOC);
            return $consulta->fetchAll();

        }
        //update
        public function ModificarRestaurante($id,$nombre,$direccion,$telefono){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("UPDATE restaurante 
            SET nombre=:nombre, direccion=:direccion, telefono=:telefono WHERE id_restaurante=:id");
            $consulta->bindParam(":nombre",$nombre,PDO::PARAM_STR);
            $consulta->bindParam(":direccion",$direccion,PDO::PARAM_STR);
            $consulta->bindParam(":telefono",$telefono,PDO::PARAM_STR);
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->execute();
            return 1;
        }
        //elminar
        public function EliminarRestaurante($id){
            include 'conexion.php';
            $conectar=new Conexion();
            $consulta=$conectar->prepare("DELETE FROM restaurante WHERE id_restaurante=:id");
            $consulta->bindParam(":id",$id,PDO::PARAM_INT);
            $consulta->execute();
            return 1;
        }
    }
    try{
        $server=new SoapServer(
            null,
            [
                'uri'=>'http://localhost/Casop4SOAP/usuario.php',
            ]
            
        );
        $server->setClass('Usuario');
        $server->handle();

    } catch (SOAPFault $e) {
        echo 'Error: ' .$e->getMessage();
        exit;
    }
?>