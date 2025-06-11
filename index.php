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

/*if (empty($_SESSION['user'])){
    $articleLimits = 'SELECT * FROM publication WHERE type = "article" LIMIT 3 ';
    $stmtArticleLimits = $pdo->query($articleLimits);
    $articleLimits = $stmtArticleLimits->fetchAll();
}else{
    $articleFull = 'SELECT * FROM publication WHERE type = "article" ';
    $stmtArticleFull = $pdo->query($articleFull );
    $articlesFull = $stmtArticleFull->fetchAll();
}*/

if(empty($_SESSION['user'])){
    $article = 'SELECT * FROM publication WHERE type = "article" LIMIT 3 ';
}else{
    $article = 'SELECT * FROM publication WHERE type = "article" ';
}
$stmtArticleFull = $pdo->query($article);
$articlesFull = $stmtArticleFull->fetchAll();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include 'includes/head.php'; ?>
        <title>Accueil</title>
    </head>
    <body>
        <?php include 'includes/header.php';?>
        <section id="home_page">

            <div id="latest_article">
                <h4><strong>Dernier article</strong></h4>

                <div class="card">
                    <?php if(!empty($articlesFull)){
                        $latestArticle = array_shift($articlesFull);
                    } ?>
                    <a href="display_article.php?id=<?= $latestArticle['id'] ?>">
                    <div class="card-image">
                        <figure class="image is-5by4">
                            <img width="360" height="205" src="assets/image/<?= $latestArticle['photo']?>"  id="cover-picture" alt="Photo <?= $latestArticle['title']?>" />
                        </figure>
                    </div>
                    </a>
                    <div class="card-content">
                            <div class="media-content">
                                <span class="subtitle is-6">Publié <?= $latestArticle['create_at']?></span>
                            </div>
                        <div class="content">
                            <span class="title is-5"><?= $latestArticle['title']?></span>
                        </div>
                    </div>

                </div>
            </div>

            <div id="other_article">
                <h4><strong>Autres articles</strong></h4>
                <?php foreach ($articlesFull as $article):?>
                <div class="article">
                    <?= $article['title']?>
                </div>
                <?php endforeach;?>
                <?php if(empty($_SESSION['user'])):?>
                <div class="button_connect">
                    <a class="button is-primary is-dark" href="register.php">S'inscrire </a>
                    <span>ou</span>
                    <a class="button is-primary is-dark" href="login.php">Se connecter</a>
                </div>
                <?php else:?>
                <div>You are connected</div>
                <?php endif; ?>
            </div>
        </section>
    <?php include 'includes/footer.php'; ?>
    </body>

</html>