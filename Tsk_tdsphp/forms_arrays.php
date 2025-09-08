<form method="get">
    Nome: <input type="text" name="nome">
    <input type="submit" value="Enviar">
    <br>
    Senha: <input type="password" name="senha">
    <input type="submit" value="Enviar">
</form>

<?php 
// print_r($_GET);

if(isset($_GET ['nome'])){ // isset: verifica se tem um valor atribuído. // $_GET recupera o valor da propriedade name (nome), o valor é visível na barra de pesquisa.
    echo "Olá, ". $_GET['nome'];
    echo "<br>";
    echo "A senha digitada foi, ". $_GET['senha'];
}
?>

<br>
-------------------------------
<br>

<form method="post">
    Email: <input type="email" name="email">
    <input type="submit" value="Enviar">
    <br>
    Token: <input type="password" name="token">
    <input type="submit" value="Enviar">
</form>

<?php 
if(isset($_POST['email'])){ // $_POST armazena o valor preenchido no input
    echo "Seu email é: ". $_POST['email'];
    echo "<br>";
    echo "O token é: ". $_POST['token'];
}
// obs:
// Quando é $_GET, o dado vai na URL (Usado em pesquisa).
// Quando é $_POST, é armazenado no corpo da requisição e não na URL (Usado para armazenar dados (usuário, senha etc). 
?>

<br>
-------------------------------
<br>

<form method="post">
    Idade <input type="number" name="idade">
    <input type="submit" value="Enviar">
</form>
<?php 
// $_REQUEST pode ser usado quando o <form> for method="post" ou method="get"
if(isset($_REQUEST['idade'])){ // Se(if) tiver algum valor(isset) dentro do valor: $_REQUEST, imprima(echo) na idade(name)
    echo "Idade recebida: ". $_REQUEST['idade'];
}
?>

<br>
---------------Validação----------------
<br>
<form action="dados.php" method="post"> <!-- action="dados.php" manda os dados para a página 'dados.php'.  -->
    Usuário <input type="text" name="usuario">
    <input type="submit" value="Login">
</form>
<br>
-------------------------------
<br>

<?php 
    $endereco = "http://republicavirtual.com.br/web_cep.php?cep=08225380&formato=json";
    print_r($endereco);
?>

<br>
-------------------------------
<br>

<form action="" method="post">
    Selecione seus Cursos: 
    <br><br>
    <input type="checkbox" name="cursos[]" value="PHP" checked>PHP <br>
    <input type="checkbox" name="cursos[]" value="C#">C# <br>
    <input type="checkbox" name="cursos[]" value="HTML">HTML <br>
    <input type="checkbox" name="cursos[]" value="JS">JS <br>
    <input type="submit" value="Enviar">
</form>
<?php 
// print_r($_POST['cursos']);
if(isset($_POST['cursos'])){
    foreach ($_POST['cursos'] as $curso) {
        echo "Curso escolhido: ". $curso. "<br>";
    }
}
?>


