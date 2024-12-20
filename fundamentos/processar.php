<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];

if($idade >= 18) {
    echo "Olá, $nome!";
} else {
    echo "Fora $nome";
}