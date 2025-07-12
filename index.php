<?php
$pageTitle = "Tourism - Home"; // Set the page title
require 'layout.php'; // layout.php must contain renderLayout() function

ob_start(); // Start capturing output
?>

<?php require 'components/HomePage/HeroSection.php'; ?>

<?php
$tripSectionTitle = "ابحث عن الرحلات التي تحركك";
$tripCities = ['القاهرة', 'اسطنبول', 'جدة', 'الرياض', 'باريس', 'دبي'];
$tripList = [
  [
    'title' => 'جولة سياحية في شرم الشيخ',
    'location' => 'القاهرة، مصر',
    'price' => 2200,
    'oldPrice' => 2500,
    'rating' => 4.5,
    'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
  ],
];

require_once 'components/HomePage/TripDiscovery.php';
renderTripDiscoverySection($tripSectionTitle, $tripCities, $tripList);
?>
<?php require 'components/HomePage/BestTripsPromo.php'; ?>

<?php
$tripSectionTitle = "افضل الجولات";
$tripCities = ["ليون", "ليفربول", "ليون", "ليفربول", "ليون", "ليفربول", "ليون", "ليفربول", "ليون", "ليفربول", "ليون", "ليفربول", "ليون", "ليفربول"];
$tripList = [
  [
    'title' => 'جولة سياحية في شرم الشيخ',
    'location' => 'القاهرة، مصر',
    'price' => 2200,
    'oldPrice' => 2500,
    'rating' => 4.5,
    'image' => 'https://images.unsplash.com/photo-1582719478250-c89cae4dc85b',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1520942702018-0862200e6873?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1520942702018-0862200e6873?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  ],
  [
    'title' => 'رحلة إلى الأقصر',
    'location' => 'الأقصر، مصر',
    'price' => 1500,
    'oldPrice' => 1500,
    'rating' => 4.7,
    'image' => 'https://images.unsplash.com/photo-1520942702018-0862200e6873?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
  ],
];
renderTripDiscoverySection($tripSectionTitle, $tripCities, $tripList);
?>

<?php require 'components/HomePage/Features.php'; ?>

<?php
$content = ob_get_clean();

renderLayout($content, $pageTitle);
?>