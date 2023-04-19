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
<!--    <div class="business__wrapper-carousel carousel">-->
<!--        <div class="carousel__item">-->
<!--          <div class="carousel__swiper-container">-->
<!--              <div class="carousel__swiper-wrapper">-->
<!--                  <div class="carousel__swiper-slide">Slide 1</div>-->
<!--                  <div class="carousel__swiper-slide">Slide 2</div>-->
<!--                  <div class="carousel__swiper-slide">Slide 3</div>-->
<!--              </div>-->
<!--              <div class="carousel__swiper-wrapper">-->
<!--                  <div class="carousel__swiper-slide">Slide 4</div>-->
<!--                  <div class="carousel__swiper-slide">Slide 5</div>-->
<!--                  <div class="carousel__swiper-slide">Slide 6</div>-->
<!--              </div>-->
<!---->
<!--              <div class="carousel__swiper-button-prev"></div>-->
<!--              <div class="carousel__swiper-button-next"></div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
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
        height: 250px;
        width: 100%;
        background: #fff;

    }
    .swiper-container /*carousel__swiper-container*/ {
        width: 100%;
        height: 100%;
    }
    .swiper-slide /*carousel__swiper-slide*/{
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>

<div class="wrapper">
    <div class="item">
        <div class="swiper-container" style="display: flex; flex-direction: column">
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <div class="swiper-wrapper">
                <div class="swiper-slide">Slide 1</div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
</script>