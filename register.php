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



if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['email-user']) && !empty($_POST['name-user']) && !empty($_POST['pseudo-user']) && !empty($_POST['password-user'])) {
        $emailUser = htmlspecialchars($_POST['email-user']);
        $nameUser = htmlspecialchars($_POST['name-user']);
        $pseudoUser = htmlspecialchars($_POST['pseudo-user']);
        $passwordUser = password_hash(htmlspecialchars($_POST['password-user']), PASSWORD_DEFAULT);

        $verifyUser = "SELECT * FROM user WHERE email = :email OR pseudo = :pseudo";
        $stmtVerify = $pdo->prepare($verifyUser);
        $stmtVerify->execute(['email' => $emailUser, 'pseudo' => $pseudoUser]);
        $checkUser = $stmtVerify->fetch();
        if(!empty($checkUser))  {
            if($checkUser['email'] == $emailUser) {
                echo "<script>alert('❌ Cet email est déja utilisé')</script>";
            }
            echo "<script>alert('❌ Pseudo a déja été pris')</script>";

        }else{
            $registerUser = "INSERT INTO user (email, name, pseudo, password) VALUES (:email, :name, :pseudo, :password)";
            $stmtSavingUser = $pdo->prepare($registerUser);
            $stmtSavingUser->execute([":email" => $emailUser, ":name" => $nameUser, ":pseudo" => $pseudoUser, "password" => $passwordUser]);

            $userId = $pdo->lastInsertId();

            $_SESSION['userId'] = $userId;
            $_SESSION['userName'] = $nameUser;
            $_SESSION['pseudo'] = $pseudoUser;
            $_SESSION['email'] = $emailUser;

            echo "<script>
                alert('Votre compte a bien été crée ✅')
                window.location.href = 'index.php';
            </script>";
            exit();

    }echo "<script>
                 alert('Veuillez remplir tous les champs')
                 window.location.href = 'register.php';
            </script>";


   }




}



?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

</head>

<body>
<section id="">
    <h1>Archeo-It</h1>
    <div id="content-form">
        <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Retour</a>
        <!--Champ à remplir !-->
        <form method="post">
            <!--Champ pour l'email !-->
            <div class="control has-icons-left">
                <input type="email" placeholder="Email" class="input is-medium" name="email-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-envelope"></i>
                </span>
            </div>
            <!--Champ pour le nom !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Nom" class="input is-medium" name="name-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-address-card"></i>
                </span>
            </div>
            <!--Champ pour le pseudo !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Pseudo" class="input is-medium" name="pseudo-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-user"></i>
                </span>
            </div>
            <!--Boutton pour générer un mot de passe!-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-generate-password">
                Générer mon mot de passe
            </button>
            <!--Champ pour le mot de passe !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Mot de passe" id="password" class="input is-medium" name="password-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-lock"></i>
                </span>

            </div>
            <!--- Boutton pour soumettre les informations !-->
            <div id="button-submit">
                <input type="submit" value="S'inscrire" class="button is-success">
            </div>
            <span>Avez vous déja un compte ? <a href="login.php" style="color: #007EFF">Se connecter</a></span>
        </form>
    </div>
</section>

<!-- Modal pour générer le mot de passe -->
<div class="modal fade" id="modal-generate-password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Générateur de mot de passe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="number-of-character">Nombre de caractère</label>
                <input type="number" name="number" id="number-of-character" class="form-control">

                <label>Difficultés du mot de passe</label>
                <select class="form-select" id="type-of-password">
                    <option disabled selected>-- Sélectionner la difficulté du mot de passe --</option>
                    <option value="alpha" >Alphabétique</option>
                    <option value="alphaNum">Alphabétique et Numérique</option>
                    <option value="alphaNumChar">Alphabétique, numérique et caractères spéciaux</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermé</button>
                <button type="submit" class="btn btn-success" id="button-generate">Générer </button>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/password.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


</body>