<?php

namespace App;

class Propiedad{
    
    protected static $db;
    protected static $columnas_DB= ['id', 'titulo', 'precio', 'imagen', 'descripcion', 'habitaciones', 'wc', 'estacionamiento', 'creado', 'vendedores_id'];
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
    $this->id = $args['id'] ?? null;
    $this->titulo = $args['titulo'] ?? '';
    $this->precio = $args['precio'] ?? 0;
    $this->imagen = $args['imagen'] ?? 'imagen.jpg';
    $this->descripcion = $args['descripcion'] ?? '';
    $this->habitaciones = $args['habitaciones'] ?? 0;
    $this->wc = $args['wc'] ?? 0;
    $this->estacionamiento = $args['estacionamiento'] ?? 0;
    $this->creado = date('Y/m/d');
    $this->vendedores_id = $args['vendedores_id'] ?? 0;
    }

    public function guardar(){

        // Sanitizar los datos
        $atributos= $this->sanitizarDatos();
        

        $query = "INSERT INTO popiedades (";
        $query .= join(', ', array_keys($atributos));
        $query .= " ) VALUES (' ";
        $query .= join(', ', array_values($atributos));
        $query .= " ')";

        $resultado=self::$db->query($query);
        debuguear($resultado);
        
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
}