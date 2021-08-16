<?php
echo"Passing Variable by References";
echo "<br>";
function tambahSatu($value){
    $value = $value +1;
}
$a=5;
tambahSatu($a);
echo $a;
?>