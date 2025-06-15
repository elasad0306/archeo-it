<?php
session_start();
$host = 'localhost';
$username = 'admin_archeo-it';
$password = 'Archeo-It2025';
$database = 'archeo_it';
$charset = 'utf8mb4';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$dsn = "mysql:host=$host;dbname=$database;charset=$charset;port=3306";
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

$idArticle = $_POST['id'];


//Requêtes pour sauvegarder les modifications
if(!empty($_POST['title']) && !empty($_POST['content'])){
    $title = $_POST['title'];
    $content = $_POST['content'];

    $updateArticle = 'UPDATE publication set title = :title, content = :content, update_at = NOW() WHERE id = :id';
    $stmtSaving = $pdo->prepare($updateArticle);
    $stmtSaving->execute([':title' => $title, ':content' => $content, ':id' => $idArticle]);
    echo "Votre modification a été prise en compte !";
}



$pdo = null;

?>



