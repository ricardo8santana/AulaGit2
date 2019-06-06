<?php

// comentario 1 
# comentario 2
/*
comentario de bloco
*/

$_teste1 = "teste";
$_Teste1 = "teste c/ upper";

echo $_Teste1." ".$_teste1;

$string = "contém um texto";
$inteiro = 110;
$float = 100.50;
$boleano = true;
$vazio = "";
$null = null;

echo $string. "<br>";
echo $inteiro. "<br>";
echo $float. "<br>";
echo $boleano. "<br>";
echo $vazio. "<br>";
echo $null. "<br>";

$variavelGlobal = "global";
function testeFuncao($argumento){
    $variavelInterna = "carro";
    echo $variavelInterna." ".$argumento;
};
testeFuncao($variavelGlobal);

function testeFuncao2(){
    global $variavelGlobal;
    $variavelInterna = "carro";
    echo $variavelInterna." ".$variavelGlobal;
};
testeFuncao2();

// variavel estatica (static)

function testeEstatica(){
    static $numero = 0;
    echo ++$numero . "<br>";
}

function testeSem(){
     $numero = 0;
    echo ++$numero . "<br>";
}

testeEstatica();
testeEstatica();
testeEstatica();

//echo vs print

$v1 = "texto 1";
$v2 = "texto 2";

echo $v1. $v2;
print $v1. "alguma coisa" . "<br>";

// variavel recebendo nome com conteudo de outra variavel
$variavelConteudo = "Olá";
$$variavelConteudo = "mundo!". "<br>";
echo $variavelConteudo . $Olá;

// saber a versao do php
echo PHP_VERSION;

//retorna o tamahno da string
$meuTexto = "meu texto";
echo strlen($meuTexto). "<br>";

//retorna quantidades da palavra (words) dentro da string
echo str_word_count($meuTexto). "<br>";

//reverte o conteudo de uma string
echo strrev($meuTexto). "<br>";

# retrona  a posicao do elemento na string
echo strpos($meuTexto, "meu");

//constantes - sao globais
define("minhaConstante", 12). "<br>";
echo minhaConstante;

define("constanteCASE", 8, true);
echo CONSTANTEcase;

//operadores
$num1 = 10;
$num2 = 5;
$num3 = $num1 + $num2;
echo $num3. "<br>";

$num3 = $num1 - $num2;
echo $num3. "<br>";

$num3 = $num1 * $num2;
echo $num3. "<br>";

$num3 = ($num1 + 1) % $num2;
echo $num3. "<br>";

$num3 = $num1 ** $num2;
echo $num3 . "<br>";

// calculando percentual
$valorProduto = 125.99;
$valorDesconto = 10;

$valorComDesconto = $valorProduto * $valorDesconto / 100;
echo $valorComDesconto. "<br>";

$valorComDesconto = $valorProduto * 0.10;
echo $valorComDesconto;
//valor do produto
$valorComDesconto= $valorProduto * 0.90;
echo $valorComDesconto. "<br>";

//operadores de atribuicao assigment
//= += -= *= /= %=

echo $num3. "<br>";

echo $num3 =0; "<br>";

$num3 = 10;
echo $num3. "<br>";

$num3 =+ 5;
echo $num3. "<br>";

$num3 -=5;
echo $num3. "<br>";








?>