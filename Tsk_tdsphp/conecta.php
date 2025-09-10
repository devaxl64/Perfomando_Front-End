<?php

try { // se der ruim, ele lança(catch) uma exceção (exception)
    $pdo = new PDO("mysql:host=10.91.47.146;dbname=modelophp_db", "root", "202720");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conxão realizada com sucesso! <br>";
    // print_r($pdo->getAttribute());    
    
    // => atribuição
    // -> 
    
    // inserindo usuário
    // statement: (comando)
    $stmt = $pdo->prepare("insert into usuarios (nome, email, datacad)
    values (:nome, :email, default)");
    $stmt->execute([
        ":nome" => "Maria das Couves",
        ":email" => "mariacouves@gmail.com"
    ]);
    // Se usar o Query ao inves do prepare, já tem que jogar os dados dentro do query
    // $stmt->execute([
    //     ":nome" => $_POST['nome'],
    //     ":email" => $_POST['email']
    // ]);

} catch (PDOException $e) { // PDO = PHP DATA OBJECT
    if(strpos($e->getMessage(),"Duplicate") != false){ // strpos procura uma ocorrência dentro de uma string($e).
        echo "Email já cadastrado no banco!";
    } else {
        echo "Erro: " . $e->getMessage();
    }
    echo "Erro: " . $e->getMessage();
}
?>