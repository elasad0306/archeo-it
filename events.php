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

$displayEvents = 'SELECT * FROM agendas';
$stmtEvents = $pdo->query($displayEvents);
$displayEvents = $stmtEvents->fetchAll();
$pdo = null;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Evènements</title>
</head>
<body>
<?php include 'includes/header.php'; ?>
<h1>Nos évènements </h1>
<?php foreach ($displayEvents as $displayEvent) : ?>

<section id="event-display">
    <div id="illustration">
        <img src="assets/image/illustration_events.png" alt="Illustration fouille archéologique">
    </div>
    <div id="information-event">
        <h2><?= $displayEvent['event_name']?></h2>
        <p>Adresse : <?= $displayEvent['event_location']?></p>
        <p>Date : du <?= date("d-m-y", strtotime($displayEvent['start_date']))?> au <?=date("d-m-y", strtotime($displayEvent['end_date']))?></p>
        <p>Autre information : <br><?= $displayEvent['information_event']?></p>
    </div>

</section>
    <div id="line"></div>
<?php endforeach; ?>
<?php include 'includes/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>