<?php
$num = 10;

if ($num === 10):
    echo "É igual a 10";
    echo "fim";
elseif ($num <= 9):
    echo "É menor ou igual a 9";
    echo "fim";
else:
    echo "É diferente de 10";
    echo "fim";
endif;
echo "<hr>";

$media = 6;
echo ($media >= 7) ? "Aprovado!" : "Reprovado!";
echo "<hr>";

// switch case
$color = "yellow";
switch ($color):
    case "red":
        echo "Sua cor preferida é o vermelho";
        break;
    case "green":
        echo "Sua cor preferida é o verde";
        break;
    case "blue":
        echo "Sua cor preferida é azul";
        break;
    default:
        echo "Sua cor preferida não é vermelho, verde ou azul";
endswitch;