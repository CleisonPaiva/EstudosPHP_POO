<?php

abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }

    /**
     * @param mixed $saldo
     */
    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    abstract protected function Sacar($saldo);

    abstract protected function Depositar($d);

}


class Itau extends Banco
{
    public function Sacar($saldo)
    {
        $this->saldo-=$saldo;
        echo "Sacou: ".$saldo."\n";
        echo "Resta: ".$this->saldo."\n";

    }

    public function Depositar($d)
    {
        $this->saldo+=$d;
        echo "Depositou: ".$d."\n";
    }
}


$itau = new Itau();
$itau->setSaldo(1500);
echo "Saldo Total:";
echo $itau->getSaldo()."\n";
$itau->Sacar(250);
echo '---------------'."\n";
$itau->Depositar(300);
echo "Saldo Total:";
echo $itau->getSaldo()."\n";