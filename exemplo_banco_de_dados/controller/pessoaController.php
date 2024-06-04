<?php
// Requisitando conexão com o servidor através do arquivo pessoa.php pelo usuário ROOT*
require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_de_dados/model/pessoa.php';

//Classe para controlar o comportamento da classe pessoa*
class PessoaController{
    //Atributos da clase
    private $pessoa; 

    //Construtor da classe* 
    public function __construct(){
        //Instancia a classe pessoa como objeto no atributo pessoa da classe*
        $this->pessoa = new Pessoa();
        //Se a a variável ação contida na URL for igual a inserir*
        if($_GET['açao'] == 'inserir'){ 
            $this->inserir(); // Executar ação de inserir dados desta classe*
        }
    }

    //Classe de inserção de dados*
    public function inserir(){
        //Guardando informações atravéz do método POST *
        $this->pessoa->setNome($_POST['nome']);
        $this->pessoa->setEndereco($_POST['endereco']);
        $this->pessoa->setBairro($_POST['bairro']);
        $this->pessoa->setCep($_POST['cep']);
        $this->pessoa->setCidade($_POST['cidade']);
        $this->pessoa->setEstado($_POST['estado']);
        $this->pessoa->setTelefone($_POST['telefone']);
        $this->pessoa->setCelular($_POST['celular']);

        //Acesando o método inserir da classe pessoa atravéz do objeto concreto pessoa instanciado nessa classe*
        $this->pessoa->inserir();
    }
    
    // Acessando método listar fa classe pessoa*
    public function listar(){
        return $this->pessoa->listar();
    }
}

//instanciando a classe*
new PessoaController();

?>