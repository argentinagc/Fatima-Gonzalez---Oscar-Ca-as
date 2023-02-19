<?php
    use PHPUnit\Framework\TestCase;

    require "ClaseConexion.php";

    class CursoTest extends TestCase{
        /** @test */
        public function test(){
            $curso = new pruebaCurso(); //

            $array = $curso->consultar();

            $curso->insertar('1',"Sociologia","Humanidades");

            $curso->actualizar('2',"Matematicas","Ingenieria");

            foreach($array as $arr){
                
                $this->assertEquals(count($arr),4);
            }
        }
    }
?>