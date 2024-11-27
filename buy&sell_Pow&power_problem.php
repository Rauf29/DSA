<?php

$x = 2;
$n = 10;
function myPow( $x, $n ) {
    if ( $n == 0 ) {
        return 1.0;
    }

    if ( $x == 0 ) {
        return 0.0;
    }

    if ( $x == 1 ) {
        return 1.0;
    }

    if ( $x == -1 && $n % 2 == 0 ) {
        return 1.0;
    }

    if ( $x == -1 && $n % 2 != 0 ) {
        return -1.0;
    }

    $binFrom = $n;
    if ( $n < 0 ) {
        $x = 1 / $x;
        $binFrom = abs( $binFrom );
    }
    $ans = 1;
    while ( $binFrom > 0 ) {
        if ( $binFrom % 2 == 1 ) {
            $ans *= $x;
        }
        $x *= $x;
        $binFrom = floor( $binFrom / 2 );
    }
    return $ans;
}

//echo myPow( $x, $n );

//----------------------------------------------------------------------

$prices = [7, 1, 5, 3, 6, 4];

function maxProfit( $prices ) {
    $maxProfit = 0;
    $bestBuy = $prices[0];

    for ( $i = 1; $i < count( $prices ); $i++ ) {
        if ( $prices[$i] > $bestBuy ) {
            $maxProfit = max( $maxProfit, $prices[$i] - $bestBuy );
        }
        $bestBuy = min( $bestBuy, $prices[$i] );
    }

    return $maxProfit;
}

echo maxProfit( $prices );