<?php 
include_once "db.php";
// require_once "db.php"; // Mesma coisa que o include_once.

// POO com PHP (Classes com PHP)
class Usuario {
    // atributos
    private $id;
    private $nome;
    private $email;
    private $datacad;
    private $pdo;  
    
    // __: método construtor
    // public function __construct(){} // não tem necessidade de um construtor vazio no PHP
    // public function __construct($pdo){$pdo = getConnection();} // outra forma de fazer.
    public function __construct() 
    { // realiza a conexão durante a criação da instância, no caso, do objeto.
        $this->pdo = getConnection();
    }
    // $user = new Usuario(); // Recebe um usuário já com uma conexão pdo
    // $user = new Usuario(getConnection()); // recebe um objeto com a conexão pdo já aberta em db.php
    
    // Getters e Setters - Propriedades (C#) ou métodos de acesso das linguagens de prog.
    public function getId(){
        return $this->id; // não vamos criar setId? porque o banco é quem atribui (automaticamente)
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome(string $nome){
        $this->nome = $nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getDataCad(){ // não vamos criar setDataCad? porque o banco é quem atribui (default)
        return $this->datacad;
    }
    
    // inserindo um usuário
    public function inserir(): bool{ // :bool não é obrigatório
        $sql = "insert into usuarios (nome, email, datacad) values(:nome, :email, default)";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":nome",$this->nome); // equivale em C#: cmd.Parameters.AddWithValue("spnome", Nome);
        $cmd->bindValue(":email", $this->email);
        $cmd->execute();
        if($cmd->execute()){
            $this->id = $this->pdo->lastInsertId();
            return true;
        }
        return false;
    }
    // listando usuarios
    public function listar(): array{ // :array não é obrigatório
        $cmd = $this->pdo->query("select * from usuarios order by id desc");
        return $cmd->fetchAll(PDO::FETCH_ASSOC); // Entrega uma matriz associativa a quem está pedindo. // retorna uma linha associativa de duas ou mais dimenssões.
    }
    // buscar por id
    public function buscarPorId(int $id):bool { // se tem parâmetro, usar o 'prepare'
        $sql = ("select * from usuarios where id = :id");
        $cmd = $this->pdo->prepare($sql); // usado quando á parâmetros no construtor;
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        if($cmd->rowCount() > 0){
            $dados = $cmd->fetch(PDO::FETCH_ASSOC); // retorna uma linha associativa de uma única dimenssão
            $this->id = $dados['id'];
            $this->nome = $dados['nome'];
            $this->email = $dados['email'];
            $this->datacad = $dados['datacad'];
            return true;
        }
        return false;
    }
    
    // Atulizar usuário
    public function atualizar(){
        if(!$this->id) return false;
        
        $sql = "update usuarios nome = :nome, email = :email where id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":nome", $this->nome);
        $cmd->bindValue(":email", $this->email);
        $cmd->bindValue(":id", $this->id, PDO::PARAM_INT);
        
        return $cmd->execute();
    }
    
    // Excluir usuario
    public function excluir(){
        if(!$this->id) return false;

        $sql = "delete from usuarios where id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":id", $this->id, PDO::PARAM_INT);

        return $cmd->execute();
    }
}
?>