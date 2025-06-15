<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include '../includes/head.php'; ?>
        <title>Création d'article</title>
        <link rel="stylesheet" href="../assets/css/add_article.css">
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    </head>

<body>

<section>
    <form id="article-form" enctype="multipart/form-data">
        <h1>Création d'article</h1>
        <a href="admin.php" style="text-decoration: none; color: black"><i class="fa-solid fa-arrow-left" style="color: #000000;"></i> Retour</a>
        <div id="article-information">
            <!--Champ pour le titre de la publication!-->
            <label for="title">Titre de la publication</label>
            <input class="input is-primary" type="text" name="title" id="title">

            <!--Champ pour mettre la photo de couverture!-->
            <label for="photo">Photo de couverture </label>
            <input class="input is-primary"  type="file" name="photo" id="photo" >

            <label for="type-of-publication">Type de publication</label>
            <div class="select is-primary">
                <select name="type" id="type-of-publication">
                    <option disabled selected>-- Sélectionnez une option</option>
                    <option value="article">Articles</option>
                    <option value="chantier">Chantiers</option>
                </select>
            </div>
            <br>


        </div>

        <!--Champ pour mettre le contenu!-->
        <div id="toolbar-container">
            <select name="header" class="ql-header">
                <option value="1">Titre 1</option>
                <option value="2">Titre 2</option>
                <option value="3">Titre 3</option>
                <option selected>Normal</option>
            </select>
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-link"></button>
            <button class="ql-size"></button>
            <button class="ql-list" value="ordered"></button>
            <button class="ql-list" value="bullet"></button>
        </div>


        <div id="editor" >

        </div>
        <br>
        <input type="hidden" id="content" name="content">
        <button type="submit" class="button is-primary">Enregister et publier </button>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script src="../assets/js/editor.js"></script>
</body>
</html>