<?php

$arr = [1,2,3,4,5];
//$arr = [256741038, 623958417, 467905213, 714532089, 938071625];
//$arr = [396285104, 573261094, 759641832, 819230764, 364801279];

function miniMaxSum($arr) {
    $max = max($arr);
    $min = min($arr);
    $evenElements = [];
    $oddElements = [];
    $sum = 0;
    foreach ($arr as $item) {
        if ($item % 2 == 0) $evenElements[] = $item;
        else $oddElements[] = $item;
        $sum += $item;
    }

    echo $sum - $max . ' ' . $sum - $min;
//    echo '<pre>'; print_r($evenElements); echo '</pre>';
//    echo '<pre>'; print_r($oddElements); echo '</pre>';
}

miniMaxSum($arr);