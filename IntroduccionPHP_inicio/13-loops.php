<?php include 'includes/header.php';

//loops
//while

$i = 0;
while($i < 10){
    echo $i . "<br>";
    $i++;
}

//do while
echo "<br>";
$i = 0;
do{
    echo $i . "<br>";
    $i++;
}while($i < 10);

echo "<br>";
//for
for($i = 0; $i < 10; $i++){
    echo $i . "<br>";
}
/**
 * 3 imprimir FIZZ
 * 5 imprimir BUZZ
 * 3 y 5 imprimir FIZZBUZZ
 */
/*echo "<br>";
for($i = 1; $i <= 100; $i++){
    if($i % 3 === 0 && $i % 5 === 0){
        echo $i."FIZZBUZZ <br>";
    }else if($i % 3 === 0){
        echo $i. "FIZZ <br>";
    }else if($i % 5 === 0){
        echo $i."BUZZ <br>";
    }
}
*/

$cliente = array('pedro', 'juan', 'jose', 'maria', 'luisa');
foreach($cliente as $clientes){
    echo $clientes . "<br>";
}

echo count($cliente) . "<br>";  

for($i = 0; $i < count($cliente) ;$i ++)
{
    echo $cliente[$i] . "<br>";
}

$cliente = array(
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => array(
        'tipo' => 'premium',
        'codigo' => 1234
    )
);
foreach($cliente as $key => $value){
    if(is_array($value)){
        foreach($value as $key2 => $value2){
            echo $key2 . " : " . $value2 . "<br>";
        }
    }else{
        echo $key . " : " . $value . "<br>";
    }
}

include 'includes/footer.php';