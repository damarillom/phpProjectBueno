<?php
// function concatenar($str) {
//     $str.="llamada por valor";
// }

function concatenar(&$str) {
    $str.="llamada por valor";
}

$str="hola mundo";

concatenar($str);
echo $str;
?>