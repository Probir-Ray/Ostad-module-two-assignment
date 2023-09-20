<?php

/**
 * Task Title: Fibonacci Series printing using a Function
 * Description: Write a PHP function to print the first 15 numbers in the Fibonacci series.
 * You should take this 15 as an argument of a function and use a 
 * for loop to generate these numbers and print them by calling the function.
 * Created Date: 20/09/2023 
**/

function fibonacci($n) {
    $old = 0;
    $old_new = 1;
    $new = 1;

    for($i=0; $i<$n; $i++) {    
        echo $old . " ";
    
        $old_new = $new;
        $new = $old_new + $old;
        $old = $old_new;
    }
}

fibonacci(15);