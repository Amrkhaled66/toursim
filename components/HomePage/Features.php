<section class="features-section container">
    <div class="features-header">
        <p class="features-title">لماذا تختارنا</p>
        <p class="features-subtitle">فرصة رائعة للسفر و المغامرة</p>
    </div>
    <div class="features-content">
        <div class="features-list"></div>
        <div class="features-reviews">
            <div class="feature-review-card">
                <div class="review-card--avatar">
                    <img src="assets/images/avatar.png" alt="">
                </div>
                <div class="review-card--content">
                    <p>ايمن الحضري</p>
                    <p class="text-sm">⭐ 4.5</p>
                </div>
            </div>
            <div class="feature-review-card">
                <div class="review-card--avatar">
                    <img src="assets/images/avatar.png" alt="">
                </div>
                <div class="review-card--content">
                    <p>ايمن الحضري</p>
                    <p class="text-sm">⭐ 4.5</p>
                </div>
            </div>
            <div class="feature-review-card">
                <div class="review-card--avatar">
                    <img src="assets/images/avatar.png" alt="">
                </div>
                <div class="review-card--content">
                    <p>ايمن الحضري</p>
                    <p class="text-sm">⭐ 4.5</p>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .features-section {
        padding: var(--section-padding);
        background-color: hsla(var(--primary-hue), 100%, 96%, 0.4);
        display: flex;
        flex-direction: column;
        gap: 50px
    }

    .features-header {
        text-align: center;
    }

    .features-title {
        color: var(--primary-color);
        font-size: 1.3rem;
        font-weight: 700;
    }

    .features-subtitle {
        color: black;
        font-size: 2rem;
        font-weight: 700;
    }

    .features-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .features-list {}

    .features-reviews {
        width: 400px;
        height: 500px;
        background: url(assets/images/features_img.png) 50% / cover no-repeat;
        border-radius: 24px;
        position: relative;
    }

    .feature-review-card {
        display: flex;
        gap: 8px;
        background-color: white;
        padding: 6px;
        border-radius: var(--radius-xl);
        height: fit-content;
        width: fit-content;
        position: absolute;
        align-items: center;

    }

    .feature-review-card:nth-child(1) {
        top: 35px;
        right: -50px;
    }

    .feature-review-card:nth-child(2) {
        top: 50%;
        transform: translateY(-50%);
        left: 0px;
    }

    .feature-review-card:nth-child(3) {
        bottom: 35px;
        right: -50px;
    }

    .review-card--content {
        display: flex;
        flex-direction: column;
        gap: 4px;

    }

    .review-card--avatar {
        width: 45px;
        height: 45px;
        border-radius: 50%;
    }

    .review-card--avatar img {
        width: 100%;
        height: 100%;
        border-radius: 50%;
    }
</style>