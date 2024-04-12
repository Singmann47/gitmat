<?php

function pocet_obrazkov($dir) {
    $pocet = 0;
    $images = glob($dir . "/*");
    foreach ($images as $value) {
        $pocet++;
    }
    return $pocet;
}
?>
