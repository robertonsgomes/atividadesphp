<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> <?php 
     
     /*Exercícios com switch:
     1|Faça um programa que determine o dia da semana
O programa deve receber um número de 1 a 7, representando um dia da semana, 
e imprimir o nome do dia correspondente (por exemplo, 1 = "Domingo", 2 = 
"Segunda-feira", etc.). */

     $semana = 4;

     switch ($semana){
        case 1:
        echo "Hoje é Segunda-feira.";
        break;
        case 2:
        echo "Hoje é terça-feira.";
        break;
        case 3:
        echo "Hoje é Quarta-feira.";
        break;
        case 4:
        echo "Hoje é Quinta-feira.";
        break;
        case 5:
        echo "Hoje é Sexta-feira.";
        break;
        case 6:
        echo "Hoje é Sabado.";
        break;
        case 7:
        echo "Hoje é Domingo.";
        break;
     }
     echo "<br><br>";

     /* 2| Faça um programa que exiba a categoria de um estudante de acordo com sua 
nota
O programa deve receber a nota de um estudante e, com base no valor, exibir a 
categoria correspondente:
o 0 a 4.9: "Reprovado"
o 5 a 6.9: "Recuperação"
o 7 a 10: "Aprovado"
*/

     $nota = 7.9;

     switch(true){
        case($nota <=4.9):
            echo "Aluno reprovado.";
            break;
            case($nota >=5 && $nota <=6.9):
            echo "Aluno em recuperação";
            break;
            case($nota >=7 && $nota<=10):
            echo "Aluno aprovado";
            break;
     }
echo"<br><br>";

/*Faça um programa que calcule o preço final de um produto com base em um 
código de desconto
O programa deve receber um código de desconto (de 1 a 3) e aplicar o desconto 
correspondente ao preço do produto.
o Código 1: 10% de desconto
o Código 2: 20% de desconto
o Código 3: 30% de desconto
o Se o código for inválido, deve mostrar uma mensagem de erro.
 */

     $desconto = "dezembro40";

     switch ($desconto){
        case "Dezembro10":
            echo "Vocé ganhou 10% de desconto.";
            break;
            case "dezembro20":
            echo "Vocé ganhou 20% de desconto.";
            break;
            case "dezembro30":
            echo "Vocé ganhou 30% de desconto.";
            break;
            default:
            echo "Codígo de desconto invalido";
        
             }
             echo"<br><br>";
/*Exercícios com arrays:
1. Faça um programa que crie um array com os nomes de 5 amigos
O programa deve permitir que o usuário adicione 5 nomes ao array e, em seguida, 
imprimir todos os nomes.*/ 
    $amigos = ["Amanda", "Bruce", "Carlos", "Ygor","Junior"];
    echo "Amigos";
    print_r($amigos);

/*2. Faça um programa que remova o segundo elemento de um array
O programa deve criar um array com 5 elementos e remover o primeiro elemento 
do array. Após isso, o programa deve exibir o array atualizado.*/
echo"<br><br>";

unset($amigos[1]);

print_r($amigos); 
echo "<br><br>";

/*3. Faça um programa que conte quantos números pares existem em um array
O programa deve criar um array com 10 números aleatórios e contar quantos 
números pares estão presentes no array. O resultado deve ser impresso na tela */

$pares = [2, 5 , 8, 86, 43, 52, 66, 76,77,99];

$quantidadePares = 0;
foreach ($pares as $pares2) {
    if ($pares2 % 2 == 0) {
        $quantidadePares++;
    }
}

echo "numeros aleatoris";
print_r($pares);
echo "<br>Quantidades de numeros pares:" . $quantidadePares;
echo "<br><br>";

/*4. Faça um programa que combine dois arrays
O programa deve criar dois arrays, um contendo os números 1 a 5 e outro 
contendo os números 6 a 10. O programa deve juntar os dois arrays e imprimir o 
array final. */

$array01 = [1, 2, 3, 4, 5,];
$array02 = [6, 7, 8, 9, 10];
    
$mesclaarray = array_merge($array01, $array02);
echo "Array mesclado:<br>";
print_r($mesclaarray);
    
    
    ?>
</body>
</html>