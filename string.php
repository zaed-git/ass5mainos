<?php


$strings = ["Hello", "World", "PHP", "Programming"];
///////////////////////////////////////////////
// foreach loop start
//////////////////////////////////////////////
foreach ($strings as  $index => $string) {

    echo  $index + 1 . "  : Original String-  " . $string;
    $string =  strtolower($string);

    $str_index = strlen($string);

    $count = 0;
    //
    $vowle  = ["a", "e", "i", "o", "u"];
    // for loop use nested  count vowel in string 
    for ($i = 0; $i < strlen($string); $i++) {
        for ($j = 0; $j < count($vowle); $j++) {


            if ($string[$i] === $vowle[$j]) {
                $count++;
            }
        }
    }
    //////////////////////
    // end for loop  count vowel in string 
    ///////////////////////
    echo " , Vowel Count: " . $count;
    echo ",   Reversed String: ";

    ///////////////////////////////////////////
    // for loop use reverse string 
    //////////////////////////////////////////
    for ($i = $str_index - 1; $i >= 0; $i--) {



        if ($index == 2) {
            echo strtoupper($string[$i]);
        } else {
            if ($i == 0) {
                echo strtoupper($string[$i]);
            } else {


                echo  $string[$i];
            }
        }
        ////////////////

    }
    //////////////////////
    // end for loop reverse string
    ///////////////////////

    echo "\n";
}
