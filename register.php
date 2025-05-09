<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf8">
    <title>Accueil</title>
    <script src="https://kit.fontawesome.com/0cb37bcd4e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="assets/css/connection.css">
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
<section>
    <div id="register_content">
        <!--For username!-->
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="text" placeholder="Pseudo" id="username"/>
            <span class="icon is-small is-left">
                <i class="fa-solid fa-user"></i>
            </span>
        </p>
        <!--For email!-->
        <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Email" id="mail"/>
        <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
        </span>
        <span class="icon is-small is-right">
            <i class="fas fa-check"></i>
        </span>
        </p>
        <!--For password!-->
        <p class="control has-icons-left">
            <input class="input" type="password" placeholder="Password" id="password"/>
            <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
            </span>
        </p>
    </div>
</section>

</body>