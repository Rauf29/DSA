<?php
// Pair Sum (Brute Force) O(n^2)

$arr = [2, 7, 11, 15];
$target = 9;

function pairSum( $arr, $target ) {
    $count = count( $arr );
    for ( $i = 0; $i < $count; $i++ ) {
        for ( $j = $i + 1; $j < $count; $j++ ) {
            if ( $arr[$i] + $arr[$j] == $target ) {
                return $ans = [$arr[$i], $arr[$j]];
            }
        }
    }
}
//print_r( pairSum( $arr, $target ) );

// Pair Sum (Optimal approach) 2 pointers it relavent of O(n)

function pairSumOptimal( $arr, $target ) {
    $i = 0;
    $j = count( $arr ) - 1;
    while ( $i < $j ) {
        $pairSum = $arr[$i] + $arr[$j];
        if ( $pairSum > $target ) {
            $j--;
        } else if ( $pairSum < $target ) {
            $i++;
        } else {
            return $ans = [$arr[$i], $arr[$j]];
        }
    }
}
//print_r( pairSumOptimal( $arr, $target ) );