<?php include 'includes/header.php';

$nuemro1 = 20;
$nuemro2 = 10;
$nuemro3 = 5;
$nuemro4 = 10;

var_dump($nuemro1 == $nuemro2); //false
var_dump($nuemro1 == $nuemro3); //false
var_dump($nuemro1 == $nuemro4); //true
var_dump($nuemro1 === $nuemro4); //true 

var_dump($nuemro1 < $nuemro2); //true
var_dump($nuemro1 > $nuemro2); //false
var_dump($nuemro1 <= $nuemro2); //false
var_dump($nuemro1 >= $nuemro2); //true
var_dump($nuemro1 != $nuemro2); //true
var_dump($nuemro1 !== $nuemro2); //true
var_dump($nuemro1 != $nuemro4); //false


include 'includes/footer.php';