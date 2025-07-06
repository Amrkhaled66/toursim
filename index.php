<?php
$pageTitle = "Tourism - Home"; // Set the page title
require 'layout.php' ; // layout.php must contain renderLayout() function

ob_start(); // Start capturing output
?>

<main>
  <?php require 'components/HomePage/heroSection.php'; ?>
</main>

<?php
$content = ob_get_clean(); // Get the buffered content into $content

renderLayout($content, $pageTitle); // Render with layout
?>