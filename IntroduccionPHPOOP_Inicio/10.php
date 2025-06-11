<?php include 'includes/header.php';

// Conectar a la base de datos con pdo
$db = new PDO('mysql:host=localhost;dbname=bienesraices_crud', 'root', 'root');
$query = "SELECT titulo FROM propiedades";
$stmt = $db->prepare($query);
$stmt->execute();
$titulo = $stmt->fetchColumn();
var_dump($titulo);

include 'includes/footer.php';