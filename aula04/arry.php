<?php
echo "<pre>";

$array = ["Lucas","Roberto","Dario"];
$array2 = array("Lucas","Roberto","Dario");

print_r($array);
var_dump($array2 [1]);

$pessoa = ["Roberto", 37, 1.78, "Souza",0];
for ($i =0; $i < 5; $i++){
echo $pessoa [$i]. "\n";
}

echo "<br>";

	$pessoa = [
		"Nome"=>"Roberto",
		"Idade"=> 37,
		"Altura"=> 1.78,
		"Sobrenome" => "Souza",
		"Estado Civil" => "casado",


	];
print_r($pessoa);
