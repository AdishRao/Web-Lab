<?php
    $states = "Mississippi Alabama Texas Massachusetts Kansas";
    $stateList = Array();

    //part a
    preg_match('/\w*xas/', $states, $matches);
    $stateList[0] = $matches[0];

    //part b
    preg_match('/k\w*s/i', $states, $matches);
    $stateList[1] = $matches[0];

    //part c
    preg_match('/\bM\w*s\b/', $states, $matches);
    $stateList[2] = $matches[0];

    //part d
    preg_match('/\w*a/', $states, $matches);
    $stateList[3] = $matches[0];

    print_r($stateList);
?>