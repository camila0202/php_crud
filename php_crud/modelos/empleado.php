<?php

class Empleado{

    public $id_empleado;
    public $nombre;
    public $dni;
    public $tele_movil;

    public function __construct($id_empleado,$nombre,$dni,$tele_movil)
    {

        $this->id_empleado=$id_empleado;
        $this->nombre=$nombre;
        $this->dni=$dni;
        $this->tele_movil=$tele_movil;
        
    }

    public static function consultar(){
        $listarEmpleados=[];
        $conexionBD=BD::crearInstancia();
        $sql=$conexionBD->query("SELECT * FROM empleado");
        foreach($sql->fecgAll() as $empleado){
            $listarEmpleados[]=new Empleado($empleado['id_empleado'],$empleado['nombre'],$empleado['dni'],$empleado['tele_movil']);
        }
        return $listarEmpleados;

        }

    public static function crear($nombre,$dni,$tele_movil){

            $conexionBD=BD::crearInstancia();
            $sql= $conexionBD->prepare("INSERT INTO empleado(nombre,dni,tele_movil) VALUES(?,?,?)");
            $sql->execute(array($nombre,$dni,$tele_movil));

       }
       
    }
?>