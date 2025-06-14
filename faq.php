<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'includes/head.php'; ?>

    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>FAQ</title>
</head>
<?php include 'includes/header.php'; ?>
<body>
<h1 style="text-align: center">FAQ</h1>
<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Qu'est-ce qu'Archeo-IT ?
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Archeo-IT est une plateforme dédiée à la valorisation, à la recherche et à la diffusion des connaissances en archéologie. Nous combinons expertise scientifique et outils numériques pour documenter, préserver et partager le patrimoine archéologique.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                À qui s'adresse Archeo-IT ?
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <strong>Chercheurs et archéologues :</strong> pour la gestion de données de fouilles et la publication de résultats.<br>

                <strong>Étudiants :</strong> pour accéder à des ressources pédagogiques, des stages et des projets collaboratifs.<br>

                <strong>Grand public :</strong> pour découvrir les découvertes archéologiques récentes et les actualités du terrain.<br>

                <strong>Collectivités et musées :</strong> pour bénéficier de nos services de numérisation, reconstitution 3D ou SIG.<br>


            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Peut-on visiter vos chantiers ?
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Certaines de nos fouilles partenaires sont ouvertes au public à certaines périodes. Consultez notre <a href="events.php">calendrier des événements</a> pour connaître les prochaines visites guidées ou portes ouvertes.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                Comment collaborer avec Archeo-IT ?
            </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Vous pouvez :
                <ul>
                    <li>Proposer un site ou un projet à documenter</li>
                    <li>Devenir partenaire de recherche ou de valorisation</li>
                    <li>Nous contacter via notre formulaire de contact pour toute proposition</li>
                </ul>



            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>

