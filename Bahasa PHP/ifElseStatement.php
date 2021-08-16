<?php
echo "Contoh If-Else Statement :";
echo "<br>";
	$nilai = 80;
	if($nilai >= 60){
   	echo "Selamat anda lulus!";
	} else {
   	echo "Coba lagi semester depan.";

	}
?>

<?php
echo "<br>";
echo "Contoh If Else If Statement :";
echo "<br>";
$nilai = 80;
if(($nilai >= 85) && ($nilai <= 100)){
   $index = "A";
} elseif($nilai >= 70) {
   $index = "B";
} elseif($nilai >= 50) {
   $index = "C";
} elseif($nilai >= 30){
   $index = "D";
} else {
   $index = "E";
}
echo "Nilai anda adalah : ".$nilai;
echo "<br />";
echo "Dengan index      : ".$index;
?>
