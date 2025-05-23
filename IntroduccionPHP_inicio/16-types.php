<?php include 'includes/header.php';


function usuarioAutenticado(bool $autenticado) :string{
    if($autenticado){
        return "Usuario autenticado";
    }else{
        return "no autenticado"();
    }
}

$usuario = usuarioAutenticado(true);
var_dump($usuario);

include 'includes/footer.php';