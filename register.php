<?php
include 'includes/db.php';
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
        <form>
            <!--Champ pour l'email !-->
            <div class="control has-icons-left">
                <input type="email" placeholder="Email" class="input is-medium">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-envelope"></i>
                </span>
            </div>
            <!--Champ pour le pseudo !-->
            <div class="control has-icons-left">
                <input type="text" placeholder="Pseudo" class="input is-medium">
                <span class="icon is-small is-left">
                    <i class="fa-solid fa-user"></i>
                </span>
            </div>
            <!--Boutton pour générer un mot de passe!-->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Générer mon mot de passe
            </button>
            <!--Champ pour le mot de passe !-->
            <div class="control has-icons-left">
                <input type="password" placeholder="Mot de passe" class="input is-medium">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Générateur de mot de passe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <label for="numberofcharacter">Nombre de caractère</label>
                <input type="number" name="number" id="numberofcharacter" class="form-control">

                <label>Difficultés du mot de passe</label>
                <select class="form-select" id="type-of-password">
                    <option disabled selected>-- Sélectionner la difficulté du mot de passe --</option>
                    <option value="alpha" >Alphabétique</option>
                    <option value="alphaNum">Alphabétique et Numérique</option>
                    <option value="alphaNumChar">Alphabétique, numérique et caractères spéciaux</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"data-bs-dismiss="modal">Fermé</button>
                <button type="button" class="btn btn-success" onclick="generatePassword()">Générer </button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<script src="assets/js/password.js"></script>

</body>