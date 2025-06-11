<?php include 'includes/header.php';
//conectar db con mysqli

$db = new mysqli('localhost', 'root', 'root','bienesraices_crud');
$query = ("SELECT titulo FROM propiedades");
$stmt = $db->prepare($query);

$stmt->execute();
$stmt->bind_result($titulo);
$stmt->fetch();

var_dump($titulo);

include 'includes/footer.php';