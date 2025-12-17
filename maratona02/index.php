<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> <?php 
  
  
      echo "<h2>Primeiro Exércicio 1</h1>";
 
     $numero = 10;
     if ($numero > 0) {
      echo "O número é positivo.";
     }
     elseif ($numero < 0) {
     echo "O número é negativo. ";
     } else {
      echo "O número é zero. ";
     }
 
    echo "<br>";
 
    // função para classificar a nota
 
     echo "<h2>Exércicio 2</h1>";
 
     echo "<br>";
 
      $numero2 = 8;
 
      if ($numero2 >= 0 && $numero2 <= 4.9) {
        echo "Reprovado.";
      } elseif ($numero2 >= 5 && $numero2 <=6.9) {
        echo "Recuperação";
      } elseif ($numero2 >=7 && $numero2 <= 8.9) {
        echo "Aprovado";
      } elseif ($numero2 >=9 && $numero2 <= 10 ) {
        echo "Aprovado com Distinção";
      } else
          echo "Opição invalida";
 
      // funçao para ver se esta autorizado a votar
       
      echo "<h2>Exércicio 3</h1>";
 
     $idade = 17;
     
     if ($idade >= 0 && $idade >=15) {
      echo "Não pode votar";
     } elseif ($idade >=16 && $idade <= 17) {
      echo "Pode votar mais não é obrigatorio ";
     } elseif ($idade >=18 && $idade <= 70) {
      echo "Obrigatorio votar";
     }else
      echo "opição invalida";
       
     // funçao para indentificar se é par ou ímpar
 
    echo "<h2>Exércicio 4</h1>";
 
    $numero3 = 10;
 
    if ($numero3 %2 == 0) {
      echo "O número é par";
    }else{
      echo "O número é ímpar";
    }
 
    echo "<br>";
 
 
    //funçao para calcular o valor do ingreso de acorodo com o horario
 
 
    echo "<br>";
 
 
    echo "<h2>Exércicio 5</h1>";
 
     $horario = 12.00;
 
      if ($horario >= 10.00 && $horario <= 12.00) {
        echo "preço ingreço: R$ 10,00.";
      } elseif ($horario >= 12.01 && $horario <= 17.00) {
        echo "Preço ingreço: 20,00";
      } elseif ($horario >= 17.01 && $horario <= 22.00) {
        echo "preço ingreço: 30,00";
      } else
          echo "cinema fechado";














echo "<h1> Exercícios Switch</h1>";


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
            echo"Codígo de desconto invalido";
        
             }
             echo"<br><br>";

             echo "<h1> Exercícios arrays</h1>";
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