<?php

namespace Model;
class ActiveRecord{
    protected static $db;
    //mi base de datos
    protected static $columnaDb = [];
    //errores
    protected static $errores = [];
    //tabla
    protected static $tabla='';

    public $id;
    public $imagen='';
   
    //definir la conexion a la bd
    public static function setDB($database){
        self::$db = $database;
    }
    public function getErrores(){
        return static::$errores;
    }
    public function validar(){
        static::$errores=[];
        return static::$errores;
    }
    public function guardar(){
        if(is_null($this->id)){
            $this->crear();
        }   
    }
    public function atributos(){
        $atributos=[];
        foreach(static::$columnaDb as $columna){
            if($columna === 'id')continue;
            $atributos[$columna]=$this->$columna;
        }
        return $atributos;
    }
    //SANITIZAR ATRIBUTOS
    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizando = [];
        foreach($atributos as $key => $value){
            $sanitizando[$key] = self::$db->real_escape_string($value);
        }
        return $sanitizando;
    }
    
    //metodo crear
    public function crear(){
        $atributos=$this->sanitizarAtributos();
        $query="INSERT INTO ". static::$tabla . " (";
        $query.= implode(', ', array_keys($atributos)). ") ";
        $query.= "VALUES ('";
        $query.= implode("', '", array_values($atributos))."')";
        $resultado = self::$db->query($query);
        if($resultado){
            header('location:/admin?resultado=1');
            exit;
        }
    }
      //subida de archivos
      public function setImagen($imagen)
      {
          //asignar al atributo imagen el nombre d ela imagen
          if(isset($this->id)){
              //comprobar si existe el archivo
              if ($this->imagen) {
                 $this->borrarImagen();
              }
          }
          
          // Asignar la nueva imagen
          $this->imagen = $imagen;
      }
      //eliminando imagen
      public function borrarImagen(){
          $rutaImagenAnterior = CARPETA_IMAGENES . $this->imagen;
          if (file_exists($rutaImagenAnterior)) {
              unlink($rutaImagenAnterior);
          }
  
      }   
  
    public static function all(){
        $query="SELECT * FROM curso";
        $resultado=self::consultarSQL($query);
        return $resultado;
    }

   public static function consultarSQL($query){
    $resultado=self::$db->query($query);
    $array=[];
    while($registro=$resultado->fetch_assoc()){
        $array[]=static::crearObjeto($registro);
    }
    //liberar memoria
    $resultado->free();
    //retornar los resultados
    return $array;
   }

    public static function crearObjeto($registro){
        $objeto=new static;
        foreach($registro as $key=>$value){
            if(property_exists($objeto, $key)){
                $objeto->$key=$value;
            }
        }
        return $objeto;
    }
}
?>