<?php

//////Arquivo Separado/////
class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;


    public function Andar()
    {
      echo 'Andou'."\n";
    }

    public function Parar()
    {
        echo 'Parou'."\n";
    }
}
/////////////////////////
class Carro extends Veiculo
{

    public function ligarlimpador()
    {
        echo 'Limpando em 321'."\n";
    }
   
}

class Moto extends Veiculo
{
    public function darGrau()
    {
        echo 'Dando grau em 321'."\n";
 }
}

$carro=new Carro();
$carro->modelo='Astra';
$carro->cor='Prata';
$carro->ano=2011;
$carro->Andar();
$carro->Parar();
$carro->ligarlimpador();

echo '---------'."\n";

$moto=new Moto();
$moto->modelo='CG160';
$moto->cor='Preta';
$moto->ano=2010;
$moto->Andar();
$moto->Parar();
$moto->darGrau();