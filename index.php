<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq
Ci sono diverse domande con relative risposte.
Gestire il "Database" e la visualizzazione di
queste domande e risposte con PHP. -->

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>JP G-FAQ</title>

    <?php
      include "data.php";
      include "helper.php";
    ?>

  </head>
  <body>

    <!-- <h2>Question</h2>
    <h5>Answer</h5> -->

<?php

  foreach ($faqs as $faq) {
        echo $faq["question"];
        echo "<br>";
        echo "<br>";
        echo $faq["answer"];
        echo "<br>";
        echo "<br>";
        echo "-----------------";
        echo "<br>";
        echo "<br>";
      }
?>

  </body>
</html>
