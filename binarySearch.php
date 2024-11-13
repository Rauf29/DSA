<?php
$arr = [];
$start = 0;
$target = 1;
for ( $i = 1; $i <= 2000; $i++ ) {
    array_push( $arr, $i );
}
$end = count( $arr ) - 1;
function binarySearch( $arr, $start, $end, $target ) {
    if ( $start > $end ) {
        return false;
    }

    $midIndex = floor( ( $start + $end ) / 2 );
    if ( $arr[$midIndex] === $target ) {
        return true;
    }
    if ( $arr[$midIndex] > $target ) {
        return binarySearch( $arr, $start, $midIndex - 1, $target );

    } else {
        return binarySearch( $arr, $midIndex + 1, $end, $target );
    }
}

if ( binarySearch( $arr, $start, $end, $target ) ) {
    echo "True";
} else {
    echo "False";
}