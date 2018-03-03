<?php
echo "<pre>";

function maioridade($idade){
	if ($idade >= 18){
		echo "Maior de Idade";
	} else{
		echo "Menor de idade vagabundo";
	}
}
maioridade (14);
