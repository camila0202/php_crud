<?php

class Categoria{
    public static function crear($nomb_cate){

    $conexionBD=BD::crearInstancia();
    $sql= $conexionBD->prepare("INSERT INTO categoria(nomb_cate) VALUES(?)");
    $sql->execute(array($nomb_cate));
    }

}

?>
