<?php

class Conexao{
    private $host = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $banco = "exemplo_aula_pw";
    private $conexao;
    

    public function __construct(){
        $this->conexao = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);

<<<<<<< Updated upstream
        if ($this->conexao->connect_error) {
            die("Falha na conexão: ".$this->conexao->connect_error);
        }
    }

    public function getConexao() {
=======
        if ($this->conexao->connect_error) { //Se falhar na obtenção de conexão
            //die: falha sistemica, informa erro na tela
            die("Falha na Conexão: " . $this->conexao->connect_error);
        }
    }
    //Obtendo conexão
    public function getConexao(){
>>>>>>> Stashed changes
        return $this->conexao;
    }
}
?>