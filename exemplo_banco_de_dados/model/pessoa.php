<?php
// Requisitando conexão com o servidor através do arquivo conexão.php pelo usuário ROOT
require_once $_SERVER['DOCUMENT_ROOT'] . '/exemplo_banco_de_dados/controller/conexao.php';

// Criando a classe pessoa para reter informações do usuário
class Pessoa{
    // Informações do usuário
    private $id; 
    private $nome; 
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    private $telefone;
    private $celular;

    // Métodos de getter e setter das informações do usuário, servem para setar informações ou pegar, dependendo da necessidade. Garante mais segurança aos dados e necessário no uso do modificador private
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function setCep($cep){
        $this->cep = $cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }
    public function getCelular(){
        return $this->celular;
    }
    public function setCelular($celular){
        $this->celular = $celular;
    }

    // Construtor da classe, cria uma nova instância da classe Conexao para acesso ao banco de dados
    public function __construct(){
        $this->conexao = new Conexao();
    }

    // Método de inserção de informações no banco de dados
    public function inserir(){
        // Linha que será inserida como comando no SGBD para incluir dados
        $sql = "INSERT INTO pessoa (`nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `celular`) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        // Preparando comando SQL e guardando
        $stmt = $this->conexao->getConexao()->prepare($sql);

        // Associa os valores às variáveis no comando SQL, pra cada s tem uma informação
        $stmt->bind_param('ssssssss', $this->nome, $this->endereco, $this->bairro, $this->cep, $this->cidade, $this->estado, $this->telefone, $this->celular);
        
        // Executa o comando SQL e retorna verdadeiro se a inserção for bem-sucedida
        return $stmt->execute();
    }

    // Método para listar todas as pessoas no banco de dados, para mostrar o banco de dados criado
    public function listar(){
        // Comando SQL para selecionar todos os registros da tabela pessoa
        $sql = "SELECT * FROM pessoa";
        // Prepara o comando SQL
        $stmt = $this->conexao->getConexao()->prepare($sql);
        // Executa o comando SQL
        $stmt->execute();
        // Obtém o resultado da execução
        $result = $stmt->get_result();
        // Inicializa um vetor para armazenar as pessoas
        $pessoas = [];
        // atribui cada linha do resultado a pessoa para depois passar para o vetor
        while($pessoa = $result->fetch_assoc()){
            // Adiciona cada pessoa ao vetor de pessoas
            $pessoas[] = $pessoa;
        }
        // Retorna o vetor contendo todas as pessoas
        return $pessoas;
    }

    public functiion atualizar(){

    }
}
?>
