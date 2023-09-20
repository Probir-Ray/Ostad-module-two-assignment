<?php

/**
 * Task Title: Break on Condition
 * Description: Write a PHP program that calculates and prints the first 10 Fibonacci numbers.
 * But, if a Fibonacci number is greater than 100, break out of the loop using the break statement.
 * Created Date: 20/09/2023 
**/

$old = 3;
$old_new = 2;
$new = 1;

for($i=0; $i<10; $i++) {
    if($old > 100) break;

    echo $old . " ";

    $old_new = $new;
    $new = $old_new + $old;
    $old = $old_new;
}

