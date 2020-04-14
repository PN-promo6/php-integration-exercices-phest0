<?php
$dirname = "img/";
$images = glob($dirname . "*.jpg");

for ($i = 0; $i < count($images); $i++) {

    if ($i == 0) {
        echo '<div class="carousel-item active">
        <img class="d-block w-100" src="' . $images[$i] . '">
      </div>';
    } else {
        echo '<div class="carousel-item">
        <img class="d-block w-100" src=" ' . $images[$i] . '" alt="Second slide">
      </div>';
    }
}
