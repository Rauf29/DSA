<?php
//O(1)
// Sum of Numbers from 1 to n
//$n = 10;
//echo $ans = $n * ( $n + 1 ) / 2;
//----------------------------------------------------

// O(n)
// N Factorial

// $n = 5;
// $factorial = 1;
// for ( $i = 1; $i <= $n; $i++ ) {
//     $factorial *= $i;
// }
// echo $factorial;

// Nth Fibonacci Number

$n = 10;
$fibonacci = [0, 1];
for ( $i = 2; $i <= $n; $i++ ) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2] . " ";
}
//print_r( $fibonacci );

// Maximum Subarray Sum

function maxSubArraySum( $nums ) {
    $currentSum = 0;
    $ans = PHP_INT_MIN;
    for ( $i = 0; $i < count( $nums ); $i++ ) {
        $currentSum += $nums[$i];
        $ans = max( $ans, $currentSum );
        $currentSum = $currentSum < 0 ? 0 : $currentSum;
    }
    return $ans;
}
//echo maxSubArraySum( $nums );

//----------------------------------------------------

// O(n^2) & O(n^3)

// Bubble Sort
$arr = [6, 7, 3, 4, 5, 2, 9, 10, 15, 3, 1, 4, 18];
function bubbleSort( $arr ) {
    for ( $i = 0; $i < count( $arr ) - 1; $i++ ) {
        for ( $j = 0; $j < count( $arr ) - $i - 1; $j++ ) {
            if ( $arr[$j] > $arr[$j + 1] ) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }

        }
    }
    return $arr;
}

//print_r( bubbleSort( $arr ) );

// Selection Sort
function selectionSort( $arr ) {
    for ( $i = 0; $i < count( $arr ) - 1; $i++ ) {
        $min = $i;
        for ( $j = $i + 1; $j < count( $arr ); $j++ ) {
            if ( $arr[$j] < $arr[$min] ) {
                $min = $j;
            }
        }
        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }
    return $arr;
}

print_r( selectionSort( $arr ) );

// Insertion Sort
function insertionSort( $arr ) {
    for ( $i = 1; $i < count( $arr ); $i++ ) {
        $key = $arr[$i];
        $j = $i - 1;
        while ( $j >= 0 && $arr[$j] > $key ) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

//print_r( insertionSort( $arr ) );
//----------------------------------------------------
// O(log n)

// Binary Search
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$target = 6;
function binarySearch( $arr, $target ) {
    $start = 0;
    $end = count( $arr ) - 1;
    while ( $start <= $end ) {
        $mid = floor( ( $start + $end ) / 2 );
        if ( $arr[$mid] == $target ) {
            return $mid;
        }
        if ( $arr[$mid] > $target ) {
            $end = $mid - 1;
        } else {
            $start = $mid + 1;
        }

    }
}
//echo binarySearch( $arr, $target );