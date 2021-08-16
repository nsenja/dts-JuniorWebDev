<?php
echo "For Loop";
echo "<br>";
for($i=1;$i<=10;$i++){
  echo "Perulangan ke-".$i."<br />";
}
?>

<?php
echo "<br>";
echo "While Loop";
echo "<br>";
    $i=1;
    while($i<=10){
        echo "Perulangan ke-".$i."<br />";
        $i++;
    }
?>
<?php
echo "<br>";
echo "Do-While Loop";
echo "<br>";
    $i=1;
    do{
     echo "Perulangan ke-".$i."<br/>";
        $i++;
    } while($i<=10);
?>
<?php
echo "<br>";
echo "Foreach Loop";
echo "<br>";
$nama = array("Adi", "Budi", "Carli", "Dedy");
foreach($nama as $val){
  echo "$val";
  echo "<br />";
}
?>
