------------- Arrays ---------------

<?php 

// Uma matriz vazia = valor, pode ser incrementado o valor que quiser:
$nomes = [];
$nomes[]="Ana";
$nomes[]="Maria";
$nomes[]="Paulo";
$nomes[]="Julia";
$nomes[]="Roberto";

foreach ($nomes as $nome) {
    echo "<br>" .$nome;
}
echo "<br><br>";

// Matriz com coleções de matrizes:
$usuarios = [];
$usuarios[] = ["nome"=>"José", "idade"=>25];
$usuarios[] = ["nome"=>"Lucia", "idade"=>32];
// print_r($usuarios);

foreach($usuarios as $user){
    echo "<br> Nome: ".$user['nome']." - Idade: ".$user['idade'];
}
echo "<br><br><br>";

$formDados = [];
if($_POST){
    $formDados[] = ['nome'=>$_POST['nome']]; 
    $formDados[] = ['telefone'=>$_POST['telefone']]; 

    // armazena o dado/cookie por 3600 segundos (1h):
    setcookie("formdados", json_encode($formDados), time() + 3600); 
    // print_r($formDados);
}
// recupera o dado/cookie armazenado:
if(!isset($formDados)){
    $formDados = [];
} else {
    $formDados = json_decode($_COOKIE['formdados'], true);
}
// exibindo os dados/cookies recuperados:

# Não funcionou:
foreach ($formDados as $key => $dado) {
    echo "<br> {$key}: {$dado}";

    # Não está indo:
    // echo "<br> Nome: ".$dado['nome'];
    // echo "<br> Idade: ".$dado['telefone'];
}


?>
<form action="" method="post">
    Nome: <input type="text" name="nome"> <br>
    Telefone: <input type="tel" name="telefone"> <br>
    <input type="submit" value="Gravar">
</form>

