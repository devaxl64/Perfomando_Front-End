<form method="post">
    Nome: <input type="text" name="nome" required> <br>
    Idade: <input type="text" name="idade" required> <br>
    <input type="submit" value="Cadastrar">
</form>
<br>
<form method="post">
    <input type="submit" value="Limpar Dados" name="apagar">
</form>
<?php 
session_start(); // armazena cookies do navegador
if(!isset($_SESSION['cadastros'])){
    $_SESSION['cadastros'] = [];
}
if($_POST){
    if(isset($_POST['nome'])){
        $_SESSION['cadastros'][] = [
            "nome"=>$_POST['nome'],
            "idade"=>$_POST['idade']
        ];
        }
    }
    
// Apagar dados/cookies armazenados:
if(isset($_POST['apagar'])){
        session_destroy();
    }
        
echo "<h3>Cadastros</h3>";
        
// Exibindo cadastros:
if(isset($_SESSION['cadastros'])){
    # Este 'foreach' está fazendo o dado cadastrado ser duplicado. 
    foreach ($_SESSION['cadastros'] as $cad)
    echo "<br> Nome: {$cad['nome']} - Idade: {$cad['idade']}";
}

?>
