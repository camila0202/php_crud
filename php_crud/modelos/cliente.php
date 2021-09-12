<?php

class Cliente{
    public static function crear($nomb_clie,$tef_movil,$dni){

    $conexionBD=BD::crearInstancia();
    $sql= $conexionBD->prepare("INSERT INTO cliente(nomb_clie,tef_movil,dni) VALUES(?,?,?)");
    $sql->execute(array($nomb_clie,$tef_movil,$dni));

    }
}


?>