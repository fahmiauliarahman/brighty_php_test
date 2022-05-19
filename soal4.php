<?php

function fizzBuzz(int $num)
{
    for ($i = 1; $i <= $num; $i++) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo "FizzBuzz";
        } elseif ($i % 3 === 0) {
            echo "Fizz";
        } elseif ($i % 5 === 0) {
            echo "Buzz";
        } else {
            echo $i;
        }

        if ($i < $num) {
            echo ", ";
        }
    }

    echo "\n";
}

echo fizzBuzz(100);


// to run, type in terminal: php soal4.php