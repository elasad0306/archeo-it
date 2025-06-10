
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include '../includes/head.php'; ?>
    <meta charset="utf-8">
    <title>Ajout d'évenèment</title>
    <link rel="stylesheet" href="../assets/css/add_event.css">
</head>
<body>
<form id="add-event" method="post" action="save_event.php">
    <h1>Ajout d'évènement</h1>
    <a href="admin.php" style="text-decoration: none; color: black"><i class="fa-solid fa-arrow-left" style="color: #000000;"></i> Retour</a>
    <!--Nom de l'évènemet!-->
    <label for="event_title">Titre de l'évènement</label>
    <input type="text" name="event_title" id="event_title"   class="input is-primary">

    <!--Adresse de k'évènement!-->
    <label for="event_address">Adresse de l'évènement</label>
    <input type="text" name="event_address" id="event_address"  class="input is-primary">

    <!--Début de l'évènement!-->
    <label for="event_start">Début de l'évènement</label>
    <input type="date" name="event_start" id="event_start"  class="input is-primary">

    <!--Fin de l'évènement !-->
    <label for="event_end">Fin de l'évènement</label>
    <input type="date" name="event_end" id="event_end"  class="input is-primary">

    <!--Information sur l'évènement!-->
    <label for="other_information">Autres informations sur l'évènement</label>
    <textarea name="other_information" rows="5"  id="other_information" class="textarea is-info"></textarea>

    <input type="submit" class="button is-primary">
</form>

</body>

</html>
