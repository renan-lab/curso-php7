<?php
$cont = 1;

while ($cont <= 10):
    echo "Contador é $cont<br>";
    $cont++;
endwhile;

echo "<hr>";

$cont = 1;
do {
    echo "Contador é $cont<br>";
    $cont++;
} while ($cont <= 10);