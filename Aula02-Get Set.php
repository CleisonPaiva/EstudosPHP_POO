<?php

class Login{
//    public $email;
//    public $senha;

    private $email;
    private $senha;

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

$usuario=new Login();
$usuario->setEmail('teste@teste.com');
echo $usuario->getEmail();
$usuario->setSenha(123);
echo $usuario->getSenha();
$usuario->Logar();