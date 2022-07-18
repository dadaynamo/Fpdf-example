<?php
function carosel(){
echo '<div id="carouselExampleDark" class="carousel  slide" data-bs-ride="carousel">';
echo '<div class="carousel-indicators">';
echo '<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>';
echo '<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>';
echo '<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>';
echo '</div>';
echo '<div class="carousel-inner">';
echo '<div class="carousel-item active" data-bs-interval="10000">';
echo '<a href="index.php?pag=pdf1" target="_blank"><img src="php_part/img/1.jpg" class="d-block w-100" alt="..."></a>';
echo '<div class="carousel-caption d-none d-md-block">';
echo '<h5>Abbonamento ridotto</h5>';
echo '<p>Adatto a tutti i bambini dai 10 ai 15 anni</p>';
echo '</div>';
echo '</div>';
echo '<div class="carousel-item" data-bs-interval="2000">';
echo '<a href="index.php?pag=pdf2" target="_blank"><img src="php_part/img/2.jpg" class="d-block w-100" alt="..."></a>';
echo '<div class="carousel-caption d-none d-md-block">';
echo '<h5>Tariffa Base</h5>';
echo '<p>Tariffa Adatta a tutti a soli 7$ </p>';
echo '</div>';
echo '</div>';
echo '<div class="carousel-item">';
echo '<a href="index.php?pag=pdf3" target="_blank"><img src="php_part/img/3.jpg" class="d-block w-100" alt="..."></a>';
echo '<div class="carousel-caption d-none d-md-block">';
echo '<h5>Tariffa Premium</h5>';
echo '<p>Per i veri Pro per una miglior visione nei posti privè</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">';
echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
echo '<span class="visually-hidden">Previous</span>';
echo '</button>';
echo '<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">';
echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
echo '<span class="visually-hidden">Next</span>';
echo '</button>';
echo '</div>';
}
?>