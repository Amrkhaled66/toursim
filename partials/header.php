<!-- components/Navbar.php -->
<header class="header container">
  <div class="flex-center gap-3">
    <button id="nav-toggle-btn" class=" show-small-screen mobile-nav-toggle">
      <?php
      $icon = "gg:menu";
      $width = 24;
      $height = 24;
      include 'components/shared/icon.php';
      ?>
    </button>
    <a href="index.php" class="logo-container">
      <img src="assets/images/logo.svg" alt="Tourism Logo" class="logo-image">
      <span class="logo-text">وجهتي</span>
    </a>
  </div>
  <nav class="navbar">
    <div class="nav-header flex items-center w-full justify-between">
      <a href="index.php" class="logo-container">
        <img src="assets/images/logo.svg" alt="Tourism Logo" class="logo-image">
        <span class="logo-text">وجهتي</span>
      </a>
      <button id="nav-close" class="btn-close">
        <?php
        $icon = "gg:close";
        $width = 15;
        $height = 15;
        include 'components/shared/icon.php';
        ?>
      </button>
    </div>
    <ul class="nav-links gap-6">
      <li class="dropdown">
        <div class="dropbtn">
          <a href="#">جولات سياحية</a>
          <?php
          $icon = "entypo:chevron-small-down";
          $width = 24;
          $height = 24;
          include 'components/shared/icon.php';
          ?>
        </div>
        <div class="dropdown-content">
          <a href="#">جولة 1</a>
          <a href="#">جولة 2</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropbtn">
          <a href="#">الوجهات</a>
          <?php
          $icon = "entypo:chevron-small-down";
          $width = 24;
          $height = 24;
          include 'components/shared/icon.php';
          ?>
        </div>

        <div class="dropdown-content">
          <a href="#">الوجهة 1</a>
          <a href="#">الوجهة 2</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropbtn">
          <a href="#">المدونة</a>
          <?php
          $icon = "entypo:chevron-small-down";
          $width = 24;
          $height = 24;
          include 'components/shared/icon.php';
          ?>
        </div>
        <div class="dropdown-content">
          <a href="#">مقالات</a>
          <a href="#">أخبار</a>
        </div>
      </li>

      <li class="dropdown">
        <div class="dropbtn">
          <a href="contact.php">تواصل معنا</a>
        </div>
      </li>

      <li class="dropdown">
        <a href="#">معلومات عنا</a>
      </li>
    </ul>
  </nav>
  <div class="header-actions">

    <div class="search-container">

      <button class="main-color-onHover">

        <?php
        $icon = "iconamoon:search-light";
        $width = 24;
        $height = 24;
        include 'components/shared/icon.php';
        ?>
      </button>
      <button class="main-color-onHover">
        <?php
        $icon = "stash:heart-light";
        $width = 24;
        $height = 24;
        include 'components/shared/icon.php';
        ?>
      </button>
    </div>
    <button class="login-btn btn flex gap-4 btn-primary">
      <?php
      $icon = "solar:user-linear";
      $width = 24;
      $height = 24;
      include 'components/shared/icon.php';
      ?>
      تسجيل الدخول</button>

    <button class="main-color-onHover show-small-screen">
      <?php
      $icon = "solar:user-linear";
      $width = 24;
      $height = 24;
      include 'components/shared/icon.php';
      ?>
    </button>
  </div>
</header>