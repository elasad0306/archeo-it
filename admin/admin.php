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


$displayPost = 'SELECT * FROM publication';
$stmt = $pdo->query($displayPost);
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include '../includes/head.php'; ?>
    <meta charset="utf8">
    <title>Administration</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>

<div id="administration-page">
    <div id="menu-band">
        <ul>
            <li><a href="../index.php">Accueil</a></li>
            <li><a href="add_article.php">Créer des articles</a></li>
            <li><a href="add_event.php">Ajouter un évenement</a></li>
            <li><a href="../includes/logout.php">Se déconnecter</a></li>
        </ul>
    </div>
    <!--Afficher tous les articles qui ont été publier sur le site web!-->
    <div id="all-articles">
        <span>Nos publications</span>
        <div id="card-article">


        <?php foreach ($posts as $post): ?>
        <div class="card" style="width: 20rem; padding: 5px; height: max-content">
            <img  src="../assets/image/<?= $post['photo']?>" class="card-img-top" alt="Photo <?= $post['title']?>">
            <div class="card-body">
                <p class="card-text">Publié le <?= $post['create_at']?></p>
                <p class="card-text">Type : <?= ucfirst($post['type'])?></p>
                <p class="card-text"><?= ucfirst($post['title'])?></p>
            </div>
            <div class="action-btn">
                <a  class="btn btn-primary" href="update_article.php?id=<?= $post['id'] ?>"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i> Modifier</a>
                <a class="btn btn-danger" href="delete.php?id=<?= $post['id'] ?>"><i class="fa-solid fa-trash" style="color: #ffffff;"></i> Supprimer</a>
            </div>


        </div>
        <?php endforeach; ?>
        </div>

    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>