<?php
require("../header.php");
?>

<span class="table-headlines margin-left">Фото (НАДО ПЕРЕДЕЛАТЬ!)</span>

<br>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <data-fa
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="galleryimages/text_balticka.png" class="d-block w-100" alt="Текстильщик 1-0 Балтика">
            <div class="carousel-caption d-none d-md-block">
                <h1>Текстильщик 1-0 Балтика</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="galleryimages/shinnik_text2.png" class="d-block w-100" alt="Шинник 0-3 Текстильщик">
            <div class="carousel-caption d-none d-md-block">
                <h1>Шинник 0-3 Текстильщик</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img src="galleryimages/chayka_text.png" class="d-block w-100" alt="Чайка 1-3 Текстильщик">
            <div class="carousel-caption d-none d-md-block">
                <h1>Чайка 1-3 Текстильщик</h1>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<?php
require ("../footer.php");
?>