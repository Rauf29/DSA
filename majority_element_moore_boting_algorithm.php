<?php
$nums = [2, 1, 1, 1, 2, 2, 2];
// Brute Force approach O(n^2)

function BruteForcemajorityElement( $nums ) {
    foreach ( $nums as $num ) {
        $count = 0;
        foreach ( $nums as $num2 ) {
            if ( $num == $num2 ) {
                $count++;
            }
        }
        if ( $count > count( $nums ) / 2 ) {
            return $num;
        }
    }
}

//echo BruteForcemajorityElement($nums);

// better approach using sorting

function usingSortingMajorityElement( $nums ) {
    sort( $nums );
    $count = 1;
    $ans = $nums[0];
    for ( $i = 1; $i < count( $nums ); $i++ ) {
        if ( $nums[$i] == $nums[$i - 1] ) {
            $count++;
        } else {
            $count = 1;
            $ans = $nums[$i];
        }

    }
    if ( $count > count( $nums ) / 2 ) {
        return $ans;
    }
}
//echo usingSortingMajorityElement( $nums );

// using Moore's Voting Algorithm O(n)

function VotingMajorityElement( $nums ) {
    $count = 0;
    $ans = 0;
    $arryCount = count( $nums );
    for ( $i = 0; $i < $arryCount; $i++ ) {
        if ( $count == 0 ) {
            $ans = $nums[$i];
        }
        if ( $nums[$i] == $ans ) {
            $count++;
        } else {
            $count--;
        }

        // echo "$nums[$i] $ans $count\n";
    }
    return $ans;
}
echo VotingMajorityElement( $nums );