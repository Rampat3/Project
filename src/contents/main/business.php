<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.js"></script>

<div class="business__wrapper">
    <div class="business__wrapper-title">
        <div class="business__wrapper-title-header title__text">
            Trusted By Thoudsands <p class="title__text-bg" style="margin: 0 0 0 10px;">Business</p>
        </div>
        <div class="business__wrapper-title-text">
            <p class="title__text-p">
                More Than 15,000 companies trust and choose Itech
            </p>
        </div>
    </div>
    <div class="business__wrapper-carousel carousel wrapper">
        <div class="carousel__item item">
            <div class="carousel__swiper-container swiper-container" style="display: flex; flex-direction: column">
                <div class="carousel__swiper-wrapper swiper-wrapper">
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-2.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-3.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-4.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-2.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                    <div class="carousel__swiper-slide"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                </div>
                <div class="carousel__swiper-wrapper-bottom swiper-wrapper">
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-4.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-3.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-2.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-4.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-3.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-2.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons-1.jpg" alt=""></div>
                    <div class="carousel__swiper-slide-bottom"><img src="../src/img/sponsors/spons.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .wrapper /*carousel*/{
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-around;
        align-items: center;
        height: 100%;
        width: 100%;
        background: #d3d3d3;
    }
    .item /*carousel__item*/ {
        height: auto;
        width: 100%;
        background: #fff;

    }
    .swiper-container /*carousel__swiper-container*/ {
        width: 100%;
        height: 100%;
    }
    .swiper-slide /*carousel__swiper-slide*/{
        /*width: 100%;*/
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>


<script>
    var mySwiper = new Swiper ('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
</script>