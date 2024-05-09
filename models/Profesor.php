<?php
namespace Model;

class Profesor extends ActiveRecord{
    protected static $tabla="profesor";
    protected static $columnaDb=['id','nombre','apellido','descripcion','imagen'];
    public $id;
    public $nombre;
    public $apellido;
    public $descripcion;
    public $imagen;

    public function __construct($args=[]){
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? '';
        $this->apellido=$args['apellido'] ?? '';
        $this->descripcion=$args['descripcion'] ?? '';
        $this->imagen=$args['imagen'] ?? '';

    }
    public function validar(){
        if(!$this->nombre){
            self::$errores[]="El nombre el obligatorio";
        }
        if(!$this->apellido){
            self::$errores[]="El apellido es obligatorio";
        }
       
        if(!$this->descripcion){
            self::$errores[]="La descripción es obligatoria";
        }
        
        if(!$this->imagen){
            self::$errores[]="La imagen es obligatoria";
        }
        return self::$errores;
    }
    

}


?>