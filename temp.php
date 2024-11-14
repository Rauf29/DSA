<?php

// $sec = 130;
// $remainSec = $sec % 3600;
// $secForHour = $sec - $remainSec;
// $hour = $secForHour / 3600;
// echo $hour . "\n";
// $min = floor( $remainSec / 60 );
// echo $min . "\n";

// printf( "%d:%d", $hour, $min );
/* -------------------------------------------------- */
// $str1 = "John";
// $str2 = "Doe";

// printf( "%s, %s", $str2, $str1 );

// $nums1 = [1, 2, 3, 0, 0, 0];
// $m = 3;
// $nums2 = [2, 5, 6];
// $n = 3;

// $arr1 = array_slice( $nums1, 0, $m );
// $arr2 = array_slice( $nums2, 0, $n );
// $nums1 = array_merge( $arr1, $arr2 );
// sort( $nums1 );
// print_r( $nums1 );
/* -------------------------------------------------- */
// $nums = [2, 2, 1, 1, 1, 2, 2]
// ;

// function majorityElement( $nums ) {
//     $map = [];
//     for ( $i = 0; $i < count( $nums ); $i++ ) {
//         if ( !isset( $map[$nums[$i]] ) ) {
//             $map[$nums[$i]] = 0;

//         }
//         $map[$nums[$i]]++;
//     }
//     $maxValue = max( $map );
//     $maxValue = array_search( $maxValue, $map );
//     echo $maxValue;
// }
// majorityElement( $nums );
/* -------------------------------------------------- */
// function digitSum( $n ) {
//     $digSum = 0;
//     while ( $n > 0 ) {
//         $lastDigit = $n % 10;
//         $n = (int) ( $n / 10 );
//         $digSum += $lastDigit;
//     }
//     return $digSum;
// }

// echo digitSum( 123 );
/* -------------------------------------------------- */
// calculate nCr

// function factorial( $n ) {
//     $result = 1;
//     while ( $n > 0 ) {
//         $result *= $n;
//         $n--;
//     }
//     return $result;
// }

// function factorial( $n ) {
//     $result = 1;
//     for ( $i = 1; $i <= $n; $i++ ) {
//         $result *= $i;
//     }
//     return $result;
// }

// function nCr( $n, $r ) {
//     $fact_n = factorial( $n );
//     $fact_r = factorial( $r );
//     $fact_nMr = factorial( $n - $r );
//     return $fact_n / ( $fact_r * $fact_nMr );
// }

// echo nCr( 6, 3 );
/* -------------------------------------------------- */
// $arr = [2, 2, 3, 2];
// sort( $arr );
// function findUniqe( $arr ) {
//     $ans = 0;
//     for ( $i = 0; $i < count( $arr ); $i++ ) {
//         $ans ^= $arr[$i];
//     }
//     return $ans;
// }

// echo findUniqe( $arr );
/* -------------------------------------------------- */
// $op = 50;
// $dp = 20;
// function disPrice( $op, $dp ) {
//     $dis = $op * ( $dp / 100 );
//     $salePrice = $op - $dis;
//     return "Price: " . number_format( $salePrice, 2 );
// }

// echo disPrice( $op, $dp );
/* -------------------------------------------------- */
// $wheels = 43;
// $body = 15;
// $people = 87;

// function calculateCar( $wheels, $body, $people ) {
//     $carFromWheels = floor( $wheels / 4 );
//     if ( $carFromWheels < $body && 2 * $carFromWheels < $people ) {
//         return $carFromWheels;
//     } elseif ( $body < $carFromWheels && 2 * $body < $people ) {
//         return $body;
//     } elseif ( floor( $people / 2 ) < $carFromWheels && floor( $people / 2 ) < $body ) {
//         return floor( $people / 2 );
//     }
// }
// echo calculateCar( $wheels, $body, $people );

/* -------------------------------------------------- */

// $arr = [3, 2, 2, 3];
// $val = 3;
// function removeElement( $arr, $val ) {

// }

// print_r( array_intersect( $arr, [$val] ) );
/* -------------------------------------------------- */

$s = "MCMXCIV";
function romanToInt( $s ) {
    $roman = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];
    $ans = 0;
    for ( $i = 0; $i < strlen( $s ); $i++ ) {
        if ( $i + 1 < strlen( $s ) && $roman[$s[$i]] < $roman[$s[$i + 1]] ) {
            $ans -= $roman[$s[$i]];
            echo $i . ": - :" . $ans . "\n";
        } else {
            $ans += $roman[$s[$i]];
            echo $i . ": + :" . $ans . "\n";
        }
    }
    return $ans;

}

//echo romanToInt( $s );
$roman = [
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000,
];
//echo ( strtr( $s, $roman ) );

/* -------------------------------------------------- */
