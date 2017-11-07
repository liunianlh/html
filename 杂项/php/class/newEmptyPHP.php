<?php

function esprime($limit) {

    $i = str_repeat('01', ceil($limit / 2));

    $sqrtlimit = sqrt($limit);
    $n = 3;
    while ($n < $sqrtlimit) {
        if ($i[$n]) {
            $k = $n * $n;
            $i[$k] = 0;
            while ($k <= $limit) {
                $k += $n;
                $i[$k] = 0;
            }
        }
        $n += 2;
    }

    if ($limit >= 2)
        $primes[0] = 2;

    $n = 3;
    while ($n < $limit) {
        if ($i[$n])
            $primes[] = $n;
        $n += 2;
    }
    return $primes;
}

$prime = esprime(100);
print_r($prime);
echo array_sum($prime);
