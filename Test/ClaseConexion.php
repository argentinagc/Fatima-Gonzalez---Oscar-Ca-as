<?php
    require "Modelos/conexion.php";

    class pruebaCurso extends Conexion{

        public function insertar($IdCurso,$Nombre,$Descripcion){

            $stmt = Conexion::conectar()->prepare("INSERT INTO curso (IdCurso,Nombre, Descripcion) VALUES ($IdCurso,$Nombre,$Descripcion)");
            $result = $stmt->execute();

            return $result;
        }

        public function consultar(){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM curso");
            $result =$stmt->execute();

            return $result;
        }

        public function actualizar($IdCurso, $Nombre,$Descripcion){
            $stmt = Conexion::conectar()->prepare("UPDATE curso SET Nombre=$Nombre, Descripcion=$Descripcion WHERE IdCurso = $NombreIdCurso");
            $result = $stmt->execute();

            return $result;
        }

        public function eliminar($IdCurso){
            $stmt = Conexion::conectar()->prepare("DELETE FROM curso WHERE IdCurso = $IdCurso");
            $result = $stmt->execute();

            return $result;
        }
    }

?>