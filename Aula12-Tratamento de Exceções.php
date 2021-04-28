<?php
class NewsLetter{
    public function cadastrarEmail($email){
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            throw new Exception('Email Invalido',1);
        }else{
            echo 'Sucesso';
        }
    }
}

$newsletter=new NewsLetter();
try{
    $newsletter->cadastrarEmail('contato"');
}
catch (Exception $e){
    echo "Mensagem ".$e->getMessage()."\n";
    echo "Codigo ".$e->getCode()."\n";
    echo "Linha ".$e->getLine()."\n";
    echo "Arquivo ".$e->getFile()."\n";
}