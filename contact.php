<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// Inclure les fichiers PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
$mail = new PHPMailer(true);
if(!empty($_GET['firstname']) && !empty($_GET['name']) && !empty($_GET['mail']) && !empty($_GET['subject']) && !empty($_GET['message'])){
    try {
        // Configuration du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io'; // Spécifiez votre serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = '5b2af1703d3e32'; // Adresse e-mail SMTP
        $mail->Password = 'f351f9c00cd416'; // Mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Activer le chiffrement TLS; `PHPMailer::ENCRYPTION_SMTPS` encouragé
        $mail->Port = 2525; // Port utiliser
        // Destinataires
        $mail->setFrom( $_GET['mail']);
        $mail->addAddress('contact@archeo-it.fr' ); // Ajoutez un destinataire
        // Contenu
        $mail->isHTML(false); // Définir le format de l'e-mail en HTML
        $mail->Subject = $_GET['subject'];
        $mail->Body = $_GET['message'];
        $mail->AltBody = 'Ceci est le corps en texte brut pour les clients de messagerie non HTML';
        $mail->send();
        echo '<script>alert("Message envoyé")</script>';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur de Mailer : {$mail->ErrorInfo}";
    }
}

$pdo = null;
?>
  <!DOCTYPE html>
  <html lang="fr">
  <head>
      <?php include 'includes/head.php'; ?>
      <meta charset="UTF-8">
      <title>Archeo-It - Contact</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

  </head>
  <body>

  <?php
  include 'includes/header.php';
  ?>

  <main>
      <h2>Nous contacter</h2>
      <form method="get">
          <div class="form-row">
              <input type="text" name="firstname" placeholder="Prénom" class="input is-medium">
              <input type="text" name="name" placeholder="Nom" class="input is-medium">
              <input type="email" name="mail" placeholder="Email" class="input is-medium">
              <div class="select">
                  <select name="subject">
                      <option disabled selected>--Sujet de discussion--</option>
                      <option value="Demande d'info">Demande d'info</option>
                      <option value="Demande de rendez-vous">Demande de rendez-vous</option>
                      <option value="Autre">Autre</option>
                  </select>
              </div>



              <textarea placeholder="Ecrivez votre message ici..." name="message" class="textarea"></textarea>
              <div class="button-container">
                  <button type="submit">Envoyer</button>
              </div>
      </form>
  </main>

<?php include 'includes/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
  </html>
