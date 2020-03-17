<?php

function bubbleSort($array)
{

    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < $i; $j++) {
            if ($array[$i] < $array[$j]) {
                $tmp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $tmp;

            }

        }

    }
    print_r($array);
}

$masiv = [7, 3, 6, 2, 8, 9, 5, 10,1,4];

bubbleSort($masiv);