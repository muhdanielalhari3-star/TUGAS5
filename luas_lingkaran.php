<?php
// luas_lingkaran.php
function luasLingkaran($jari) {
    return 3.14 * $jari * $jari;
}

$jari = 7;
echo "Luas Lingkaran dengan jari-jari $jari = " . luasLingkaran($jari);
?>
