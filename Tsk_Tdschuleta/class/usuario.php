<?php 
include_once "db.php";
// require_once "db.php"; // Mesma coisa que o include_once.

// POO com PHP (Classes com PHP)
class Usuario {
    // atributos
    private $id;
    private $login;
    private $senha;
    private $nivel;
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
    public function getLogin(){
        return $this->login;
    }
    public function setLogin(string $login){
        $this->login = $login;
    }
    public function getsenha(){
        return $this->senha;
    }
    public function setsenha(string $senha){
        $this->senha = $senha;
    }
    public function getNivel(){ // não vamos criar setnivel? porque o banco é quem atribui (default)
        return $this->nivel;
    }
    public function setNivel(string $nivel){
        return $this->nivel = $nivel;
    }
    
    // inserindo um usuário
    public function inserir(): bool{ // :bool não é obrigatório
        $sql = "insert into usuarios (login, senha, nivel) values(:login, md5(:senha), :nivel)";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":login",$this->login); // equivale em C#: cmd.Parameters.AddWithValue("splogin", login);
        $cmd->bindValue(":senha", $this->senha);
        $cmd->bindValue(":nivel", $this->nivel);
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
            $this->login = $dados['login'];
            $this->senha = $dados['senha'];
            $this->nivel = $dados['nivel'];
            return true;
        }
        return false;
    }
    
    // Efetuar login
    public function efetuarLogin(string $loginInformado, string $senhaInformada):bool { // se tem parâmetro, usar o 'prepare'
        $sql = ("select * from usuarios where login = :login and senha = md5=(:senha)");
        $cmd = $this->pdo->prepare($sql); // usado quando á parâmetros no construtor;
        $cmd->bindValue(":login", $loginInformado);
        $cmd->bindValue(":senha", $senhaInformada);
        $cmd->execute();
        if($cmd->rowCount() > 0){
            $dados = $cmd->fetch(PDO::FETCH_ASSOC); // retorna uma linha associativa de uma única dimenssão
            $this->id = $dados['id'];
            $this->login = $dados['login'];
            $this->senha = $dados['senha'];
            $this->nivel = $dados['nivel'];
            return true;
        }
        return false;
    }
    
    // Atualizar usuário
    public function atualizar(int $idUpdate):bool {
        $id = $idUpdate;
        if(!$this->id) return false;
        
        $sql = "update usuarios login = :login, nivel = :nivel where id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":login", $this->login);
        $cmd->bindValue(":nivel", $this->nivel);
        $cmd->bindValue(":id", $this->id, PDO::PARAM_INT);
        
        return $cmd->execute();
    }
    
    // Alterar senha
    public function alterarSenha(int $idUpdate, string $novaSenha):bool {
        $id = $idUpdate;
        if(!$this->id) return false;
        
        $sql = "update usuarios senha = md5(:senha) where id = :id";
        $cmd = $this->pdo->prepare($sql);
        $cmd->bindValue(":senha", $novaSenha);
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