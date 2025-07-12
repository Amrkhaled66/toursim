<?php
function renderLayout($content, $title = "Shopbag")
{
  ?>
  <!DOCTYPE html>
  <html lang="ar">

  <head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- libs -->
    <script defer src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js" defer></script>
    <script src="assets/js/styleDashboard.js" defer></script>


  </head>

  <body>

    <?php require 'components/shared/styleDashboard.php'; ?>
    <?php require 'partials/header.php'; ?>

    <main>
      <?= $content ?>
    </main>

    <?php require 'partials/footer.php'; ?>

  </body>

  </html>
  <?php
}
