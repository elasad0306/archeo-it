
  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Archeo-It - Contact</title>
      <link rel="stylesheet" href="assets/css/contact.css">
  </head>
  <body>

  <?php
  include 'includes/header.php';
  ?>

  <main>
      <h2>Nous contacter</h2>
      <form >
          <div class="form-row">
              <input type="text" placeholder="Prénom">
              <input type="text" placeholder="Nom">
              <input type="text" placeholder="Email">
              <select>
                  <option disabled selected>--Sujet de discussion--</option>
                  <option>Demande d'info</option>
                  <option>Demande de rendez-vous</option>
                  <option>Autre</option>
              </select>
              <textarea placeholder="Ecrivez votre message ici..."></textarea>
              <div class="button-container">
                  <button type="submit">Envoyer</button>
              </div>
      </form>
  </main>

<?php include 'includes/footer.php'; ?>
  </body>
  </html>
