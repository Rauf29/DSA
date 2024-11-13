<?php
$arr = [-2, 1, -3, 4, -1, 2, 1, -5, 4];
$count = count( $arr );

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

// Kadane's Algorithm

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