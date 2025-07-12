<?php
function renderTripDiscoverySection($title, $cities, $trips)
{
    ?>
    <section class="trip-section container" id="trip-section">
        <h2 class="section-title" id="trip-title"><?= htmlspecialchars($title) ?></h2>

        <div class="trip-discovery">
            <!-- City Swiper -->
            <div class="swiper city-swiper">
                <div class="swiper-wrapper" id="city-slider">
                    <?php foreach ($cities as $index => $city): ?>
                        <div class="swiper-slide">
                            <button class="city-button <?= $index === 0 ? ' active' : '' ?>">
                                <?= htmlspecialchars($city) ?>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Trip Card Swiper -->
            <div class="swiper card-swiper">
                <div class="swiper-wrapper" id="card-slider">
                    <?php foreach ($trips as $trip): ?>
                        <div class="swiper-slide">
                            <div class="card">
                                <div class="card-image">
                                    <img src="<?= htmlspecialchars($trip['image']) ?>"
                                        alt="<?= htmlspecialchars($trip['title']) ?>">
                                </div>
                                <div class="floating-rate"><?= $trip['rating'] ?> ⭐</div>
                                <div class="card-content">
                                    <div class="card-title"><?= htmlspecialchars($trip['title']) ?></div>
                                    <div class="card-location">
                                        <?php
                                        $icon = "tdesign:location-filled";
                                        $width = 24;
                                        $height = 24;
                                        $style = "color: var(--primary-color);";
                                        include 'components/shared/icon.php';
                                        ?>
                                        <?= htmlspecialchars($trip['location']) ?>
                                    </div>
                                    <div class="card-footer">
                                        <div><?= $trip['rating'] ?> ⭐</div>
                                        <div class="price">
                                            <span>EGP <?= $trip['price'] ?></span>
                                            <?php if ($trip['price'] !== $trip['oldPrice']): ?>
                                                <span class="old-price">EGP <?= $trip['oldPrice'] ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="button-wrapper">
                <button class="btn-outline btn">اكتشف المزيد</button>
            </div>
        </div>
    </section>
    <?php
}
?>



<script>
    document.addEventListener("DOMContentLoaded", function () {

        const tripSections = document.querySelectorAll(".trip-section");

        tripSections.forEach((section) => {
            const citiesBtn = section.querySelectorAll(".city-button");

            citiesBtn.forEach((btn) => {
                btn.onclick = () => {
                    citiesBtn.forEach((b) => b.classList.remove("active"));
                    btn.classList.add("active");
                };
            });

            new Swiper(section.querySelector(".city-swiper"), {
                slidesPerView: "auto",
                spaceBetween: 10,
            });

            new Swiper(section.querySelector(".card-swiper"), {
                slidesPerView: "auto",
                spaceBetween: 15,
            });
        });
    });

</script>

<style>
    .trip-section {
        padding: var(--section-padding);
        margin: auto;
        display: flex;
        flex-direction: column;
        gap: 50px
    }

    .card-swiper {
        padding: 10px 0px;
    }

    .trip-discovery {
        display: flex;
        flex-direction: column;
        gap: 36px;
        align-items: center;
        overflow-x: hidden;
    }


    .city-button {
        padding: 10px 0px;
        background-color: #f0f0f0;
        border: none;
        border-radius: 999px;
        cursor: pointer;
        white-space: nowrap;
        font-size: 14px;
        width: 140px;
        transition: all .3s ease-in-out;
    }

    .city-button.active {
        background-color: var(--primary-color-800);
        color: white;
    }

    .city-button:hover {
        background-color: var(--primary-color-800);
        color: white;
    }

    .swiper-slide {
        width: auto !important;
    }

    .city-swiper,
    .card-swiper {
        width: 100%;
        height: auto;
    }

    /* Trip Cards */
    .card {
        /* width: 270px; */
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: var(--card-shadow);
        position: relative;
        cursor: pointer;
    }

    .card-image {
        height: 210px;
        width: 100%;
        overflow: hidden;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card:hover img {
        transform: scale(1.2);
        filter: brightness(0.8);
        transition: all .3s ease-in-out;
    }

    .card-content {
        padding: 16px 16px 8px 16px;
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .card-title {
        font-weight: 700;
    }

    .card-location {
        font-size: 13px;
        color: gray;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 14px;
    }

    .price {
        background-color: var(--primary-color);
        color: white;
        padding: 6px 16px;
        border-radius: 0 var(--radius-lg) 0 var(--radius-lg);
        font-weight: bold;
        position: absolute;
        bottom: 0;
        left: 0;
    }

    .old-price {
        text-decoration: line-through;
        font-size: 12px;
        margin-left: 5px;
        font-weight: 400;
    }

    .floating-rate {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: white;
        padding: 4px 6px;
        border-radius: var(--radius-md);
        font-size: 12px;
    }

    .button-wrapper {
        text-align: center;
    }
</style>