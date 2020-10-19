<link rel="stylesheet" href="style.css" />

<?php 
//draw a square in html with a random (1 of 10) css class
function drawSquare() {
    $number = rand(1, 10);
    echo '<div class="square' . $number . '"></div>';
}

for ($i = 0; $i < 10; $i++) {
    drawSquare();
}
?>