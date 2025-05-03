<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf8">
        <title>Accueil</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/home.css">
    </head>
    <body>
        <header>
            <div id="logo">
                <span>Archeo-It</span>
            </div>
            <div id="navbar">
                <nav>
                    <a>Accueil</a>
                    <a>Découvertes</a>
                    <a>Contact</a>
                </nav>
            </div>
        </header>
        <section id="home_page">
            <div id="latest_article">
                <h4>Dernier article</h4>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-5by4">
                            <img src="https://bulma.io/assets/images/placeholders/1280x960.png" alt="Placeholder image" />
                        </figure>
                    </div>
                    <div class="card-content">
                            <div class="media-content">
                                <span class="subtitle is-6">Publié par<!--le nom du rédacteur!--> le <!--Date de publication!--> </span>
                            </div>
                        <div class="content">
                            <span class="title is-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus neciaculis mauris.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="other_article">
                <h4>Autres articles</h4>
                <div class="article">
                    Titre 1
                </div>
                <div class="article">
                    Titre 2
                </div>
                <div class="button_connect">
                    <a class="button is-primary is-dark" href="register.php">S'inscrire </a>
                    <span>ou</span>
                    <a class="button is-primary is-dark" href="login.php">Se connecter</a>
                </div>
            </div>
        </section>
    </body>

</html>