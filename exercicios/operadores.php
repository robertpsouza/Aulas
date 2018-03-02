<?php
echo "<pre>";
$a = 10;
$b = 3;
$cont = 0;
$cont1 = 100;
$soma = $a + $b;
$sub = $a - $b;
$mul = $a * $b;
$div = $a % $b;

echo "Soma: $soma";

echo "<br>";

echo "Subtração: $sub";

echo "<br>";

echo "Multiplicação: $mul";

echo "<br>";

echo "Divisão:$div";

echo "<hr>";

echo "Operadores de incremento e decremento";
echo "<hr>";

echo "$a += 7";
echo "<br>";
echo "$a++";

echo "<br>";

echo $a -=16;
echo "<br>";

echo $a--;

echo "<hr>";

for ($cont = 10; $cont >= 0; $cont--){
	echo  $cont ."\n";
}

echo "<hr>";

for ($cont1 = 100; $cont1 >= 89; $cont1--){
	echo $cont1 ."\n";
	sleep(1);
}
echo "<hr>";



