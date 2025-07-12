<section class="best-trips-promo container">
    <div class="promo-container">
        <!-- Title and Arrows -->
        <div class="promo-header">
            <p class="promo-title">
                افضل الوجهات
                <br>
                استكشف الوجهات الرائجة
            </p>
            <div class="promo-nav-buttons">
                <button class="swiper-btn-prev">
                    <?php
                    $icon = "formkit:arrowright";
                    $width = 24;
                    $height = 24;
                    $style = "color:black";
                    include 'components/shared/icon.php';
                    ?>
                </button>
                <button class="swiper-btn-next">
                    <?php
                    $icon = "formkit:arrowleft";
                    $width = 24;
                    $height = 24;
                    $style = "color:black";
                    include 'components/shared/icon.php';
                    ?>
                </button>
            </div>
        </div>

        <p class="promo-subTitle">
            قم باختيار وجهة سفر شهيرة أدناه لاكتشاف رحلات حصرية مدعومة بضمان السعر المنخفض لدينا
        </p>
    </div>

    <!-- Swiper Container -->
    <div class="promo-cards swiper-container">
        <div class="swiper-wrapper">
            <div style="background: url('assets/images/bestTripsPromo/1.jpg') center/cover no-repeat;"
                class="promo-card swiper-slide">
                <div class="promo-card-tripsCount">
                    <p>3 جولات</p>
                </div>
                <p>مصر</p>
            </div>
            <div style="background: url('assets/images/bestTripsPromo/2.jpg') center/cover no-repeat;"
                class="promo-card swiper-slide">
                <div class="promo-card-tripsCount">
                    <p>5 جولات</p>
                </div>
                <p>فرنسا</p>
            </div>
            <div style="background: url('assets/images/bestTripsPromo/3.jpg') center/cover no-repeat;"
                class="promo-card swiper-slide">
                <div class="promo-card-tripsCount">
                    <p>5 جولات</p>
                </div>
                <p>اليابان</p>
            </div>
            <div style="background: url('assets/images/bestTripsPromo/3.jpg') center/cover no-repeat;"
                class="promo-card swiper-slide">
                <div class="promo-card-tripsCount">
                    <p>5 جولات</p>
                </div>
                <p>اليابان</p>
            </div>
            <div style="background: url('assets/images/bestTripsPromo/3.jpg') center/cover no-repeat;"
                class="promo-card swiper-slide">
                <div class="promo-card-tripsCount">
                    <p>5 جولات</p>
                </div>
                <p>اليابان</p>
            </div>
        </div>
    </div>
</section>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 16,
            navigation: {
                nextEl: '.swiper-btn-next',
                prevEl: '.swiper-btn-prev',
            },
            breakpoints: {
                640: {
                    spaceBetween: 20,
                },
                1024: {
                    spaceBetween: 24,
                }
            }
        });
    });
</script>


<style>
    .best-trips-promo {
        padding: var(--section-padding);
        position: relative;
        margin-bottom: 70px;
    }

    .promo-container {
        padding: 48px;
        align-items: flex-start;
        gap: 24px;
        height: 540px;
        border-radius: 44px;
        background: linear-gradient(0deg, rgba(0, 0, 0, 0.15) 0%, rgba(0, 0, 0, 0.15) 100%), url("assets/images/bestTripsPromo/bg.png") lightgray 50% / cover no-repeat;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .promo-title {
        color: var(--white);
        font-size: 2.2rem;
        font-weight: 700;
    }

    .promo-subTitle {
        color: var(--white);
        font-size: 1.3rem;
    }

    .promo-cards {
        position: absolute;
        bottom: 0;
        display: flex;
        justify-content: center;
        items-align: center;
        width: 100%;
        padding: 0px 20px;
        transform: translateY(50px) !important;
        overflow-x: hidden !important;

    }


    .promo-card {
        min-width: 340px;
        height: 340px;
        padding: 16px;
        display: flex;
        flex-direction: column;
        justify-content: end;
        gap: 16px;
        border-radius: var(--radius-2xl);
        overflow: hidden;
        background-size: cover;
        cursor: pointer;
        transition: var(--transition)
    }

    .promo-card:hover {
        box-shadow: var(--card-shadow);
    }

    .promo-card-tripsCount {
        background-color: var(--primary-color);
        width: fit-content;
        padding: 4px 12px;
        border-radius: var(--radius-lg);
    }

    .promo-card p {
        color: var(--white);
        font-size: 1.2rem;
        font-weight: 700;
    }

    .swiper-wrapper {
        margin: auto !important
    }

    .promo-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        width: 100%;
    }

    .promo-nav-buttons {
        display: flex;
        gap: 12px;
        position: relative !important;
    }

    .swiper-btn-prev,
    .swiper-btn-next {
        color: black;
        background-color: var(--white);
        border: 2px solid var(--stroke-color);
        border-radius: 50% !important;
        width: 50px;
        height: 50px;
        cursor: pointer;
        transition: var(--transition);
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-btn-prev:hover,
    .swiper-btn-next:hover {
        background-color: rgba(255, 255, 255, 0.52);
    }

    .swiper-btn-prev:disabled,
    .swiper-btn-next:disabled {
        cursor: not-allowed
    }

    .swiper-container {
        width: 100%;
        overflow: hidden;
    }

    .swiper-wrapper {
        display: flex;
    }

    @media (max-width: 1024px) {
        .promo-container {
            padding: 24px;
        }

        .promo-title {
            font-size: 1.6rem;
        }

        .promo-subTitle {
            font-size: 1rem;
        }

        .promo-nav-buttons {
            display: none !important;
        }
    }
</style>