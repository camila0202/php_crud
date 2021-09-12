<?php

include_once("modelos/empleado.php");
include_once("conexion.php");
BD::crearInstancia();


class ControladorEmpleados{

    public function inicio(){

       print_r( Empleado::consultar());
        
        include_once("vistas/empleados/inicio.php");

    }
    public function crear(){
        if($_POST){
            print_r($_POST);
            $nombre=$_POST['nombre'];
            $dni=$_POST['dni'];
            $tele_movil=$_POST['tele_movil'];
            Empleado::crear($nombre,$dni,$tele_movil);
            

        }
        include_once("vistas/empleados/crear.php");

    }
    public function editar(){
        include_once("vistas/empleados/editar.php");

    }


}

?>