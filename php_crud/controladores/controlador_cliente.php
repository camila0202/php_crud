<?php

include_once("modelos/cliente.php");
include_once("conexion.php");
BD::crearInstancia();


class ControladorCliente{

    public function inicio(){

        include_once("vistas/cliente/inicio.php");
    }

    public function crear(){

        if($_POST){
            print_r($_POST);
            $nomb_clie=$_POST['nomb_clie'];
            $tef_movil=$_POST['tef_movil'];
            $dni=$_POST['dni'];
            Cliente::crear($nomb_clie,$tef_movil,$dni);
            }

        include_once("vistas/cliente/crear.php");

    }

    public function editar(){

        include_once("vistas/cliente/editar.php");


    }




}


?>

