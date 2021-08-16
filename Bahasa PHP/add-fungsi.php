<?php

$arr = array("TA"=>"Thematic Academy",
            "FGA"=>"Fresh Graduate Academy",
            "VSGA"=>"Vocational School Graduate Academy");

//fungsi
function getInformation($arr=array()){
    echo "Informasi data : ";
    extract ($arr);

    echo $TA . " : ". $FGA." : " .$VSGA;
    echo "<br/>";
}
//tampil fungsi
getInformation($arr);
?>