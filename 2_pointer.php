<?php
// reverse an array using 2 pointers
$arr = [2, 3, 4, 6, 1, 2, 8, 9, 6, 0, 3];

function reverseArray( $arr ) {
    $start = 0;
    $end = count( $arr ) - 1;
    while ( $start < $end ) {
        $temp = $arr[$start];
        $arr[$start] = $arr[$end];
        $arr[$end] = $temp;
        $start++;
        $end--;
    }
    return $arr;
}

print_r( reverseArray( $arr ) );