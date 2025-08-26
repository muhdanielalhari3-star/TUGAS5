<?php

function volumeTabung($jari, $tinggi) {
    return pi() * pow($jari, 2) * $tinggi;
}

$jari = 7;
$tinggi = 10;

$volumeHasil = volumeTabung($jari, $tinggi);

echo "Volume Tabung dengan jari-jari $jari dan tinggi $tinggi = " . $volumeHasil;
?>
