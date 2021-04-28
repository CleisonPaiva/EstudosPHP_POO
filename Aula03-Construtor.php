<?php

class Login{
//    public $email;
//    public $senha;

    private $email;
    private $senha;
    private $nome;

    public function __construct($email,$senha,$nome)
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function Logar()
    {
        if($this->email =='teste@teste.com' and $this->senha==123){
            echo 'Logado com sucesso';
        }else{
            echo 'Dados Invalidos';
        }
    }

}

$usuario=new Login('teste@teste.com',1234,'Cleison Mendes');
//$usuario->setEmail('teste@teste.com');
//echo $usuario->getEmail();
//$usuario->setSenha(123);
echo $usuario->getNome();

$usuario->Logar();