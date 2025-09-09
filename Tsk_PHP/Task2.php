<?php

#Exercícios de Lógica de Programação em PHP

// 1. Declare uma variável inteira (ex: $idade) e imprima seu valor na tela.
echo "1) <br>";
$idade = 30;
echo "Idade: $idade";
echo "<br>";
echo "<br>";

// 2. Declare duas variáveis do tipo string (ex: $nome e $sobrenome) e concatene-as, imprimindo o resultado.
echo "2) <br>";
$nome = "Marcell";
$sobrenome = "Castro";
echo "Nome: $nome, <br>Sobrenome: $sobrenome.";

echo "<br>";
echo "<br>";

// 3. Crie um script que solicite a idade do usuário e, usando uma estrutura de decisão (if), informe se ele é maior de idade (idade >= 18).
echo "3) <br>";
$digitarNome = $_GET['digitarNome'] ?? "Como você se chama?";
echo "Olá, $digitarNome";
echo "<br>";
?>
<form action="Task2.php" method="get">
    <input type="text" name="digitarNome" id="" placeholder="Digite seu nome">
    <button type="submit">Ok!</button>
</form>
<?php
echo "<br>";
echo "<br>";

// 4. Peça ao usuário um número e use a estrutura if/else para verificar se ele é par ou ímpar.
echo "4)";
$digitarNumero = 0;
$digitarNumero = $_GET['digitarNumero'] ?? null;
?>
<form action="Task2.php" method="get">
    <input type="text" name="digitarNumero" id="" placeholder="Digite um número">
    <button type="submit">Ok!</button>
</form>
<?php
if ($digitarNumero == null){
    echo "Digite um número acima, por favor!";
} elseif ($digitarNumero % 2 == 0) {
    echo "Este número é PAR!";
} elseif ($digitarNumero % 2 != 0) {
    echo "Este número é IMPAR!";
}
echo "<br>";
echo "<br>";

// 5. Crie um programa que receba três notas de um aluno e calcule a média. Use if/elseif/else para imprimir "Aprovado" (média >= 7), "Recuperação" (média >= 5) ou "Reprovado".
echo "5)";
$nota1 = $_GET['nota1'] ?? null;
$nota2 = $_GET['nota2'] ?? null;
$nota3 = $_GET['nota3'] ?? null;
?>
<form action="Task2.php" method="get">
    <input type="text" name="nota1" id="" placeholder="Digite um número" required>
    <input type="text" name="nota2" id="" placeholder="Digite um número" required>
    <input type="text" name="nota3" id="" placeholder="Digite um número" required>
    <button type="submit">Ok!</button>
</form>
<?php
$media = ($nota1+$nota2+$nota3)/3;

if ($media >= 7){
    echo "Nota: $media.";
    echo "<br>";
    echo "Aprovado!";
} elseif ($media >= 5) {
    echo "Nota: $media.";
    echo "<br>";
    echo "Recuperação!";
} elseif ($media > 1){
    echo "Nota: $media.";
    echo "<br>";
    echo "Reprovado!";
} 
else{ 
    echo "Preecha todos os campos com notas acima, por favor.";
}
echo "<br>";
echo "<br>";

// 6. Solicite um número e use um laço de repetição (for ou while) para imprimir todos os números de 1 até o número informado.
echo "6)";
?>
<form method="get">
    Digite um número abaixo:
    <br>
    <input type="text" name="numero">
    <input type="submit" value="Ok!">
</form>
<?php 
if(isset($_GET['numero'])){
    $numero = $_GET['numero'];

    for ($i=1; $i <= $numero; $i++) { 
        echo "<br> Número: $i";
    }
}
echo "<br>";
echo "<br>";

// 7. Crie um laço que imprima todos os números pares de 0 a 20.
echo "7)";
echo "<br> Valores de 0 a 20: <br>";
$valor20 = 20;
for ($i=0; $i <= $valor20; $i++) { 
        echo " $i,";
    }
echo "<br>";
echo "<br>";

// 8. Peça ao usuário para digitar uma senha. Use um laço while para continuar pedindo a senha até que a senha correta seja inserida.
# Fiz com get para não ter que ficar excluíndo os cookies toda vez;

#Ainda não consegui resolver::---------------------
echo "8)";
echo "<br> Senha: 1234<br>";
?>
<form method="get">
    <input type="password" name="password">
    <input type="submit" value="Ok!">
</form>
<?php 
$senhaCorreta = 1234;
$limit = 1;
if ($senhaCorreta == isset($_GET['password'])) {
    echo "Acesso liberado!";
} else {
    do {
        ?>
        <form method="get">
            <input type="password" name="password">
            <input type="submit" value="Ok!">
        </form>
        <?php 
        
    } while (isset($_GET['password']) == $senhaCorreta);
}
echo "<br>";
echo "<br>";

// 9. Crie um programa que some todos os números de 1 a 100 usando um laço for.

// 10. Crie um array com 5 nomes e imprima cada um deles usando um laço de repetição (foreach).

// 11. Crie um programa que receba a temperatura em Celsius e converta para Fahrenheit, imprimindo o resultado. Use a fórmula: F = (C * 9/5) + 32.

// 12. Crie um programa que verifique se uma string fornecida pelo usuário é um palíndromo (lê-se da mesma forma de trás para frente).

// 13. Crie um programa que encontre o maior e o menor valor em um array de inteiros.

// 14. Use um laço do-while para pedir um número entre 1 e 10. Continue pedindo até que o usuário digite um valor válido.

// 15. Crie um jogo de adivinhação. O script "escolhe" um número entre 1 e 100, e o usuário tenta adivinhar, recebendo dicas de "maior" ou "menor" a cada tentativa.

// 16. Crie um programa que imprima a tabuada de um número fornecido pelo usuário.

// 17. Declare um array com 10 inteiros e preencha-o com valores aleatórios. Em seguida, use um laço para imprimir a soma de todos os elementos.

// 18. Crie um laço de repetição aninhado para imprimir um padrão de asteriscos em formato de pirâmide.

// 19. Crie um programa que conte quantas vogais existem em uma string fornecida pelo usuário.

// 20. Peça ao usuário que digite vários nomes. Armazene-os em um array e, quando o usuário digitar "fim", imprima a lista completa de nomes.


?>

