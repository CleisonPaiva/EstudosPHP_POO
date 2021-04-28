<?php

class Produtos
{
    public $nome;
    public $valor;

    public function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;

    }
}

class Carrinho
{
    public $produtos;

    public function Adicionar(Produtos $produto)
    {
        $this->produtos[] = $produto;
    }

    public function exibe()
    {
        foreach ($this->produtos as $produto){
            echo $produto->nome."\n";
            echo $produto->valor."\n";
            echo "----------"."\n";
        }
    }
}
$produto1=new Produtos('Notebook',1500);
$produto2=new Produtos('Mouse',150);

$carrinho=new Carrinho();
$carrinho->Adicionar($produto1);
$carrinho->Adicionar($produto2);

$carrinho->exibe();