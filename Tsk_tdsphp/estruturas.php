<?php

// estruturas condicionais (if, if..else, if...elseiff...else, switch, ?:(ternário), null - ?? (coalecência) )

$idade = 18;

// quando aparece a sugestão como os "If ... elseif ... else", por exemplo. É conhecido como snipetty (bloco de comando)
if ($idade >= 18) { // if simples
    echo "Você é maior de idade.";
}
echo "<br>";
$num = 5;
if ($num % 2 == 0){
    echo "Número par";
} else {
    echo "Número impar";
}
echo "<br>";

$nota = 5.9;
if ($nota >= 9) { // if composto
    echo "Exelente!!";
} elseif ($nota >= 6) {
    echo "Aprovado";
} else {
    echo "Reprovado";
}
echo "<br>";

#Ex 4 
$dia = 1;
switch ($dia) { // switch
    case 1: echo "Domingo"; break;
    case 2: echo "Segunda"; break;
    case 3: echo "Terça"; break;
    default: echo "Outro dia da semana"; break;
}
echo "<br>";

#Ex 5 
$login = false; 
echo $login ? "Bem-vindo!" : "Acesso negado!"; // ?:(ternário) // if ternário
echo "<br>";

// É o mesmo que:
/*

if ($login == true) {
    echo  "Bem-vindo!";
} else {
    echo "Acesso negado!";
}

*/
echo "<br>";

#Ex 6
/*
if (isset($login)){ // se a variável "$login" tiver um valor atribuído, então é true 
    echo "A variável login tem um valor atribuído";
}
// O valor também pode ser negado:
if (!isset($login)){ // A variável pode ser negada com "!" antes do 'isset'
    echo "A variável login NÃO tem um valor atribuído";
}
*/
$nome = $_GET['nome'] ?? "Visitante"; // coalecência (Operador de coalecência "??")
/*
$nome = $_GET['nome'] ?? null; // nulo
$nome = $_GET['nome'] ?? ""; // em branco  
*/
echo "Olá, $nome!";
echo "<br>";

// Laços de repetição - while, do...while, for, foreach, controle de laço (break, continue)
echo "<br> Laços de repetição - while, do...while, for, foreach <br> ";

#Ex 1 (do)
$i = 1;
while ($i <= 5){ // While eu uso quando eu não conheço os limites das interações e eu não quero executar nada antes de fazer qualquer teste
    echo "Contando: $i <br>";
    $i++;
}
echo "<br>";

#Ex 2 (do...while)
$j = 1;
do {
    echo "Número $j  ";
    $j++;
} while($j <= 3);
echo "<br>";

#Ex 3 (for)
for ($k = 1; $k <= 5; $k++){
    echo "Valor: $k <br>";
}
#Ex 4 (foreach)
$frutas = ["Maça","Pera","Banana","Laranja"]; // simples
// $frutas = ["tipo"=>"Maça","Pera","Banana","Laranja"]; // associativa (2 tipos de categorias dentro da mesma matriz)
$frutas = ["Nome"=>"Maça","Tipo"=>"Gala","Validade"=>"out/2025"]; // assossiativa (2 tipos de categorias dentro da mesma matriz)
// print_r($frutas); // mostra tudo de uma vez
foreach ($frutas as $chave => $valor) { // $chave = 'tipo' | $valor = 'maça')
    echo "$chave: $valor <br>";
}
echo "<br>";
$carros = ["Fusca", "Gol","Corsa","Kombi"]; // simples
foreach ($carros as $carro) {
    echo "Carro: $carro <br>";
}
echo "<br>";

#Ex 5 (break e continue)
for ($k=1; $k <= 5 ; $k++) { 
    if($k == 2) continue; // pula o 2
    if($k == 4) break; // para no 4
    echo "Valor: $k <br>";
}

// Matrizes no PHP
/*

Arrayes indexados / Arrays associativos / Arrays multidimensionais
Funções úteis para arrays (count, array_push, array_keys, sort, rsort)
*/
echo "<br> Matrizes <br>";
echo "<br>";

#Ex 1 (Matriz simples)
// $numeros = []; // matriz vazia
$numeros = [10, 20, 30];
echo $numeros[0];
echo "<br>";


#Ex 2 (Matriz Assiciativa) | 
$veiculos = ['tipo'=>"Carro",'Marca'=>"Corolla", 'Ano'=>2022]; // Não faz diferença aspas simples ou dupla
echo $veiculos['Marca']; // Chave passa a ser representada por um nome ao invés do número
echo "<br>";
/*
// Obs.: Uma tabela de banco de dados retorna uma matiz associativa
Ex:
*/
$tabela = ['id'=>1,'nome'=>'Marcell'];
// echo $tabela['id'];
foreach ($tabela as $titulo => $dado) {
    echo "$titulo: $dado <br>";
}
echo "<br>";

#Ex 3 (Matiz multidimensional)
$alunos = [
    ['nome'=>'Ana','idade'=>'19'],
    ['nome'=>'Maria','idade'=>'18'],
    ['nome'=>'José','idade'=>'21']
];
echo $alunos[0]['nome']." ". $alunos[2]['idade']; // nome da matriz 0 com a idade da matriz 2.
echo "<br>";

#Ex 4 - (Usando 'count' na matriz)
$cores = ["Azul", "Verde", "Amarelo"];
echo "Quantidade de cores: ".count($cores);
echo "<br>";
#Ex 5 (Inserindo com array_push)
$animais = ['Cachorro', 'Gato'];
array_push($animais, "Pássaro"); // inserindo no final da matriz via push
print_r($animais);
echo "<br>";

#Ex 6 (Ordenando o Array)
$valores = [5,3,9,1,7,4];
sort($valores); // muda a orde do array
print_r($valores);
echo "<br>";
?>
<!-- <form action="estruturas.php" method="get">
    <input type="text" name="nome" id="" placeholder="Digite o nome">
    <button type="submit">Entrar</button>
</form> -->