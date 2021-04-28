<?php
class Animal{
    public function Andar()
    {
        echo'andou';
    }
}

class Cavalo extends Animal {
    public function Andar(){
        echo'O cavalo andou';
    }
}

$animal=new Cavalo();
$animal->Andar();