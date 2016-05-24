<?php

function toBinary($n) {
    $s = "";
    for ($i=0; 2 ** $i < $n; $i++) {
        $s .= ((2 ** $i & $n) == 0) ? "0" : "1";
    }
    return strrev($s);
}

printf("%s\n", toBinary(170));
