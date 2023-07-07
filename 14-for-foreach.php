<?php

for ($cont=0; $cont <= 10; $cont++):
    echo "8 x $cont = ".($cont*8)."<br>";
endfor;

echo "<hr>";

$cores = array("Verde", "Vermelho", "Azul");

foreach ($cores as $indice => $valor):
    echo "$indice-$valor<br>";
endforeach;