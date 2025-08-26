<?php
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

$alas = 8;
$tinggi = 5;

echo "Luas Segitiga dengan alas $alas dan tinggi $tinggi = " . luasSegitiga($alas, $tinggi);
?>
