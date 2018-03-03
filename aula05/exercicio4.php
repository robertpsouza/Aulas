<?php
echo "<pre>";

$pessoa = [
	'nome' => 'joao',
	'idade'=> 17,
	'temhabilitacao'=> true,
];

function podedirigir($pessoa){
	if ($pessoa["idade"] >= 18 and $pessoa["temhabilitacao"] == true){
		echo " Pode Dirigir";
	} else {
		echo " Ainda Não vagabundo";
	}
}

podedirigir($pessoa);


