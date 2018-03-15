<?php

function validar($escolha, $redirecionamento){

if($escolha == "sim") {
    echo "Parabens";
} else {
    //enviar uma mensagem para tela no php
    header("location:$redirecionamento?mensagem=nao"); //redirecionamento
}
}

