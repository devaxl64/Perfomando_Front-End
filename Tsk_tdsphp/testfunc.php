<?php 

include_once "functions.php"; // serve como 'using' (elemento de inclusão) (semelhante ao @import).
echo formatarPreco(100)."<br>";
echo formatarPreco(100.00 / 7)."<br>";
echo "<br>";

echo "Código do produto: " .gerarCodigo("PrOd", 78);
echo "<br>";

?>