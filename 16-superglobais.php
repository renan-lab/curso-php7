<?php
// superglobais
/*
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/

$x = 10;
$y = 15;

function somar() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

somar();

echo "<hr>";

echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['REMOTE_ADDR'];
