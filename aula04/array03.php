<?php
echo "<pre>";

$pessoas = [
	'cadastro1' => [
		'Nome' => 'Roberto',
		'Idade' => 37,
		'e-mail'=> 'roberto@rdcimportacao.com'
	],
	'cadastro2' => [
		'Nome' =>'Debora', 
		'Idade' => 36,
		'e-mail'=> 'debora@rdcimportacao.com'
	],
	'cadastro3' => [
		'Nome' => 'loucos',
		'Idade' => 35,
		'e-mail'=> 'loucos@rdcimportacao.com'
	]
];

foreach ($pessoas as $pessoa){
	echo "Meu nome é:".$pessoa['Nome']."<br>";
	echo "Tenho: " .$pessoa['Idade'] ."anos"."<br>";
	echo "Meu e-mail é: " .$pessoa['e-mail']."<br>";
	
} 
