<?php
//Classe de conexão
class Conexao{
    //Atributos do banco de dados
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;
    
    //Construtor da classse, obtenod atributos do banco de dao 
    public function __construct(){
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        //Caso ocorra falha na conexão
        if ($this->conexao->connect_error) {
            //Die, informar erro na tela 
            die("Falha na conexão: ".$this->conexao->connect_error);
        }
    }
    //Obtendo conexão
    public function getConexao(){
        return $this->conexao;
    }
}
?>