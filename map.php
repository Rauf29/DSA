<?php
$str1 = "abcbd";
$str2 = "cabbd";

if ( checkAnagram( $str1, $str2 ) ) {
    echo "YES";
} else {
    echo "NO";
}

function checkAnagram( $str1, $str2 ) {
    if ( strlen( $str1 ) != strlen( $str2 ) ) {
        return false;
    }

    $map = [];
    for ( $i = 0; $i < strlen( $str1 ); $i++ ) {
        $item = $str1[$i];
        if ( !isset( $map[$item] ) ) {
            $map[$item] = 0;
        }
        $map[$item]++;
    }
    var_dump( $map );
    for ( $i = 0; $i < strlen( $str2 ); $i++ ) {
        $item = $str2[$i];
        if ( !isset( $map[$item] ) ) {
            return false;
        }
        $map[$item]--;
        if ( $map[$item] == 0 ) {
            unset( $map[$item] );
        }
    }
    var_dump( $map );
}
