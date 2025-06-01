<!DOCTYPE html>
<html lang="fr">
    <head>

        <title>Création d'article</title>
        <link rel="stylesheet" href="../assets/css/admin.css">
        <link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet">
    </head>

<body>
<section id="">
    <h1>Création d'article</h1>
</section>
<section>
    <form id="article-form" enctype="multipart/form-data">
        <div id="article-information">
            <!--Champ pour le titre de la publication!-->
            <label for="title">Titre de la publication</label>
            <input type="text" name="title" id="title">

            <!--Champ pour mettre la photo de couverture!-->
            <label for="photo">Photo de couverture </label>
            <input type="file" name="photo" id="photo">

            <label for="type-of-publication">Type de publication</label>
            <select name="type" id="type-of-publication">
                <option value="article">Articles</option>
                <option value="chantier">Chantiers</option>
            </select>

        </div>

        <!--Champ pour mettre le contenu!-->
        <div id="toolbar-container">
            <select class="ql-header">
                <option value="1">Titre 1</option>
                <option value="2">Titre 2</option>
                <option value="3">Titre 3</option>
                <option selected>Normal</option>
            </select>
            <button class="ql-bold"></button>
            <button class="ql-italic"></button>
            <button class="ql-link"></button>
            <button class="ql-list" value="ordered"></button>
            <button class="ql-list" value="bullet"></button>
        </div>
        <div id="editor">

        </div>
        <input type="hidden" id="content" name="content">
        <button type="submit">Enregister et publier </button>
    </form>
</section>
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script src="../assets/js/editor.js"></script>
</body>
</html>