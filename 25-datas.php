<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s A');
echo "<hr>";

$date = date('Y-m-d');
echo $date;
echo "<br>";
$datetime = date('Y-m-d H:i:s');
echo $datetime;
echo "<hr>";

$time = time();
echo date('d/m/Y', $time);
echo "<hr>";

$data_pagamento = mktime(15, 30, 00, 12, 15, 2023);
echo date('d/m - h:i', $data_pagamento);
echo "<hr>";

$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/Y', $data);