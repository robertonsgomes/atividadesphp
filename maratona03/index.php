<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atividade3</title>
</head>
<body>
    <?php 
    /*Crie um programa que imprima a tabuada de multiplicação do número 8 vezes 1
até 10: exemplo "8 x 1 = 8" "8 x 2 = 16"... */
 echo "<h1>Tabuada do 8<br></h1>";
for ($n = 1; $n <= 10 ; $n ++){
$resultado = 8 * $n;
echo "8 x $n = $resultado<br>";
}
    echo "<br><br>";
    /* Crie um programa que receba 10 números inteiros e calcule a média desses
números. Utilize o laço for para ler os números e calcular a média.*/ 

$soma = 0;
$nums = [];

for ($i = 1; $i <= 10; $i++){
    $num = rand(1, 100);
    $nums[] = $num;
    $soma += $num;
}

echo " Os 10 numeros derados são: " .implode(", " , $nums) . "<br>";

$media = $soma / 10;

echo "A média dos 10 números é:" . $media ."<br>";

/* Crie um programa que tenha um array de nomes de 10 peças de carro e imprima
todos os nomes em uma lista.*/ 
echo "<br><br>";

$pecas =["Pastilha de freio", "Amortecedor", "Biela,Vela de ignição", "Filtro de ar", "Radiador", "Alternador", "Bomba de combustível", "Embreagem", "Bateria" ];
foreach ($pecas as $peca) {
    echo $peca . "<br>";  
}echo "<br><br>";


/* Crie um programa que tenha um array associativo com dados de um gato que
chegou no petshop, como chave e seu valor. Utilize o foreach para imprimir os
nomes dos dados do gato */

$gatos =[
    "João " => "bixana",
    "Maria" => " pretinha",
    "Pedro" => "skay"
];

foreach($gatos as $donos => $gatos) {
    echo "Dono $donos gato $gatos . <br>";
}
 
echo "<br><br>";

/* Crie uma função que receba o valor de uma compra e calcule o desconto de 15%.
A função deve retornar o valor com o desconto aplicado. */

function calculoDesconto($valorcompra) {
    $desconto = $valorcompra * 0.15;
    $valorFinal = $valorcompra - $desconto;
    return $valorFinal;
}


$blusa =89;
$calca = 139; 

echo "Valor do produto R$$blusa desconto gerado: R$" . calculoDesconto($blusa); echo"<br>";
echo "Valor do produto R$$calca desconto gerado: R$" . calculoDesconto($calca);  echo"<br>";

echo "<Br><br>";


/* Crie uma função que receba um número e determine se ele é primo ou não. */
 
    function ehPrimo($primo) {
    if ($primo <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($primo); $i++) {
        if ($primo % $i == 0) {
            return false;
        }
    }

    return true;
}


$valor = 17;

if (ehPrimo($valor)) {
    echo "$valor é um número primo.";
} else {
    echo "$valor não é um número primo.";
}
 echo "<br>";

$valor = 23;

if (ehPrimo($valor)) {
    echo "$valor é um número primo.";
} else {
    echo "$valor não é um número primo.";
}
 
 
 
 
 ?>
    
</body>
</html>