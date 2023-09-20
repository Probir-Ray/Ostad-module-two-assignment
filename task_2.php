<?php

/**
 * Task Title: Skip Multiples of 5
 * Description: Create a PHP script that prints numbers from 1 to 50 using a for loop. 
 * However, when the loop encounters a multiple of 5, 
 * it should skip that number using the continue statement and continue to the next iteration
 * Created Date: 20/09/2023 
**/

for($i = 1; $i<=50; $i++) {
    if($i % 5 == 0) {
        continue;
    }
    echo $i . PHP_EOL;
}