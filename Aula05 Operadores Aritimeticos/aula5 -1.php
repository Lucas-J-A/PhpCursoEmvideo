<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula5</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <h1>Testando PHP Expressoes </h1>
        <?php
           // pegar valor pela url
        
         $n1= $_GET["a"];
        $n2= $_GET["b"];
        echo "Valores Recebeidos de a $n1 e $n2";
       //$n1=3;
        //    $n2=2;
        $media= ($n1+$n2)/2;
       // $s=$n1+$n2;
        //echo "Soma é $s"
        echo "<br>A soma Vale: ".($n1+$n2);
        echo "<br/>A Subtração Vale: ".($n1-$n2);
        echo "<br/>A Multiplicação Vale: ".($n1*$n2);
        echo "<br/>A Divisão Vale: ".($n1/$n2);
        echo "<br/>A Módulo Vale: ".($n1%$n2); 
        echo"<br/> A Média vale: $media";
  
      
        
    
    ?>
    </div>
</body>

</html>
<!--
Como fazer contas no PHP? Como realizar somas, multiplicações e mais? Exponenciações em PHP? Raiz quadrada em PHP?

Os operadores aritméticos do PHP são:

+ é o operador de adição
- é o operador de subtração
* é o operador de multiplicação
/ é o operador de divisão Real
% é o operador de módulo (resto da divisão)

O código a seguir, vai somar dois números:

$n1 = 3;
$n2 = 2;
$s = $n1 + $n2;
echo “A soma entre $n1 e $n2 é igual a $s”;

O código acima vai mostrar na tela a mensagem

A soma entre 3 e 2 é igual a 5

Outra coisa importante a saber é a ordem de precedência de operadores aritméticos em PHP. Sempre em uma expressão, os operadores que serão executados são, na ordem:

Em primeiro lugar, parênteses ( )
Em segundo lugar, operadores de multiplicação, divisão e módulo * / %
Em seguida, as adições e subtrações + -
Por exemplo, considerando o código a seguir:

$media = $nota1 + $nota2 / 2;

A média será calculada de maneira errada, já que segundo a ordem de precedência, a divisão será feita antes. O correto seria escrever

$media = ($nota1 + $nota2) / 2; 

Note que o uso dos parênteses muda bastante as coisas.

Obtendo valores da URL com PHP

Vamos analisar a URL abaixo:

http://localhost/aula05/operadores.ph...

No link acima, o arquivo operadores.php está sendo chamado dentro da pasta aula05 do servidor local. Na linha, serão passados dois valores: a valendo 3 e b valendo 2.

Para pegar esses valores no script PHP, use o código

$valor1 = $_GET["a"];
$valor2 = $_GET["b"]; 

No código acima, o parâmetro a (3) passado pela URL será armazenado na variável $valor1. De maneira similar, a variável $valor2 vai conter o valor do parâmetro b (2).

Obs: use sempre $_GET com todas as letras maiúsculas.

Funções Matemáticas em PHP

abs() : Retorna o valor absoluto de um número. Ex: abs(-5) = 5
pow() : Calcula uma potência. Ex: pow(3,2) = 32 = 9
sqrt() : Calcula a raiz quadrada de um número. Ex: sqrt(25) = 5
round() : Arredonda valores. Ex: round(3.8) = 4
intval() : Trunca um número. Retorna a parte inteira de um valor. Ex: abs(8.7) = 8
number_format() : Formata um número Real. Ex: number_format(3258.754, 2, ",", ".") = 3.258. 75.

Obs: Ainda existem os métodos ceil() e floor() para arredondamentos para cima e para baixo, respectivamente. A função round() vai usar as regras de arredondamento.
-->
