<?php

class Modificadores
{
    public $modificador_publico;
    /**Este é o nível de acesso mais permissivo.
     * Ele indica que o método ou atributo da classe é público, ou seja, pode ser acessado em qualquer outro ponto
     * do código e por outras classes.
        */
//////// EXEMPLO //////////
//class Exemplo {
//    public $publico = 'Public';
//    public function metodoPublico() { }
//}$obj = new Exemplo();
//$obj->publico = 'Teste';
//$obj->metodoPublico();

    public $modificador_privado;
    /***Este modificador é o mais restrito. Com ele definimos que somente a própria classe em que
     * um atributo ou método foi declarado pode acessá-lo.
     * Ou seja, nenhuma outra parte do código, nem mesmo as classes filhas, pode acessar esse atributo ou método
     */
//////// EXEMPLO //////////
//class Exemplo{
//    private  $privado = 'Privado';
//    private function metodoPrivado() {}
//}
//$obj = new Exemplo();
//$obj->privado = 'Teste';//Erro
//$obj->metodoPrivado();//Erro

    public $modificador_protected;

/**Esse modificador indica que somente a própria classe e as classes que herdam dela podem acessar o
 * atributo ou método. Dessa forma, ao instanciar a classe os elementos protegidos (protected) não podem
 * ser acessados diretamente, como ocorre com o public.
 */
//////// EXEMPLO //////////
//class Exemplo {
//    protected $protegido = 'Protegido';
//    protected function metodoProtegido() { }
//}
//$obj = new Exemplo();
//$obj->protegido = 'Teste'; //Erro
//$obj->metodoProtegido(); //Erro
}