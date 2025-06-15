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

$id_article = $_GET["id"];

$displayArticle = 'SELECT * FROM publication WHERE id = :id_article';
$stmt = $pdo->prepare($displayArticle);
$stmt->execute(['id_article' => $id_article]);
$article = $stmt->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
    <link rel="stylesheet" href="assets/css/article.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <title><?= $article['title']?></title>
</head>

<body>
<?php include 'includes/header.php'; ?>


<section>
    <article id="article">
        <!--1.Une balise pour le titre!-->
        <h1><strong><?= $article['title'] ?></strong></h1>
        <!--2.Mettre une balise image pour afficher la photo de couverture!-->
        <img width="390" height="205" src="assets/image/<?= $article['photo']?>" alt="Photo<?= $article['title'] ?>"><br>
        <!--3.Pour afficher la date de publication!-->
        <span><em>Publié le  <?= $article['create_at']?></em></span><br>

        <!--4.Balise contenu!-->
        <div class="content-article">
            <?= $article['content'] ?>
        </div>

    </article>
</section>
<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

</body>

</html>
