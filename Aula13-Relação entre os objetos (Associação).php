<?php

class Pedido
{
    public $numero;
    public $cliente;
}

class Cliente
{
    public $nome;
    public $endereco;
}

$cliente=new Cliente();
$cliente->nome="Cleison";
$cliente->endereco="Rua xxx";

$pedido=new Pedido();
$pedido->numero=123;
$pedido->cliente=$cliente;

$dados=array(
    'numero'=>$pedido->numero,
    'nome'=>$pedido->cliente->nome,
    'endereco'=>$pedido->cliente->endereco,
);

var_dump($dados);