<?php
/*
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) { //vai pular de 2 em 2
        echo "Entrando no laço $i <br>";
    }
}

$n = 5;
while ($n < 20) {
    echo "O valor de n é $n <br>";
    $n++;
}
  
 */

require_once funcoes;

$escolha = $_POST["escolha"]; 

validar($escolha, testeConhecimento.php);
