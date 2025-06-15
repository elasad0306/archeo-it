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

if(!empty($_POST['title']) && !empty($_POST['type']) && !empty($_POST['content']) && !empty($_FILES['photo']) && $_FILES["photo"]["error"] == 0) {
    // Déplacez le fichier vers le répertoire cible.
    move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/image/" . $_FILES["photo"]["name"]);
    $title = htmlspecialchars($_POST['title']);
    $type = htmlspecialchars($_POST['type']);
    $content = ($_POST['content']);
    $img = htmlspecialchars($_FILES["photo"]["name"]);
    $savePublication = 'INSERT INTO publication (title, photo, type, content, create_at) VALUES (:title, :photo, :type, :content, NOW())';
    $prepareSaving = $pdo->prepare($savePublication);
    $prepareSaving->execute([':title' => $title, ':photo' => $img, ':type' => $type, ':content' => $content ]);


    if($prepareSaving){
        echo "Article ajouté";
    }
} else {
    echo "Erreur : " . $_FILES["photo"]["error"];
}
$pdo = null;
?>