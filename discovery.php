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

$discoveryDisplay = 'SELECT * FROM publication WHERE type = "chantier" ORDER BY create_at DESC';
$stmtDisplayDiscovery = $pdo->query($discoveryDisplay);
$discoveries = $stmtDisplayDiscovery->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="assets/css/discovery.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Chantiers</title>
</head>

<body>
<?php include "includes/header.php"; ?>

<main id="discovery-content">
    <!--Titre de la page !-->
    <h2 class="title is-2" id="title-page">Nos chantiers</h2>

    <!--Liste des chantiers sous forme de carte!-->
    <?php foreach ($discoveries as $discovery): ?>
    <div class="card" style="width: 18rem;">
        <img src="assets/image/<?= $discovery['photo']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $discovery['title']?></h5>
            <p class="card-text"><?= ucfirst($discovery['type'])?></p>
            <a href="display_article.php?id=<?= $discovery['id'] ?>" class="btn btn-primary">En savoir plus</a>
        </div>
    </div>
    <?php endforeach; ?>



</main>
<?php include 'includes/footer.php'; ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</html>
