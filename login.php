<?php
include 'includes/db.php';
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
        <form>
            <!--Champ pour le pseudo !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Pseudo" class="input is-medium">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-user"></i>
                </span>
            </div>
            <!--Champ pour le mot de passe !-->
            <div class="control has-icons-left">
                <input type="password" placeholder="Mot de passe" class="input is-medium">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-lock"></i>
                </span>
            </div>
            <!--- Boutton pour soumettre les informations !-->
            <div id="button-submit">
                <input type="submit" value="Se connecter" class="button is-success">
            </div>
            <span>Vous ne disposez pas de compte ? <a href="#" style="color: #007EFF">S'inscrire</a></span>
        </form>
    </div>
</section>