<?php
echo "Break";
echo "<br>";
for($i=1;$i<=6;$i++){
   if($i == 2){
      break;
   }
   echo "Nilai i : ".$i."<br />";
}
?>
<?php
echo "<br>";
echo "Continue";
echo "<br>";
for($i=1;$i<=6;$i++){
   if($i == 3){
      continue;
   }
   echo "Nilai i : ".$i."<br />";
}
?>
<?php
echo "<br>";
echo "Exit";
echo "<br>";
for($i=1;$i<=6;$i++){
   if($i == 3){
      exit();
   }
   echo "Nilai i : ".$i."<br />";
}
// statement dibawah ini tidak akan dijalankan
echo "Contoh Penggunaan Exit Pada Program";
?>

