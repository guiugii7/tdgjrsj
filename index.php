<?php
function factorial($n) {
    if ($n == 0) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$факториал = factorial(10);

echo "Факториал 10 равен $факториал";
?>