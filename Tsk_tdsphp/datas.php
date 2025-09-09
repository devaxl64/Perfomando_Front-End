<?php 
// Definindo timezone para: America/Sao_Paulo
date_default_timezone_set('America/Sao_Paulo');
/*
Funções da data (date, time, strtotime).
Classe DateTime e métodos (format, modify, diff).
Cálculo de prazos (exemplo: vencimento de serviços).
Conversão e formataçao (BR - padrão SQL).
*/

// Datas:
$dataHoje = new DateTime();
// echo "Hoje é: ".$dataHoje->format('D/M/Y').".<br>";
// echo "Hoje é: ".$dataHoje->format('d/m/y').".<br>";
// echo "Hoje é: ".$dataHoje->format('d/m/y H:I:S e').".<br>";
echo "Hoje é: ".$dataHoje->format('d/m/y h:i:s e').".<br>";

// Prazos
$prazo = new DateTime();
$diasEntrega = 12;
$prazo->modify("+{$diasEntrega} days");
echo "Prazo de entrega: ".$prazo->format('d/m/Y').". <br>";

// diferença entre datas:
$dataVencimento = new DateTime('2025-09-01');
$dataPagamento = new DateTime('2025-09-15');
$diasAtraso = $dataVencimento->diff($dataPagamento); // diff retorna um intervalo de datas.
// echo "O pagamento foi realizado com ". $diasAtraso->format('%a dias atrasado').".<br>";
// echo "O pagamento foi realizado com ". $diasAtraso->d." dias de atraso. <br>";
// echo "O pagamento foi realizado com ". $diasAtraso->m." meses de atraso. <br>";
// echo "O pagamento foi realizado com ". $diasAtraso->y." anos de atraso. <br>";
echo "O pagamento foi realizado com ". $diasAtraso->d." dias de atraso. <br>";
// print_r($diasAtraso)
?>