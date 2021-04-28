<?php
class Pessoa{

//    private $nome;
    private $dados=array();

    public function __set($nome,$valor)
    {
        //$this->$nome=$valor;
        $this->dados[$nome]=$valor;
    }

    public function __get($nome)
    {
        //return $this->nome;
        return $this->dados[$nome];
    }

    public function __tostring()
    {
        return 'Tentei imprimir o objeto'."\n";
    }   public function __invoke()
    {
        return 'Tentei imprimir o objeto como função'."\n";
    }

}
$pessoa=new Pessoa();
$pessoa->nome='Cleison';
$pessoa->idade=50;
$pessoa->sexo='M';

echo $pessoa->nome."\n";
echo $pessoa->idade."\n";
echo $pessoa->sexo."\n";
echo "-------"."\n";

echo $pessoa;//Metodo tostring tenta imprimir  o objeto

echo "-------"."\n";
echo $pessoa();//Metodo invoke tenta imprimir  o objeto como função