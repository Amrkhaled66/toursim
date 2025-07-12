<!-- Customize Button -->
<button class="customize-btn" data-action="toggle-dashboard">
    <?php
    $icon = "material-symbols-light:settings";
    $width = 30;
    $height = 30;
    include 'components/shared/icon.php';
    ?>
</button>

<!-- Overlay -->
<div class="overlay" id="overlay" data-action="toggle-dashboard"></div>

<!-- Dashboard Sidebar -->
<div class="dashboard" id="dashboard">
    <div class="dashboard-header">
        <h2 class="dashboard-title">مخصص التصميم</h2>
        <button class="close-btn" data-action="toggle-dashboard">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="dashboard-content">

        <!-- Theme Presets -->
        <div class="control-group">
            <label class="control-label">سمات سريعة</label>
            <p class="control-description">تطبيق سمات مصممة مسبقاً كنقطة بداية</p>
            <div class="theme-presets">
                <div class="theme-preset" data-theme="modern">
                    <div class="preset-name">حديث</div>
                    <div class="preset-description">تصميم أنيق وبسيط</div>
                </div>
                <div class="theme-preset" data-theme="cozy">
                    <div class="preset-name">مريح</div>
                    <div class="preset-description">ناعم ودافئ</div>
                </div>
                <div class="theme-preset" data-theme="bold">
                    <div class="preset-name">جريء</div>
                    <div class="preset-description">قوي ولافت</div>
                </div>
            </div>
        </div>

        <!-- Primary Hue Control -->
        <div class="control-group">
            <label class="control-label">
                <span class="color-preview" id="colorPreview"></span>
                اللون الأساسي
            </label>
            <p class="control-description">ضبط درجة اللون الأساسي - يؤثر على الأزرار والعناصر البارزة وألوان السمة</p>
            <div class="slider-control">
                <input type="range" class="hueSlider" id="hueSlider" min="0" max="355" step="5" value="154">
                <div class="slider-value" id="hueValue">154°</div>
            </div>
        </div>

        <!-- Radius Options -->
        <div class="control-group">
            <label class="control-label">نظام زوايا العناصر</label>
            <p class="control-description">اختر نمط الزوايا الذي ينطبق على جميع عناصر الواجهة</p>
            <div class="style-options" id="radiusOptions">
                <div class="style-option" data-value="none">
                    <div class="option-name">بدون زوايا</div>
                    <div class="option-preview">حواف حادة • حديث وأنيق</div>
                </div>
                <div class="style-option" data-value="subtle">
                    <div class="option-name">خفيف</div>
                    <div class="option-preview">زوايا مدورة قليلاً • مظهر احترافي</div>
                </div>
                <div class="style-option active" data-value="medium">
                    <div class="option-name">متوسط</div>
                    <div class="option-preview">زوايا متوازنة • يناسب جميع الأغراض</div>
                </div>
                <div class="style-option" data-value="large">
                    <div class="option-name">كبير</div>
                    <div class="option-preview">ناعم وودي • مظهر مرحب</div>
                </div>
            </div>
        </div>

        <!-- Shadow Options -->
        <div class="control-group">
            <label class="control-label">ظلال البطاقات</label>
            <p class="control-description">تحكم في عمق وشدة الظلال</p>
            <div class="style-options" id="shadowOptions">
                <div class="style-option" data-value="none">
                    <div class="option-name">بدون ظل</div>
                    <div class="option-preview">تصميم مسطح</div>
                </div>
                <div class="style-option" data-value="0 1px 3px rgba(0, 0, 0, 0.1)">
                    <div class="option-name">خفيف</div>
                    <div class="option-preview">ظل خفيف</div>
                </div>
                <div class="style-option active" data-value="0 4px 6px rgba(0, 0, 0, 0.1)">
                    <div class="option-name">متوسط</div>
                    <div class="option-preview">عمق متوازن</div>
                </div>
                <div class="style-option" data-value="0 10px 15px rgba(0, 0, 0, 0.1)">
                    <div class="option-name">قوي</div>
                    <div class="option-preview">ظل عميق</div>
                </div>
                <div class="style-option" data-value="0 20px 25px rgba(0, 0, 0, 0.15)">
                    <div class="option-name">درامي</div>
                    <div class="option-preview">أقصى عمق</div>
                </div>
            </div>
        </div>

        <!-- Gap Slider
        <div class="control-group">
            <p class="control-label">المسافة بين البطاقات</p>
            <p class="control-description">ضبط المسافة بين البطاقات</p>
            <div class="slider-control">
                <input type="range" class="slider" id="gapSlider" min="0.5" max="3" step="0.25" value="1.5">
                <div class="slider-value" id="gapValue">1.5rem</div>
            </div>
        </div> -->

    </div>
</div>


<style>
    .slider-control {
        width: 100%;
    }

    .hueSlider {
        width: 100%;
        height: 6px;
        background: #e5e7eb;
        border-radius: var(--radius-md);
        outline: none;
        -webkit-appearance: none;
    }

    .theme-presets {
        display: grid;
        gap: var(--spacing-sm);
        margin-top: var(--spacing-md);
    }

    .theme-preset {
        padding: var(--spacing-md);
        border: 2px solid #e5e7eb;
        border-radius: var(--radius-md);
        cursor: pointer;
        transition: all var(--transition-fast);
        text-align: center;
        background: var(--bg-primary);
    }

    .theme-preset:hover {
        border-color: var(--primary-color);
        transform: translateY(-2px);
        background: var(--light-bg);
    }

    .preset-name {
        font-weight: var(--font-weight-bold);
        margin-bottom: var(--spacing-xs);
    }

    .preset-description {
        font-size: var(--font-size-xs);
        color: var(--text-secondary);
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.65);
        opacity: 0;
        visibility: hidden;
        transition: all var(--transition-normal);
        z-index: 1500;
    }

    .overlay.active {
        opacity: 1;
        visibility: visible;
    }

    .customize-btn {
        background-color: var(--primary-color);
        position: fixed;
        bottom: 30px;
        left: 30px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        color: #fff;
        cursor: pointer;
        z-index: 1000;
    }

    .dashboard {
        position: fixed;
        top: 0;
        right: -400px;
        width: 400px;
        height: 100vh;
        background: var(--bg-secondary);
        box-shadow: -4px 0 20px rgba(0, 0, 0, 0.1);
        transition: right var(--transition-normal);
        z-index: 2000;
        overflow-y: auto;
    }

    .dashboard.open {
        right: 0;
    }

    .dashboard-header {
        padding: var(--spacing-lg);
        border-bottom: 1px solid #e5e7eb;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: var(--light-bg);
    }

    .dashboard-title {
        font-size: var(--font-size-xl);
        font-weight: var(--font-weight-bold);
        color: var(--text-primary);
    }

    .close-btn {
        background: none;
        border: none;
        font-size: var(--font-size-xl);
        cursor: pointer;
        color: var(--text-secondary);
        padding: var(--spacing-xs);
        border-radius: var(--radius-md);
        transition: all var(--transition-fast);
    }

    .close-btn:hover {
        background: #f3f4f6;
        color: var(--text-primary);
    }

    .dashboard-content {
        padding: var(--spacing-lg);
    }

    .control-group {
        margin-bottom: var(--spacing-lg);
    }

    .control-label {
        font-weight: var(--font-weight-bold);
        margin-bottom: var(--spacing-sm);
        color: var(--text-primary);
        display: block;
    }

    .control-description {
        font-size: var(--font-size-sm);
        color: var(--text-secondary);
        margin-bottom: var(--spacing-md);
    }

    .style-options {
        display: grid;
        gap: var(--spacing-xs);
    }

    .style-option {
        padding: var(--spacing-sm);
        border: 2px solid #e5e7eb;
        border-radius: var(--radius-md);
        cursor: pointer;
        transition: all var(--transition-fast);
        background: var(--bg-primary);
    }

    .style-option:hover {
        border-color: var(--primary-color);
        background: var(--light-bg);
    }

    .style-option.active {
        border-color: var(--primary-color);
        background: var(--light-bg);
        color: var(--primary-color);
    }

    .option-name {
        font-weight: var(--font-weight-bold);
        margin-bottom: 2px;
    }

    .option-preview {
        font-size: var(--font-size-xs);
        color: var(--text-secondary);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .dashboard {
            width: 100%;
            right: -100%;
        }

        .main-container {
            padding: var(--spacing-md);
        }

        .products-grid {
            grid-template-columns: 1fr;
        }
    }
</style>