<?php

namespace App;

class Propiedad{
    
    protected static $db;
    protected static $columnas_DB= ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];

    //error messages
    protected static $errores = [];


    public $id;
    public $titulo;
    public $precio; 
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedores_id;

    public function __construct($args = []){
    $this->id = $args['id'] ?? '';
    $this->titulo = $args['titulo'] ?? '';
    $this->precio = $args['precio'] ?? '';
    $this->imagen = $args['imagen'] ?? '';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->habitaciones = $args['habitaciones'] ?? '';
    $this->wc = $args['wc'] ?? '';
    $this->estacionamiento = $args['estacionamiento'] ?? '';
    $this->creado = date('Y/m/d');
    $this->vendedores_id = $args['vendedores_id'] ?? 1;
    }

    public function guardar(){

        // Sanitizar los datos
        $atributos= $this->sanitizarDatos();
        

        $query = "INSERT INTO propiedades (";
        $query .= join(', ', array_keys($atributos));
        $query .= ") VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "')";
        
        $resultado=self::$db->query($query);
        return $resultado;
        
    }

    public static function setDB($database){
        self::$db = $database;
    }
    public function atributos(){
        $atributos = [];
        foreach(self::$columnas_DB as $columna){ 
            if($columna === 'id') continue; // No queremos incluir el id en los atributos
            $atributos[$columna] = $this->$columna;
        }
    return $atributos; 
    }

    public function sanitizarDatos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){
           $sanitizado[$key]= self::$db->escape_string($value);
        }
        return $sanitizado;
    }

    public static function getErrores(){
        return self::$errores;
    }

    public function validar(){
        // Validar los datos
        if(!$this->titulo){
            self::$errores[] = 'Debes añadir un titulo';
        }
        if(!$this->precio){
            self::$errores[] = 'El precio es obligatorio';
        }
        if(strlen($this->descripcion) < 50){
            self::$errores[] = 'La descripcion debe tener al menos 50 caracteres';
        }
        if(!$this->habitaciones){
            self::$errores[] = 'El numero de habitaciones es obligatorio';
        }
        if(!$this->wc){
            self::$errores[] = 'El numero de baños es obligatorio';
        }
        if(!$this->estacionamiento){
            self::$errores[] = 'El numero de estacionamientos es obligatorio';
        }
        //if(!$this->vendedores_id){
          //  self::$errores[] = 'Elige un vendedor';
        //}
        if(!$this->imagen){
            self::$errores[] = 'La imagen es obligatoria';
        }
        
        return self::$errores;
    }

    public function setImagen($imagen){
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    public static function all(){
        $query = "SELECT * FROM propiedades";
        $resultado= self::consultaSQL($query);
        return $resultado;
    }

    public static function consultaSQL($query){
        //consultar la base de datos
        $resultado = self::$db->query($query);
        //iterar los resultados
        $array = [];
        while($registro = $resultado->fetch_assoc()){
            $array[] = self::crearObjetos($registro); // Crear una instancia de la clase Propiedad
        } 
        //liberar la memoria
        $resultado->free();
        //retornar los resultados
        return $array;
    }

    protected static function crearObjetos($registro){
        $objeto = new self;
        foreach($registro as $key => $value){
            if(property_exists($objeto, $key)){
                $objeto->$key = $value;
            }
        }
        return $objeto;
    }
}