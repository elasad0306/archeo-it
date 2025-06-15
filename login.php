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
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if (!empty($_POST['pseudo-user']) && !empty($_POST['password-user'])) {
        $userPseudo = htmlspecialchars($_POST['pseudo-user']);
        $userPassword = htmlspecialchars($_POST['password-user']);

        //Vérifier si le pseudo entrer et le mot de passe entrer sont correctes et existes
        $verifyUser = "SELECT * FROM user WHERE pseudo = :pseudo";
        $stmtVerify = $pdo->prepare($verifyUser);
        $stmtVerify->execute([":pseudo" => $userPseudo]);
        $checkPseudo = $stmtVerify->fetch();

        if (!empty($checkPseudo)) {
            if($checkPseudo["pseudo"] == $userPseudo){
                if(password_verify($userPassword, $checkPseudo['password'])){
                    session_start();
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['user'] = $userPseudo;
                    $_SESSION['admin'] = "John59";
                    echo '<script>
                                alert("Ravi de vous revoir sur Archeo-It '.$userPseudo.' ")
                                window.location.href = "index.php";
                          </script>';
                }else{
                    echo '<script>alert("Veuillez entrer le bon mot de passe")</script>';
                }
            }else{
                echo '<script>alert("Veuillez entrer le bon pseudo")</script>';
            }
        }
    }
}
$pdo = null;
?>

<!DOCTYPE html>
<html lang="fr">
<?php include 'includes/head.php'; ?>
<body>
<section id="">
    <h1>Archeo-It</h1>
    <div id="content-form">
        <a href="index.php"><i class="fa-solid fa-arrow-left"></i> Retour</a>
        <!--Champ à remplir !-->
        <form method="post">
            <!--Champ pour le pseudo !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Pseudo" class="input is-medium" name="pseudo-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-user"></i>
                </span>
            </div>
            <!--Champ pour le mot de passe !-->
            <div class="control has-icons-left">
                <input type="password" placeholder="Mot de passe" class="input is-medium" name="password-user">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-lock"></i>
                </span>
            </div>
            <!--- Boutton pour soumettre les informations !-->
            <div id="button-submit">
                <input type="submit" value="Se connecter" class="button is-success">
            </div>
            <span>Vous ne disposez pas de compte ? <a href="register.php" style="color: #007EFF">S'inscrire</a></span>
        </form>
    </div>
</section>