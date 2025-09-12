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
if ($digitarNumero == null) {
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
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media >= 7) {
    echo "Nota: $media.";
    echo "<br>";
    echo "Aprovado!";
} elseif ($media >= 5) {
    echo "Nota: $media.";
    echo "<br>";
    echo "Recuperação!";
} elseif ($media > 1) {
    echo "Nota: $media.";
    echo "<br>";
    echo "Reprovado!";
} else {
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
if (isset($_GET['numero'])) {
    $numero = $_GET['numero'];

    for ($i = 1; $i <= $numero; $i++) {
        echo "<br> Número: $i";
    }
}
echo "<br>";
echo "<br>";

// 7. Crie um laço que imprima todos os números pares de 0 a 20.
echo "7)";
echo "<br> Valores de 0 a 20:";
echo "<br>";
$valor20 = 20;
for ($i = 0; $i <= $valor20; $i++) {
    echo " $i,";
}
echo "<br>";
echo "<br>";

// 8. Peça ao usuário para digitar uma senha. Use um laço while para continuar pedindo a senha até que a senha correta seja inserida.
# Fiz com get para não ter que ficar excluíndo os cookies toda vez;
echo "8)";
echo "<br> Senha: 1234<br>";
# Esse foi o resultado mais próximo que consegui para fazer um while:
?>
<form method="get">
    <input type="password" name="password">
    <input type="submit" value="Ok!">
</form>
<?php
$senhaCorreta = 1234;
$limit = 0;

if (isset($_GET['password'])) {
    if ($_GET['password'] == $senhaCorreta) {
        echo "Acesso liberado!";
        $limit = 3;
    } else {
        echo "Digite a senha corretamente.";
        if (isset($_GET['password'])) {
            while ($_GET['password'] != $senhaCorreta && $limit < 3) {
                $limit++;
                echo "<br> Tentativa: " . $limit . ".";
            }
        }
    }
}

echo "<br>";
echo "<br>";

// 9. Crie um programa que some todos os números de 1 a 100 usando um laço for.
echo "9)";
echo "<br> Somando os números de 1 a 100.";

// echo "Cada resultado é a soma com o anterior. <br>";
$v1 = 1;
$v2 = 1;
$v3 = 1;
for ($i = 1; $i <= 100; $i++) {
    // echo "<br>";
    // echo $v3.", ";
    $v3 = $v1 + $v2;
    $v1 = $v2;
    $v2 = $v3;
}
echo "<br> Soma total de 1 a 100: " . $v3;

echo "<br>";
echo "<br>";

// 10. Crie um array com 5 nomes e imprima cada um deles usando um laço de repetição (foreach).
echo "10)";
echo "<br> Array com 5 nomes:";

$nomes5 = ['Nome1', 'Nome2', 'Nome3', 'Nome4', 'Nome5'];
foreach ($nomes5 as $nome) {
    echo "<br>Nome: " . $nome;
}
echo "<br>";
echo "<br>";

// 11. Crie um programa que receba a temperatura em Celsius e converta para Fahrenheit, imprimindo o resultado. Use a fórmula: F = (C * 9/5) + 32.
echo "11)";
echo "<br> Celsius para Fahrenheit:";
echo "<br> Graus (Cª):";
?>
<form method="get">
    <input type="number" name="graus">
    <input type="submit" value="Ok!">
</form>
<?php
$c = isset($_GET['graus']);
$f = ($c * 9 / 5) + 32;
if ($c >= -100) {
    echo "$f" . "ºF.";
}

echo "<br>";
echo "<br>";

// 12. Crie um programa que verifique se uma string fornecida pelo usuário é um palíndromo (lê-se da mesma forma de trás para frente).
echo "12)";
echo "<br> string reverso: strrev():";
echo "<br> Varificador de palíndromo:";
?>
<form method="get">
    <input type="text" name="palavra" placeholder="Digite uma palavra">
    <input type="submit" value="Ok!">
</form>
<?php

# Se tirar o 'isset' fica com mensagem de erro, 
# se deixar o 'isset', o valor/texto digitado formulário não é reconhecido.
// $palavra=isset($_GET['palavra']);
$palavra = $_GET['palavra'];
$palavraFormatada = strtolower(trim($palavra));
$palavraReversa = strrev(strtolower(trim($palavraFormatada)));
if (isset($palavra)) {
    if ($palavraFormatada == $palavraReversa) {
        echo "<br>$palavra é um palíndromo!";
    } else {
        echo "<br>$palavra NÃO é um palíndromo!";
    }
}

echo "<br>";
echo "<br>";

// 13. Crie um programa que encontre o maior e o menor valor em um array de inteiros.
echo "13)";
echo "<br> maior e o menor valor em um array de inteiros:<br>";

?>
<form method="get">
    <input type="number" name="valor1" placeholder="Valor 1" required>
    <input type="number" name="valor2" placeholder="Valor 2" required>
    <input type="submit" value="Ok!">
</form>
<?php
$valor1 = isset($_GET['valor1']);
$valor2 = isset($_GET['valor2']);

# fiz o 'echo' puxando direto os valores porque estava dando muito bug 
# pegando direto as variávies ($valor1, $valor2)
if (isset($_GET['valor1'])) {
    if ($_GET['valor1'] > $_GET['valor2']) {
        echo "Valor maior: " . $_GET['valor1'];
        echo "Valor menor: " . $_GET['valor2'];
    } else {
        echo "Valor maior: " . $_GET['valor2'];
        echo "Valor menor: " . $_GET['valor1'];
    }
}
echo "<br>";
echo "<br>";

// 14. Use um laço do-while para pedir um número entre 1 e 10. Continue pedindo até que o usuário digite um valor válido.

# Esta tarefa (14) e a tarefa 8 foi feita para console e não para web.
// Vou tentar simular com if/else.
echo "14)";
echo "<br> Digite o número correto 1 e 10: <br>";
?>
<form method="get">
    <input type="text" name="nmrs">
    <input type="submit" value="Ok!" placeholder="10">
</form>
<?php
if (isset($_GET['nmrs'])) {
    if ($_GET['nmrs'] == 8) {
        echo "Acertou!";
    } else {
        echo "Errou! Tente novamente.";
    }
}

echo "<br>";
echo "<br>";


// 15. Crie um jogo de adivinhação. O script "escolhe" um número entre 1 e 100, e o usuário tenta adivinhar, recebendo dicas de "maior" ou "menor" a cada tentativa.
echo "15)";
echo "<br> Digite o número correto 1 e 100: <br>";
?>
<form method="get">
    <input type="text" name="nmrs2">
    <input type="submit" value="Ok!" placeholder="10">
</form>
<?php
$nmrCerto = 20;

# Se tirar o 'isset' fica com mensagem de erro, 
# se deixar o 'isset', o valor/texto digitado formulário não é reconhecido.
if ($_GET['nmrs2'] > 0 && $_GET['nmrs2'] < 101) {
    if ($_GET['nmrs2'] == $nmrCerto) {
        echo "Acertou!";
    } elseif ($_GET['nmrs2'] > $nmrCerto) {
        echo "Errou! O número correto é menor.";
    } else {
        echo "Errou! O número correto é maior.";
    }
} else {
    echo "Por favor, digite um número entre 0 e 100.";
}
echo "<br>";
echo "<br>";

// 16. Crie um programa que imprima a tabuada de um número fornecido pelo usuário.
echo "16)";
echo "<br> Tabuada: <br>";
?>
<form method="get">
    <input type="text" name="tabuada">
    <input type="submit" value="Ok!">
</form>
<?php

# Se tirar o 'isset' fica com mensagem de erro, 
# se deixar o 'isset', o valor/texto digitado formulário não é reconhecido.
$tabuada = $_GET['tabuada'];
if (isset($_GET['tabuada'])) {
    for ($i = 1; $i <= 10; $i++) {
        echo "<br>$i x $tabuada = " . $i * $tabuada;
    }
} else {
    echo "Por favor, digite um número para ser calculado.";
}
echo "<br>";
echo "<br>";

// 17. Declare um array com 10 inteiros e preencha-o com valores aleatórios. Em seguida, use um laço para imprimir a soma de todos os elementos.
echo "17)";
echo "<br> Array aleatório: <br>";

$randomArray = ['1', '10', '6', '7', '2', '8', '3', '4', '5', '9'];
foreach ($randomArray as $value) {
    echo "$value, ";
}
echo "<br>";
echo "<br>";

// 18. Crie um laço de repetição aninhado para imprimir um padrão de asteriscos em formato de pirâmide.
echo "18)";
echo "<br> Pirâmide de asteíscos: <br> (INCOMPLETO) <br> ";

echo "<br>";
echo "<br>";

// 19. Crie um programa que conte quantas vogais existem em uma string fornecida pelo usuário.
echo "19)";
echo "<br> Calculo de vogais:<br>(INCOMPLETO)<br> ";
?>
<form method="get">
    <input type="text" name="texto">
    <input type="submit" value="Ok!">
</form>
<?php

if (isset($_GET['texto'])) {
    $qtdVogais = 0;
    $vogais = ['a', 'e', 'i', 'o', 'u'];
    $textoo = strtolower($_GET['texto']);
    for ($i = 0; $i < strlen(trim($textoo)); $i++) { // strlen = quantidade de letras do texto.
        $letra = $textoo[$i];
        if (in_array($letra, $vogais)) { // verifica se a letra que eu busco do array '$vogais' está no texto que do número equivalente ao $i.
            $qtdVogais++;
        }
    }
}

echo "Palavra digitada: '" . ucfirst(trim($textoo)) . "'. Quantidade de vogais: " . $qtdVogais . ".";
echo "<br>";
echo "<br>";


// Falta completar =========================================
// Falta completar =========================================
// Falta completar =========================================
// 20. Peça ao usuário que digite vários nomes. Armazene-os em um array e, quando o usuário digitar "fim", imprima a lista completa de nomes.
echo "20)";
echo "<br> Lista de nomes:<br>(INCOMPLETO)<br> ";
?>
<form method="post">
    <input type="text" name="nomes">
    <input type="submit" value="Ok!">
    <input type="submit" value="Exibir Nomes" name="exibir">
</form>
<?php

if (isset($_POST['nomes'])) {
    $nomes = [];
    $nomes[] = ['nome'=>$_POST['nomes']];
    if (isset($_POST['exibir'])) {
        foreach ($nomes as $nome) {
            echo "<br>" . $nome['nome'];
        }
    }
}

echo "<br>";
echo "<br>";
?>