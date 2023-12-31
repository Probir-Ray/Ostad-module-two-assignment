<?php

/**
 * Task Title: Looping with Increment using a Function
 * Created Date: 20/09/2023 (GMT + 6)
 * Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a step of 2. In other words,  you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function should take the arguments like start as 1, end as 20 and step as 2. You must call the function to print. Also do the same using while loop and do-while loop also.
**/

// Even number :: using for loop
function chk_even($start, $end, $step) {
    for($i = $start; $i<=$end; $i++) {
        if($i % $step == 0) {
            echo $i . PHP_EOL;
        }
    }
}

chk_even(1, 20, 2);

echo PHP_EOL;

// Even number :: using while loop
function chk_even_using_while($start, $end, $step) {
    $i = $start;
    while($i<=$end) {
        if($i % $step == 0) {
            echo $i . PHP_EOL;
        }
        $i++;
    }
}

chk_even_using_while(1, 20, 2);

echo PHP_EOL;
// Even number :: using do-while loop
function chk_even_using_do_while($start, $end, $step) {
    $i = $start;
    do {
        if($i % $step == 0) {
            echo $i . PHP_EOL;
        }
        $i++;
    } while($i<=$end);
}

chk_even_using_do_while(1, 20, 2);