<?php
//Decimal to Binary
function decToBinary( $dec ) {
    $ans = 0;
    $pow = 1;
    while ( $dec > 0 ) {
        $rem = $dec % 2;
        $dec = floor( $dec / 2 );
        $ans += $rem * $pow;
        $pow = $pow * 10;
    }
    return $ans;
}
for ( $i = 1; $i <= 10; $i++ ) {
    echo decToBinary( $i );
    echo PHP_EOL;
}
// echo decToBinary(  8 );
// echo PHP_EOL;

// // Binary to Decimal
// function binaryToDecimal( $bin ) {
//     $ans = 0;
//     $pow = 1;
//     while ( $bin > 0 ) {
//         $rem = $bin % 10;
//         $bin = floor( $bin / 10 );
//         $ans += $rem * $pow;
//         $pow = $pow * 2;
//     }
//     return $ans;
// }

// echo binaryToDecimal( 1010 );

// find samallest number in array
// function smallest( $arr ) {
//     $min = $arr[0];
//     for ( $i = 1; $i < count( $arr ); $i++ ) {
//         if ( $arr[$i] < $min ) {
//             $min = $arr[$i];
//         }
//     }
//     return $min;
// }
// echo smallest( [1, 2, 3, 4, 5] );

// find largest number in array
// function largest( $arr ) {
//     $max = $arr[0];
//     for ( $i = 1; $i < count( $arr ); $i++ ) {
//         if ( $arr[$i] > $max ) {
//             $max = $arr[$i];
//         }
//     }
//     return $max;
// }

// echo largest( [1, 2, 3, 4, 5] );