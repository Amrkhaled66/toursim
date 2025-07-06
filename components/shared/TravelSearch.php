<div class="search-box">

  <!-- الوجهة -->
  <div class="field">
    <?php
    $icon = "tdesign:map-location";
    $width = 24;
    $height = 24;
    $style = "color: var(--primary-color);'";
    include 'components/shared/icon.php';
    ?>
    <div class="field-content">
      <label for="destination">الوجهة</label>
      <div class="custom-dropdown">
        <button id="destinationToggleBtn" class="dropdown-toggle">
          <span class="label">مصر</span>
          <p class="dropdown-toggle-btn">
            <?php
            $icon = "iconamoon:arrow-down-2-duotone";
            $width = 24;
            $height = 24;
            $style = "color:black'";
            include 'components/shared/icon.php';
            ?>
          </p>
        </button>

        <div id="destinationDropdown" class="dropdown-menu hidden">
          <button type="button" data-value="مصر">مصر</button>
          <button type="button" data-value="السعودية">السعودية</button>
          <button type="button" data-value="الإمارات">الإمارات</button>
        </div>
      </div>
    </div>
  </div>

  <!-- توقيت الذهاب -->
  <div class="field">
    <?php
    $icon = "solar:calendar-outline";
    $width = 24;
    $height = 24;
    $style = "color: var(--primary-color);'";
    include 'components/shared/icon.php';
    ?>
    <div class="field-content">
      <label for="departureDate">توقيت الذهاب</label>
      <input type="date" id="departureDate" value="2025-05-11">
    </div>
  </div>

  <!-- توقيت العودة -->
  <div class="field">
    <?php
    $icon = "solar:calendar-outline";
    $width = 24;
    $height = 24;
    $style = "color: var(--primary-color);'";
    include 'components/shared/icon.php';
    ?>
    <div class="field-content">
      <label for="returnDate">توقيت العودة</label>
      <?php $minReturnDate = date('Y-m-d', strtotime('+1 day')); ?>
      <input type="date" id="returnDate" min="<?= $minReturnDate ?>" value="2025-05-22">
    </div>
  </div>

  <!-- عدد المسافرين -->
  <div class="field">
    <?php
    $icon = "mdi:users";
    $width = 24;
    $height = 24;
    $style = "color: var(--primary-color);'";
    include 'components/shared/icon.php';
    ?>
    <div class="field-content">
      <label for="travelers">المسافرين</label>
      <div class="custom-dropdown">
        <button id="travelersToggleBtn" class="dropdown-toggle">
          <span class="label">1 شخص</span>
          <p class="dropdown-toggle-btn">
            <?php
            $icon = "iconamoon:arrow-down-2-duotone";
            $width = 24;
            $height = 24;
            $style = "color:black'";
            include 'components/shared/icon.php';
            ?>
          </p>
        </button>

        <div id="travelersDropdown" class="dropdown-menu hidden">
          <button type="button" data-value="1 شخص">1 شخص</button>
          <button type="button" data-value="2 أشخاص">2 أشخاص</button>
          <button type="button" data-value="3 أشخاص">3 أشخاص</button>
          <button type="button" data-value="4 أشخاص">4 أشخاص</button>
          <button type="button" data-value="5 أشخاص">5 أشخاص</button>
        </div>
      </div>
    </div>
  </div>

  <!-- زر البحث -->
  <button class="btn search-btn flex gap-4 btn-primary">
    <?php
    $icon = "iconamoon:search-light";
    $width = 20;
    $height = 20;
    $style = "color: white;'";
    include 'components/shared/icon.php';
    ?>
    ابحث
  </button>
</div>
