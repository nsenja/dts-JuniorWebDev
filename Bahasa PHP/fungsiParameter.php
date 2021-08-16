
<?php
function perkenalan($nama, $salam)
{
    echo $salam . ",";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}
//panggil fungsi diatas
perkenalan("Komang", "Hi");

echo "<hr>";

$saya = "Medi";
$ucapanSalam = "Selamat Pagi";
perkenalan($saya, $ucapanSalam);
?>
