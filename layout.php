<?php
function renderLayout($content, $title = "Shopbag")
{
  ?>
  <!DOCTYPE html>
  <html lang="ar">

  <head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer ></script>

    <!-- libs -->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
  </head>

  <body>

    <?php require 'partials/header.php' ; ?>

    <main>
      <?= $content ?>
    </main>

    <?php require 'partials/footer.php' ; ?>

  </body>

  </html>
  <?php
}
