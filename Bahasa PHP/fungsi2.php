<?php
echo "Fungsi Hello";
echo "<br>";
function sayHello(){
   echo "Hello..<br />";
}
sayHello();
sayHello();
sayHello();
?>
<?php
echo "<br>";
echo "Fungsi Return ";
function perkalian($bil_1, $bil_2){
   $hasil = $bil_1 * $bil_2;
   return $hasil;
}
echo "5 x 10 = ".perkalian(5, 10);
?>

<?php
echo "<br>";
echo"Passing Variable by value ";

function tambahSatu($value){
    $value = $value +1;
}
$a=5;
tambahSatu($a);
echo $a;
?>


