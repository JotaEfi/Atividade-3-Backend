<?php

abstract class Cinema {
  public $sala;
  public $sessao;
  public $assentos = 50;
  public $filme;
  public $preco = 15;

}

class Cliente{
  protected $nome;
  protected $idade;
  protected $email;

  //insere nome do cliente
  public function setNome($nome){
    $this->nome = $nome;
  }
  //retorna o nome inserido
  public function getNome(){
    return $this->nome;
  }

  //insere idade
  public function setIdade($idade){
    $this->idade = $idade;
    if($idade <= 18){
      echo "Você não pode comprar este ingresso. \n";

    }
  }
  //retorna a idade inserido
  public function getIdade(){
    return $this->idade;
  }

  //insere email
  public function setEmail($email){
    $this->email = $email;
  }
  //retorna o email inserido
  public function getEmail(){
    return $this->email;
  }
}

$cliente1 =  new Cliente();
$cliente1->setNome("Luis");
$nome1 = $cliente1->getNome();
$cliente1->setIdade(19);
$idade1 = $cliente1->getIdade();
$cliente1->setEmail("capitaoamerica@gmail.com");
$email1 = $cliente1->getEmail();



class Filme extends Cinema{

  public $classificacao;
  public $genero;
  public $duracao;

  public function __construct($filme, $genero, $classificacao, $duracao){
    $this->filme = $filme;
    $this->genero = $genero;
    $this->classificacao = $classificacao;
    $this->duracao = $duracao;

  }

}

$filme1 = new Filme("Duna", "ficcão científica", 14, 162);



class Ingresso extends Cinema{

  public function Comprar () {
    $this->assentos -= 1;
  }

  public function __construct($filme, $sessao, $sala){
    $this->filme = $filme;
    $this->sessao = $sessao;
    $this->sala = $sala;
  }

}

$ingresso1 = new Ingresso("Duna", 2, 4);



class Sala extends Cinema{
  protected $numero_assento; 

  public function getNumAssento(){
    return $this->numero_assento;
  }

  public function setNumAssento($numero_assento){
    $this->numero_assento = $numero_assento;
  }

}

$sala1 = new Sala();
$sala1->setNumAssento(5);
$poltrona1 = $sala1->getNumAssento();
$numeroAssento1 = $sala1->getNumAssento();


/////////////////////////////////////////


echo "\n\nFilmes disponíveis: \n\n$filme1->filme \nGênero: $filme1->genero \nClassificação: $filme1->classificacao \nDuração: $filme1->duracao min.";
echo "\n\nSala: 4 \nAssentos disponíveis: $sala1->assentos";
echo "\n\nNome: $nome1 \nIdade: $idade1 \nEmail: $email1 "; //Cliente


echo "\n\nIngresso:\nCliente: $nome1 \nFilme: $ingresso1->filme \nSessão: $ingresso1->sessao \nSala: $ingresso1->sala \nPoltrona: $poltrona1 \nPreço: R$$ingresso1->preco"; //ingresso