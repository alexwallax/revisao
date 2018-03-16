<?php

$cidades = array("Natal", "Mossoro", "Caico", "Pau dos Ferros");

echo $cidades[1];

$cidades[2] = "Macaiba"; //troca a cidade 2 para macaiba
$cidades[cout($cidades)] = "Macaiba"; // vai acrescentar macaiba na ultima

//var_dump($cidades); // mostra tudo

for($i = 0; $i < count($cidades); $i++) {
    echo "$cidades[$i]<br>";
}

foreach ($cidades as $cidade) { //utilizado em array "foreach"
    echo "$cidade<br>";
}