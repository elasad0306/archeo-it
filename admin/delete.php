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

$idArticle = $_GET['id'];

$deletePublication = "DELETE FROM publication WHERE id = :id";
$stmtDelete = $pdo->prepare($deletePublication);
$stmtDelete->execute([':id' => $idArticle]);
echo "<script>
alert('Article supprimé')
window.location.href = 'admin.php';
</script>";

$pdo = null;

