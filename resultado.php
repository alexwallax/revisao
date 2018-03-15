<?php

//$a = $_POST['valor1'];
//$b = $_POST["valor2"];
//
//$resultado = $a + $b;
//
//echo "<h1>A soma de $a com $b é $resultado</h1>";
//-------------------------------------------------
//$nota = 7;
//$faltas = 1;
//$conceito = "";
//
//if($nota >= 7 && $faltas < 3 ) {
//    $conceito = "Aprovado";
//} else if ($nota < 3) {
//    $conceito = "Reprovado";
//} else {
//    $conceito = "Recuperação";
//}
//
//echo "Aluno $conceito";
//-----------------------------------------------------

$voto = "tiririca";

$resposta = "";

switch ($voto) {
    case "tiririca":
        $resposta = "TIRIRICA";
        break;
    case "chico":
        $resposta = "CHICO";
        break;
    case "ze lezim":
        $resposta = "ZE LEZIM";
        break;
    default :
        $resposta = "Nulo";
}
echo "Você votou $resposta";


