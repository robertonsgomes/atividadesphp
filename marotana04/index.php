<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><?php
 
echo "<h1>Operadores Lógicos </h1>
1. Sistema de Autenticação de Funcionários
Desafio: Você foi solicitado a desenvolver um sistema de autenticação para a
empresa. O acesso ao sistema é permitido apenas se o funcionário tiver
permissão e o cadastro estiver ativo ou se o funcionário for um administrador.
Implemente essa lógica com operadores lógicos." ;
echo "<br><br>";
 
// simulando a entrada de um funcionario no sistema pelo banco de dados
$administrador = false;
$cadastro = true ;
$funciorario = true ;
 
 
 if (($funciorario && $cadastro) || $administrador) {
    echo "Acesso liberado";
 } else {
echo "Acesso negado";
 }
 
 echo "<br><br>";




echo "<h1>Cálculo matemático com ordem de grandeza  </h1>";
echo "1. Cálculo de imposto com desconto
Crie um programa que calcule o valor final de uma compra considerando um
desconto e imposto. Se o valor da compra for maior que R$500,00, um desconto
de 10% será aplicado. O imposto de 8% será calculado sobre o valor original da
compra, antes de aplicar o desconto.";
 
 echo "<br><br>";
 
function valorDescontoImposto($valorFinal){
   
    $imposto = $valorFinal * 0.08;
     if  ($valorFinal > 500) {
        $desconto = $valorFinal * 0.10;
     } else {
        $desconto = 0;
      }
      $valorFinal = $valorFinal + $imposto - $desconto;
 
return $valorFinal;
}
 
echo "Produto no valor de final: R$ " . valorDescontoImposto(2500);
 echo "<br><br>";
 echo "2. Cálculo de Preço com Taxa de Entrega
Crie um sistema para calcular o valor final de uma compra, considerando uma
taxa de entrega de 15% sobre o valor da compra. Se o valor da compra for superior
a R$1000,00, um desconto de 20% será aplicado após calcular a taxa de entrega.
A fórmula será:";
echo "<br><br>";

$valorCompra = 1200; 

$taxaEntrega = $valorCompra * 0.15;

$valorComTaxa = $valorCompra + $taxaEntrega;

if ($valorCompra > 1000) {
    $desconto = $valorComTaxa * 0.20;
    $valorFinal = $valorComTaxa - $desconto;
} else {
    $valorFinal = $valorComTaxa;
}
echo "Valor da compra: R$" . number_format($valorCompra, 2, ',', '.') . "<br>";
echo "valor do desconto: R$" . number_format($desconto, 2, ',', '.') . "<br>";
echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.');

echo "<br><br>";
 
echo "<h1> While </h1>";
echo "1. Contagem de Estoque ;
Implemente um programa que simule a venda de um produto. O estoque
começa com 100 unidades. Cada vez que um produto for vendido, o estoque deve
ser decrementado e o programa deve imprimir quantas unidades restam. O
programa deve continuar até que o estoque seja zerado.";
echo "<br><br>";
 
 
 $i =100;
    while ($i >=0) {
        echo "Um produto vendido estoque atual: " . $i . "<br>";
        $i--;
    }
echo "<br><br>";

echo "2. Verificação de Cliente
Crie um sistema de login onde o usuário tem até 3 tentativas para inserir
a senha correta. Se ele acertar a senha, o sistema deve exibir <b>Acesso concedido</b>.
Caso contrário, após 3 tentativas, o sistema deve exibir <b>Acesso negado</b>.
Implemente essa lógica com um loop while e uma verificação para o número de
tentativas.<br><br>";

$senhaCorreta = "1234"; 
$tentativas = 0;
$maxTentativas = 3;

$senhasDigitadas = ["1111", "2222", "1234"];

while ($tentativas < $maxTentativas) {

    $senhaDigitada = $senhasDigitadas[$tentativas];

    if ($senhaDigitada === $senhaCorreta) {
        echo "<b>Acesso concedido</b>";
        break;
    } else {
        $tentativas++;
        if ($tentativas == $maxTentativas) {
            echo "<b>Acesso negado</b>";
        }
    }
}
echo "<br><br>";
 
    echo "<h1>Do While </h1>" ;
echo "1. Sistema de Tentativas de Login
Implemente um sistema de login que permita ao usuário tentar inserir a
senha até acertar ou até alcançar o número máximo de tentativas. O sistema deve
pedir uma nova senha até que o usuário insira a senha correta ou ultrapasse o
limite de 3 tentativas.<br><br> ";
 
$senhaCorreta = "Chef444";
$tentativas = 0;
$senhaDigitada = "Chef333";
 
do {
    echo "Digite a senha: ";
    $senhaDigitada ;
    $tentativas++;
 
    if ($senhaDigitada === $senhaCorreta) {
        echo " <b>Login realizado com sucesso!</b> <br>";
        break;
    } else {
        echo " <b>Senha incorreta</b>.<br>";
    }
 
}
 
while ($tentativas < 3);
 
if ($senhaDigitada !== $senhaCorreta) {
    echo " <b>Número máximo de tentativas atingido. <br> Espere 30 minutos e retorne mais tarde</b> ";
}
 echo "<br><br>";

 echo"2. Processamento de Pedidos de Compra
 Crie um sistema que simule o processamento de pedidos de compra em
uma loja online. O programa deve processar um número determinado de pedidos
e, para cada um, imprimir <b>Processando pedido X</b>. O sistema deve continuar até
que todos os pedidos sejam processados, sendo o número de pedidos fornecido
pelo usuário.<br><br>";
 
$numeroPedidos = 5;

$contador = $numeroPedidos;

while ($contador >= 1) {
    echo "Processando pedido $contador<br>";
    $contador--;
}
?>
   
</body>
</html>