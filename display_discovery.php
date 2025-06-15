<?php
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

$id_discovery = $_GET["id"];

$displayDiscovery = 'SELECT * FROM publication WHERE id = :id_article';
$stmt = $pdo->prepare($displayDiscovery);
$stmt->execute(['id_article' => $id_discovery]);
$discovery = $stmt->fetch();
$pdo = null;
?>
<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<link rel="stylesheet" href="assets/css/article.css">
<body>
<?php include 'includes/header.php'; ?>


<section>
    <article id="article">
        <!--1.Une balise pour le titre!-->
        <h1><strong><?= $discovery['title'] ?></strong></h1>
        <!--2.Mettre une balise image pour afficher la photo de couverture!-->
        <img width="390" height="205" src="assets/image/<?= $discovery['photo']?>" alt="Photo<?= $discovery['title'] ?>"><br>

        <!--4.Balise contenu!-->
        <div class="content-article">
            <?= $discovery['content'] ?>
        </div>

    </article>
</section>
<?php include 'includes/footer.php'; ?>
</body>

</html>
