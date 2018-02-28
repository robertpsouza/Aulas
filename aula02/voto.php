<?php
$idade = 17;
if ($idade >= 18) {
	echo "Voto obrigatorio";
} else if ($idade >=16  || $idade >=60){
	echo "voto Opcional";
} else  if ($idade >= 16 || $idade >= 60){
	echo "Voto Opcional";
} else if ($idade < 16) {
	echo "Não vota";
} else {
	echo "Idade Inválida";
}

