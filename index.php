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
    <?php
        foreach ($faqs as $faq) { ?>
      <h2>
        <?php echo $faq["question"];?>
      </h2>
      <h3>
        <?php echo $faq["answer"];?>
      </h3>
    <?php } ?>
  </body>
</html>
