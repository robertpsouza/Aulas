<?php
$user = "roberto";
$host = 'localhost';
$port = '5432';
$dbname = "aula08";
$pass = "123";

$con_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$pass}";
echo $con_string;
echo "<hr>";
$con  = pg_connect($con_string);
var_dum($con);

