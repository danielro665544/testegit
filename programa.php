<?php

require "cliente.php";
require "produto.php";
require "cartao.php";
require "carrinho.php";

$nome = $_POST["nome"];
$email = $_POST["email"];

$cliente = New cliente($nome, $email);

$nomeProduto1 = $_POST["nomeProduto1"];
$valor1 = $_POST["valor1"];
$frete1 = $_POST["frete1"];
$quantidade1 = $_POST["quantidade1"];

$nomeProduto2 = $_POST["nomeProduto2"];
$valor2 = $_POST["valor2"];
$frete2 = $_POST["frete2"];
$quantidade2 = $_POST["quantidade2"];

$nomeProduto3 = $_POST["nomeProduto3"];
$valor3 = $_POST["valor3"];
$frete3 = $_POST["frete3"];
$quantidade3 = $_POST["quantidade3"];

$produto1 = new produto($nomeProduto1, $valor1, $frete1, $quantidade1);
$produto2 = new produto($nomeProduto2, $valor2, $frete2, $quantidade2);
$produto3 = new produto($nomeProduto3, $valor3, $frete3, $quantidade3);

$numero = $_POST["numero"];
$codigo = $_POST["codigo"];
$data = $_POST["data"];
$titular = $_POST["titular"];

$cartao = new cartao($numero, $codigo, $data, $titular);


$itens = [$produto1, $produto2, $produto3];
$carrinho = new carrinho($itens, $cliente);



$produtos = $carrinho->GetItens();



var_dump($produtos[0]);

foreach($produtos[0] as $teste){
    echo $teste["valor"];
}