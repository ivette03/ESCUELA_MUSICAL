<?php
namespace Model;
class Curso extends ActiveRecord{
    protected static $tabla="curso";
    protected static $columnaDb=['id','nombre','descripcion','hora_inicio','hora_fin','imagen'];
    public $id;
    public $nombre;
    public $descripcion;
    public $hora_inicio;
    public $hora_fin;
    public $imagen;

    
    public function __construct($args=[]){
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? '';
        $this->descripcion=$args['descripcion'] ?? '';
        $this->hora_inicio=$args['hora_inicio'] ?? '';
        $this->hora_fin=$args['hora_fin'] ?? '';
        $this->imagen=$args['imagen'] ?? '';
    }

    public function validar(){
        if(!$this->nombre){
            self::$errores[]='El nombre es obligatorio';
        }
        if(strlen($this->descripcion) < 50 ){
            self::$errores[]="La descripción es obligatoria y debe ser menor de 50 caracteres";
        }
        if(!$this->hora_inicio){
            self::$errores[]='La hora de inicio es obligatorio';
        }
        if(!$this->hora_fin){
            self::$errores[]='La hora final es obligatoria';
        }
        if(empty($_FILES['curso']['tmp_name']['imagen']) || $_FILES['curso']['error']['imagen'] !== UPLOAD_ERR_OK){
            self::$errores[]='La imagen es obligatoria';
        }
        
        return self::$errores;
    }
}


?>