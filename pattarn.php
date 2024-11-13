<?php

// Square Pattern

// $n = 4;
// $num = 1;
// for ( $i = 0; $i < $n; $i++ ) {
//     for ( $j = 0; $j < $n; $j++ ) {
//         echo $num . " ";
//         $num++;
//     }
//     echo PHP_EOL;
// }

// Triangle Pattern

// $n = 4;
// for ( $i = 0; $i < $n; $i++ ) {
//     for ( $j = 0; $j < $i + 1; $j++ ) {
//         echo "*";
//     }
//     echo PHP_EOL;
// }

// Reverse triangle pattern

// $n = 4;
// for ( $i = 0; $i < $n; $i++ ) {
//     for ( $j = $i + 1; $j > 0; $j-- ) {
//         echo "$j";
//     }
//     echo PHP_EOL;
// }

// Floyd's triangle pattern

// $n = 4;
// $num = 1;
// for ( $i = 0; $i < $n; $i++ ) {
//     for ( $j = $i + 1; $j > 0; $j-- ) {
//         echo $num . " ";
//         $num++;
//     }
//     echo PHP_EOL;
// }

// inverted triangle pattern

$n = 4;
$num = 1;
// for ( $i = 0; $i < $n; $i++ ) {
//     //spaces
//     for ( $j = 0; $j < $i; $j++ ) {
//         echo " ";
//     }
//     // nums
//     for ( $k = 0; $k < $n - $i; $k++ ) {
//         echo ( $i + 1 );
//     }
//     echo PHP_EOL;
// }

// for ( $i = 0; $i < $n; $i++ ) {
//     //spaces
//     for ( $j = 0; $j < $i; $j++ ) {
//         echo " ";
//     }
//     // nums
//     for ( $k = 0; $k < $n - $i; $k++ ) {
//         echo ( $i + 1 ) . " ";
//     }
//     echo PHP_EOL;
// }

// Pyramid pattern
$n = 4;
for ( $i = 0; $i < $n; $i++ ) {
    //spaces
    for ( $j = 0; $j < $n - $i - 1; $j++ ) {
        echo " ";
    }
    // nums1
    for ( $j = 1; $j <= $i + 1; $j++ ) {
        echo $j;
    }
    for ( $j = $i; $j > 0; $j-- ) {
        echo $j;
    }
    echo PHP_EOL;
}

//Hollow Diamond pattern

// $n = 4;
// //top
// for ( $i = 0; $i < $n; $i++ ) {
//     //spaces
//     for ( $j = 0; $j < $n - $i - 1; $j++ ) {
//         echo " ";
//     }
//     echo "*";
//     if ( $i != 0 ) {
//         //spaces
//         for ( $j = 0; $j < 2 * $i - 1; $j++ ) {
//             echo " ";
//         }
//         echo "*";
//     }
//     echo PHP_EOL;
// }
// //bottom
// for ( $i = 0; $i < $n - 1; $i++ ) {
//     // spaces
//     for ( $j = 0; $j < $i + 1; $j++ ) {
//         echo " ";
//     }
//     echo "*";

//     if ( $i != $n - 2 ) {
//         //spaces
//         for ( $j = 0; $j < 2 * ( $n - $i ) - 5; $j++ ) {
//             echo " ";
//         }
//         echo "*";
//     }
//     echo PHP_EOL;
// }

// butterfly pattern
// $n = 5;
// for ( $i = 1; $i <= $n; $i++ ) {
//     // Left part
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }

//     // Spaces
//     for ( $j = 1; $j <= 2 * ( $n - $i ); $j++ ) {
//         echo " ";
//     }

//     // Right part
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }

//     echo "\n";
// }

// // Lower half
// for ( $i = $n; $i >= 1; $i-- ) {
//     // Left part
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }

//     // Spaces
//     for ( $j = 1; $j <= 2 * ( $n - $i ); $j++ ) {
//         echo " ";
//     }

//     // Right part
//     for ( $j = 1; $j <= $i; $j++ ) {
//         echo "*";
//     }

//     echo "\n";
// }