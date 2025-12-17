<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona 01</title>
</head>
<body>
    <h2>
    <?php 
        $nome = "João!";
        $saudacao = "Bem-vindo ao nosso site";

        echo "Olá, $nome $saudacao";

    
        $celsius°C = 25; 
        $fahrenheit°F = ($celsius°C * 1.8) + 32;
        echo "<br> <br>";
        echo "A temperatura de $celsius°C é igual a $fahrenheit°F.";

         echo "<br> <br>";

         $valorEmprestimo = 2000;
         $taxaJuros = 0.15;
         $numParcelas = 10;

         $valorParcela  = $valorEmprestimo *(1+ $taxaJuros) / $numParcelas;

         echo "O valor do $valorEmprestimo mais $taxaJuros divido por $numParcelas"; 
         echo "<br> <br>";

          $valorReal = 25;
          $valorDolar = 5.32;
          $valorConvertido= ($valorReal / $valorDolar);

          echo(round(5.32) . "<br>");

    
          // atividade 3
 echo "<br><br>";
    $valorEmprestimo = 15000;  
    $taxaJuros = 8.08;
$numeroParcelas = 12;
 
$taxa = $taxaJuros / 100;
 
 
$parcela = $valorEmprestimo *
          ( ($taxa * pow(1 + $taxa, $numeroParcelas)) /
            (pow(1 + $taxa, $numeroParcelas) - 1) );
 
echo "Valor do empréstimo: R$ " . round($valorEmprestimo, 2) . "<br>";
echo "Taxa de juros: " . $taxaJuros . "% ao mês<br>";
echo "Número de parcelas: " . $numeroParcelas . "<br>";
echo "Valor da parcela: R$ " . round($parcela, 2);
echo"<br><br>";  
 
//atividade 4
$valorReais = 500;        
$taxaCambio = 5.34;      
$valordolar = 500.00;
 
$valorDolares = $valorReais / $taxaCambio;
$valoremreais = $valordolar * $taxaCambio;
 
$valorDolares = round($valorDolares, 2);
 
 
echo "Valor em reais: R$ " . round($valorReais, 2) . "<br>";
echo "Taxa de câmbio: R$ " . round($taxaCambio, 2) . "<br><br>";
echo "Valor convertido: US$ " . round($valorDolares, 2) . "<br>";
 
 
echo "<br> Valor em dolar: R$ " . round($valordolar, 2) . "<br>";
echo "Taxa de câmbio: R$ " . round($taxaCambio, 2) . "<br><br>";
echo"Valor convertido: US$ " . round($valoremreais, 2);
    ?>
    </h2>
</body>
</html>