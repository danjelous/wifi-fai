<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anfrage erhalten!</title>
</head>
<body>

  <h2>Vielen Dank für deine Anfrage, wir haben folgendes erhalten:</h2>
  <?php
    // Ausgabe eines Arrays (Debugging)
    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    // In $_POST sind alle Daten aus dem Formular vorhanden
    // echo $_POST['name']; // Hier ist der Name aus dem HTML-Feld des Formulars
  ?>

  <ul>
    <!-- Variante 1: Langschreibweise -->
    <!-- <li>Name: <?php // echo $_POST['name']; ?></li> -->

    <!-- Variante 2: Kurzschreibweise zur direkten Ausgabe -->
    <li>Name: <?= htmlspecialchars($_POST['name']); ?></li>
    <li>E-Mail: <?= htmlspecialchars($_POST['email']); ?></li>
  </ul>

  <span>Dein Kommentar:</span><br>
  <!-- WICHTIG!!!
    USER INPUT IMMER ESCAPEN / SANITIZEN (nicht ausführen)
    PROBLEM: HOLE MIR SONST SO SCHADCODE
  -->
  <!-- Mit htmlspecialchars Text nur anzeigen, nicht ausführen ('escapen') -->
  <p><?= htmlspecialchars($_POST['comment']); ?></p>

  <a href="index.php">Zur Startseite</a>
</body>
</html>