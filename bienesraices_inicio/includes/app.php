<?php

require 'funciones.php';
require 'config/database.php';
require __DIR__."/../vendor/autoload.php";

$db = conectDatabase(); // Verifica la conexion a la base de datos

use App\Propiedad;
Propiedad::setDB($db);
