<?php
  // Mit include (_once) kann ich PHP-Files einbinden. Analog zu CSS & JS
  include_once('functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Intro</title>

  <!-- Kann CSS wie gewohnt einbinden -->
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  
  <!-- Öffnendes PHP-Tag: ab hier beginnt PHP -->
  <?php
    // Funktion aufrufen - dann 'passiert' das was in den geschwungenen Klammern steht
    print_nav();

    // Mit 'echo' Einfache Textausgabe
    echo '<h1>hello PHP-world!</h1>';
    echo '<p>Some text...</p>';

    // Bedingte Ausgabe ('Conditional Rendering')
    $is_monday = true;

    if ($is_monday) {
      // Ausgabe wenn heute Montag ist.
      echo '<p>Heute Montag 🤌</p>';
    } else {
      // Wenn die Prüfung falsch ist (nicht stimmt) gebe ich das aus
      echo '<p>Heute nicht Montag 🎉</p>';
    }

    // Schleifen - here we go again!
    for ($i = 0; $i < 10; ++$i) {
      echo $i . '<br>'; // Strings (Text) verketten mit Punkt
    }
  ?>
  <!-- Eine Zeile darüber wird das Tag wieder geschlossen. Ab hier wieder HTML-Ausgabe -->

  <h2>Kontaktformular dé PHP</h2>
  <form action="form-received.php" method="post">
    <div>
      <label for="name">Dein Name</label>
      <input type="text" id="name" name="name">
    </div>

    <div>
      <label for="email">E-Mail</label>
      <input type="email" id="email" name="email">
    </div>

    <div>
      <label for="comment">Dein Anliegen ist uns wichtig ❤️</label>
      <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    </div>

    <input type="file" name="file" id="file">

    <div>
      <button type="submit">Absenden!</button>
    </div>
  </form>

  <script src="main.js"></script>
</body>
</html>