<?php
// volume_kubus.php
function volumeKubus($sisi) {
    return $sisi * $sisi * $sisi;
}

$sisi = 4;
echo "Volume Kubus dengan sisi $sisi = " . volumeKubus($sisi);
?>