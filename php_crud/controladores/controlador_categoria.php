<?php

include_once("modelos/categoria.php");
include_once("conexion.php");
BD::crearInstancia();

class ControladorCategoria{

    public function inicio(){
        
        include_once("vistas/categoria/inicio.php");
}

    public function crear(){
        if($_POST){
        print_r($_POST);
        $nomb_cate=$_POST['nomb_cate'];
        Categoria::crear($nomb_cate);
        }
        
        include_once("vistas/categoria/crear.php");
    }

}



?>