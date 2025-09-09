<?php
 


#################Simulando Server #####################
/*

Para abrir o .php:
 
Iniciar o Apache no Xampp
Mover a pasta que está o index.php para:
C:\xampp\htdocs
 
(No navegador) usar o iplocal/nome-pasta-com-index.php


*/

//comentário
/* comentário de bloco */
# comentário de linha
 
/*
Compreender o o que é o PHP e para que serve.
Configurar o ambiente básico para execução de scripts PHP
Escrever os primeiros programas utilizando PHP.
 
PHP é uma linguagem de programação voltada principalmente para DEV web
Server-side -roda(é executada) do lado do servidor
Funciona em conjunto com HTML, CSS, JS, e integra com Banco de Dados, Mysql, postegreSQL, SQL Server,(PDO) etc
Nasceu em  1994;
Estrutura pra funcionar (Server Linux, WAPP, XAMPP,Laragon) - Ambiente de desenvolvimento
 
*/
 
// echo "Olá TDS01, seus Lindos!"; // Cosole.WriteLine() no C#
 
 
// declaração de variáveis no PHP
// $
  
$A123;
$x = 1.6; // = (atribuição) / == (comparação) / === (comparação absoluta de tipo e valor)
$X = 2; // PHP é case sensitive (faz distinção entre maiúscula e minúsculo)
 
echo $x.$X; // . serve para concatenar string
 
$escola = "Senac";
$numero = 8266;
$valorOnibus = 2.50;
$portaoAberto = true;
echo "Estudo no $escola 
NO $numero da Av Itaquera,
e pago R$ $valorOnibus na passagem. Aberto: $portaoAberto ";

// variáveis globais no PHP
print_r($_SESSION); //print_r() imprime uma matriz

// contantes no PHP
define("TESTE", "Conteudo de uma constante");
define("DB_NAME", "ComercialDB01");
define("DB_USER", "root");
define("DB_PASSWD", "1234");
define("DB_SERVER", "10.91.47.146");

echo DB_NAME. " - " .DB_USER;

// operadores no PHP
echo "<br>";

$a = 5;
$b = 7;
echo -$a."<br>"; // multiplica por -1
echo -$b."<br>";

echo "$a + $b = ".$a+$b."<br>"; // adição
echo "$a - $b = ".$a-$b."<br>"; // subtração
echo "$a x $b = ".$a*$b."<br>"; // multiplicação
echo "$a / $b = ".$a/$b."<br>"; // divisão
echo "$a % $b = ".$a%$b."<br>"; // resto da divisão (mod)
echo "$a ** $b = ".$a**$b."<br>"; // exponenciação

echo "$a com incremento de 1 = ".++$a."<br>"; // incremento de A (pré incremento)
echo "$b com decremento de 1 = ".--$b."<br>"; // decremento de B (pré decremento)
echo "b - $b / a - $a <br>";

// Não existe:
// echo "$a com incremento de 1 = ".$a++."<br>"; // Não existe pós incremento
// echo "$b com decremento de 1 = ".--$b."<br>"; // Não existe pós decremento

?>




 