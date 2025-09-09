<?php 

// ------- Exercícios de Manipulação de Strings -------
// 1. Formatação de Usuário e Serviço:
// - Desenvolver um script que receba o nome de usuário e a descrição de um serviço.

// - O nome deve ser exibido corretamente formatado (primeira letra maiúscula de cada palavra).

// - A descrição deve ser tratada removendo espaços extras e convertida para caixa baixa.

// - Criar um slug único para cada item (ex.: manutencao-de-computadores).
echo "<h3>Manipulação de Strings:</h3> <br>"
?>
<form method="get">
    Nome <input type="text" name="username"> <br>
    Serviço <input type="text" name="servico"> <br>
    <input type="submit" value="Ok!"> <br>
</form>
<?php 
// $username = []
// $username = ['nome'=>$_GET['name']],['servico'=>$_GET['servico']];

    // echo "<br> Nome: ".$user['nome']." - Idade: ".$user['idade'];
// foreach ($username as $key => $func) {
//     echo "<br>".$key['name'].": ".$func['func']; 
// }
echo "<br>";
echo "<br>";

#Tenho que focar na string e não fazer o fomulário


// 2. Normalização de Dados para URL
// - Criar uma função que receba uma string qualquer e retorne uma versão “limpa” para ser usada em URLs.

// - Exemplo: "Câmera Fotográfica Profissional X-T100!" → "camera-fotografica-profissional-x-t100".

// 3. Aplicação de Máscaras
// - Criar uma função que aplique máscaras de CPF e CNPJ a valores recebidos de entrada.
// Exemplo: "12345678901" → "123.456.789-01".



// ------- Exercícios de Datas -------
// 1. Cadastro de Usuário com Expiração
// - Criar um script que registre a data de cadastro de um usuário.

// - O sistema deve calcular automaticamente a data de expiração em 30 dias.

// - Exibir a data de expiração e quantos dias faltam até vencer.

// 2. Controle de Mensalidades
// - Criar um programa que, a partir de uma data inicial, calcule os próximos 6 vencimentos mensais de um contrato de serviço.

// - Exibir as datas em formato brasileiro (dd/mm/yyyy).

// 3. Cálculo de Atraso
// - Desenvolver um script que receba a data de vencimento de um boleto.

// - O sistema deve comparar com a data atual e informar:
// --Se ainda está no prazo.
// --Se está atrasado, quantos dias de atraso existem.

// ------- Exercícios de Funções -------
// 1. Validação de E-mail
// - Criar uma função chamada validarEmail() que receba um e-mail e retorne:
// --true se for válido.
// --false caso contrário.

// 2. Gerar Código Único de Usuário
// - Criar uma função que receba o ID do usuário e gere um código único no formato:
// --USR202509-00012
// --Onde 202509 representa ano e mês atuais e 00012 é o ID com zeros à esquerda.

// 3. Conversão de Datas

// - Criar duas funções:
// --brParaSql("05/09/2025") → "2025-09-05".
// --sqlParaBr("2025-09-05") → "05/09/2025".

// 4. Gerar Token Seguro
// - Criar uma função que gere um token aleatório seguro de 32 caracteres, útil para autenticação de usuários.

?>