<?php
/*
 1. Crie um array com os números de 1 a 10 e faça o seguinte:
a-Exiba todos os números do array.
 */

$numeros = [1,2,3,4,5,6,7,8,9,10];

for ($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

/*b-Calcule e exiba a soma de todos os números*/

$soma = array_sum($numeros);
echo "A soma de todos os números é: " . $soma . "<br>";

/*c-Inverta a ordem dos elementos no array e exiba o resultado.*/

 arsort($numeros);

echo "Números em ordem decrescente: <br>";
for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}



?>