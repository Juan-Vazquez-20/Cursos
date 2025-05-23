
<?php

function obtener_servicios(){
    try{
        //importar credenciales
        require 'database.php';
        //consultas sql
        $sql = "SELECT * FROM servicios;";
        //realizar la consulta
        $consulta = mysqli_query($db, $sql);
        //recibir los resultados


        echo "<pre>";
        var_dump(mysqli_fetch_assoc ($consulta));
        echo "</pre>";

        return $consulta;
        //cerrar la conexion
        $resultado = mysqli_close($db);
        var_dump($resultado);
        }catch(\Throwable $th){
            var_dump($th);
        }
}

obtener_servicios();