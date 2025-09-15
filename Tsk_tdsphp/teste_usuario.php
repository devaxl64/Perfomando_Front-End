<?php 
include_once "usuario.php";
$user = new Usuario();


# Testando Inserir:
// echo "Inserindo usuáro: ";
// $user->setNome("Mirtes das Couves");
// $user->setEmail("mirtescouves@gmail.com");

// if($user->inserir()){
//     echo "Usuário {$user->getNome()} inserido com sucesso!";
// } else {
//     echo "Falha ao inserir o usuário {$user->getNome()}!";
// }
// exit;


# Testando Buscar por id.
if($user->buscarPorId($_GET['id'])){
    // echo "Usuário ". $user->getNome()." localizado!";
    echo "Usuário localizado. <br>";
    echo "Id: {$user->getId()}. <br>";
    echo "Nome: {$user->getNome()}. <br>";
    echo "Email: {$user->getEmail()}. <br>";
    echo "Cadastrado em: {$user->getDataCad()}. <br>";
}

# testando atulizar usuário:
// $user->setNome($_GET['nome']); // ("Gilmara Couves")
// $user->setEmail($_GET['email']); // ("gilmaracouves@gmail.com")

// if($user->atualizar()($_GET['id'])){
//     echo "Usuário atualizado com sucesso! <br>";
// }


// if($user->buscarPorId($_GET['id'])){
//     echo "Usuário localizado. <br>";
//     echo "Id: {$user->getId()}. <br>";
//     echo "Nome: {$user->getNome()}. <br>";
//     echo "Email: {$user->getEmail()}. <br>";
//     echo "Cadastrado em: {$user->getDataCad()}. <br>";
// }


?>