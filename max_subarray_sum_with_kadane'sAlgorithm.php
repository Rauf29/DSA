<?php
$arr = [1, 2, 3, 4, 5];
//$arr = [-2, 1, -3, 4, -1, 2, 1, -5, 4];

// way to print all subarray
// for ( $start = 0; $start < $count; $start++ ) { // start point;
//     for ( $end = $start; $end < $count; $end++ ) { // end point
//         for ( $i = $start; $i <= $end; $i++ ) {
//             echo $arr[$i];
//         }
//         echo " ";
//     }
//     echo "\n";
// }

//Brute Force O(n^2)

function BruteForcemaxSubarraySum( $arr ) {
    $maxSum = PHP_INT_MIN;
    for ( $start = 0; $start < count( $arr ); $start++ ) {
        $currentSum = 0;
        for ( $end = $start; $end < count( $arr ); $end++ ) {
            $currentSum += $arr[$end];
            $maxSum = max( $maxSum, $currentSum );
        }
    }
    return $maxSum;
}
echo BruteForcemaxSubarraySum( $arr ) . "\n";

// Kadane's Algorithm  O(n)

// function maxSubarraySum( $arr ) {
//     $currentSum = 0;
//     $maxSum = PHP_INT_MIN;

//     for ( $i = 0; $i < count( $arr ); $i++ ) {
//         $currentSum += $arr[$i];
//         $maxSum = max( $maxSum, $currentSum );
//         if ( $currentSum < 0 ) {
//             $currentSum = 0;
//         }
//     }
//     return $maxSum;
// }
// echo maxSubarraySum( $arr );

function maxSubarraySum( $arr ) {
    $currentSum = 0;
    $maxSum = PHP_INT_MIN;

    foreach ( $arr as $i ) {
        $currentSum += $i;
        $maxSum = max( $maxSum, $currentSum );
        if ( $currentSum < 0 ) {
            $currentSum = 0;
        }
    }
    return $maxSum;
}
echo maxSubarraySum( $arr );