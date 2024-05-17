<?php
namespace Model;
class Blog extends ActiveRecord{
    protected static $tabla="blog";
    protected static $columnaDb=['id','titulo','contenido','imagen'];

    public $id;
    public $titulo;
    public $contenido;
    public $imagen;

    public function __construct($args=[]){
       $this->id=$args['id'] ?? null;
       $this->titulo=$args['titulo'] ?? '';
       $this->contenido=$args['contenido'] ?? '';
       $this->imagen=$args['imagen'] ?? '';   
    }
    public function validar(){
        if(!$this->titulo){
            self::$errores[]="El titulo es obligatorio";
        }
        if(!$this->contenido){
            self::$errores[]="El contenido es obligatorio";
        }
        if(!$this->imagen){
            self::$errores[]="La imagen es obligatoria";
        }
        return self::$errores;
    }



}



?>