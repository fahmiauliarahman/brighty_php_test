<?php
function segitiga($max_number)
{
    for ($i = $max_number; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "$j ";
        }
        echo "\n";
    }
}


echo segitiga(9);

// to run, type in terminal: php soal5.php