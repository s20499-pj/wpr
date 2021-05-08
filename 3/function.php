<?php
function add($a, $b){
    echo "hello";
    echo $a + $b;
}

function diff($a, $b){
    echo $a - $b;
}

function multi($a, $b){
    echo $a * $b;
}

function divi($a, $b){
    if ($b != 0) {
        echo $a / $b;
    }
    else {
        echo "Nie dziel przez 0 !";
    }
}
?>
