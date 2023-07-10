<?php
$string = "13/09/2018";
// $padrao = "/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
$padrao = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/i";

if (preg_match($padrao, $string)):
    echo "Válido";
    echo "<hr>";
    echo $string;
else:
    echo "Inválido";
    echo "<hr>";
endif;