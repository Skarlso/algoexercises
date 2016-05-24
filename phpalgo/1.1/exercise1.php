<?php

function DisplayElapsedTime($startTime) {
    $time_end = microtime(true);
    $execution_time = $time_end - $startTime;

    printf("Total Execution Time: %f\n", $execution_time);
}

function toBinary($n) {
    $s = "";
    for ($i=0; 2 ** $i < $n; $i++) {
        $s .= ((2 ** $i & $n) == 0) ? "0" : "1";
    }
    return strrev($s);
}


$time_start = microtime(true);
printf("%s\n", toBinary(170));
DisplayElapsedTime($time_start);

$time_start = microtime(true);
printf("%s\n", decbin(170));
DisplayElapsedTime($time_start);
