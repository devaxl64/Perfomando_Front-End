<?php 
// funções para strings Funções nativas do PHP para strings

$nomeProduto = "  notebook dell Inspirion   ";
echo "Nome oridgnal: '$nomeProduto'  <br>";

// ucfirst:
// $nomeFormatadoUcFirst = ucfirst($nomeProduto); // o primeiro caractere é um espaço de "$nomeProduto", por isso não está funcionando.

// trim:
$nomeFormatadoTrim = trim($nomeProduto); // trim remove espaços do começo e do fim.
echo "Nome formatado: '$nomeFormatadoTrim' <br>";

// trim e ucfirst
$nomeFormatado = ucfirst(trim($nomeProduto)); // trim remove espaços do começo e do fim.
echo "Nome formatado: '$nomeFormatado' <br>";

// ucwords:
$nomeFormatado = ucwords(trim($nomeProduto)); // ucwords: caixa alta nos primeiros caracteres de cada palavra.
echo "Nome formatado: '$nomeFormatado' <br>";

// strlen:
echo "A string possui ".strlen(trim($nomeProduto))." carateres. <br>"; // obtem o comprimento da string // trim remove qualquer problema de espaçamento.

// strtolower:
$email = "mARcElL@eMaiL.CoM       ";
echo "Email digitado: ".strtolower(trim($email))."<br>" ; // tranforma em caixa baixa.

// substr:
$frase = " O Senac Itaquera é bem legal. <br>";
// echo "Nós estamos no: ".substr(trim($frase), 2)."<br>"; // Conta a partir do segundo caractere (2) A partir do segundo caractere (2), pega (5) letras // retorna uma parte de uma string a partir do número da posição (contando espaços). // Não esquecer que conta a partir do "O" por conta do 'trim'.
echo "Nós estamos no: ".substr(trim($frase), 2, 5)."<br>"; // A partir do segundo caractere (2)

// slug
$slug = strtolower(str_replace(" ", "-", trim($nomeProduto))); // espaço/palavra a ser substituída, subistituição, variavel/frase que será substituída.
echo $slug. "<br>"; // Substitui o que for espaço por uma outra string.

// explode
// divide uma string com base em outra string
$explodido = explode(" ",trim($frase)); // espaço/palavra a ser substituída, subistituição, quantidade de palavras que serão adicionadas.
// $explodido = explode(" ",trim($frase), 3); 
print_r($explodido);
echo "<br>";

?>