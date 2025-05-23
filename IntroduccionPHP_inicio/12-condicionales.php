<?php include 'includes/header.php';

//if
$autenticado = true;
$admin = false;

if($autenticado || $admin){
    echo "Usuario autenticado";
}else{
    echo "Usuario no autenticado";
}

if($autenticado && $admin){
    echo "Usuario autenticado y admin";
}else{
    echo "Usuario no autenticado o no es admin";
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'codigo' => 1234
    ]
];

echo '<br>';
if(!empty($cliente)){
    echo "El arreglo no esta vacio"; 

    if($cliente['saldo'] > 0){
        echo "El cliente tiene saldo";
    }else{
        echo "El cliente no tiene saldo";
    }

}


//else if
echo '<br>';
if($cliente['saldo'] > 0){
    echo "El cliente tiene saldo";
}else if($cliente['informacion']['tipo'] === 'premium'){
    echo "El cliente es premium";
}else{
    echo "El cliente no tiene saldo y no es premium";
}


//switch
echo '<br>';
$tecnologiua = 'php';
switch($tecnologiua){
    case 'js':
        echo "JavaScript";
        break;
    case 'php':
        echo "PHP";
        break;
    case 'html':
        echo "HTML";
        break;
    default:
        echo "No es una tecnologia web";
}
include 'includes/footer.php';