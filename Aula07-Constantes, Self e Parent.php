<?php
class Pessoa{
    const nome='Cleison Mendes';

    public function exibenome()
    {
      echo  self::nome;
    }
}
/*-> PARENT <-*/
/**Faz referência a classe pai que foi herdada pela classe atual. Basicamente foi criado para que você não
 * precise, dentro da classe filha, ficar explicitando qual é a classe pai de onde será chamado o método,
 * acessar o atributo, constante, etc.
 */

class Cleison extends Pessoa {
    const nome='Paiva';
    public function exibenome()
    {
        echo  parent::nome;
    }
}



//$people=new Pessoa();
//$people->exibenome();

$cleison=new Cleison();
$cleison->exibenome();

/*-> SELF <-*/
/**A referência em self aponta sempre para a própria classe onde é utilizado e é essa a
 * diferença para o static. Ao utilizar self em A, a referência será para a classe A e quando utilizado
 * em B a referência será a B.
 *
 */
