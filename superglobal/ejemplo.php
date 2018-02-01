<?php
    
$a = 1;
$b= 10;

function test() {
    /*global $a;
    echo $a;*/
    
    $GLOBALS['c']=$GLOBALS['a']+$GLOBALS['b'];
}

test();
//echo $c;
echo $c . "   " . count($GLOBALS) . " ";

//for ($i=0; $i<count($GLOBALS); $i++) {
    print_r( $GLOBALS);
//}
?>