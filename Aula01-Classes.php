<?php

class Hotel{
    public $nome;
    public $telefone;

    public function Reservar()
    {
        echo $this->nome;
        echo $this->telefone;
        echo 'Reservado';
    }
}

$aruan =new Hotel();
$aruan->nome='Aruan Hotel';
$aruan->telefone=996413160;
$aruan->Reservar();
