<?php
$nome = "Leonam Sousa";
$a = 1;
$b = 2;
$c = 3;

function exibirNome(){
    global $nome;
    echo $nome;
}

exibirNome();
echo "<hr>";

function exibirCidade(){
    global $cidade;
    $cidade = "Salvador";
}

exibirCidade();
echo $cidade;
echo "<hr>";

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();