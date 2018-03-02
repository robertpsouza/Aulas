<?php
echo "<pre>";

$a = 10;
$b = 12;
$c = 1;
$d = 0;
var_dump($a == $b);
var_dump($a === $b);
var_dump($a <> $b);
echo "<hr>";

var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);

echo "<hr>";

var_dump ($c and $d);
var_dump ($c or $b);
var_dump ($c xor $d);
var_dump ($c && $d);
var_dump ($d && $c);

