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
//       $n1 = $_GET["a"];
//       $n2 = $_GET["b"];
//        $tipo = $_GET["op"];
//        echo "Os valores passados foram $n1 e $n2 <br>";
        
        // Expresão ?se for veradero faça : Se nao for verdadeira faça
        
//        $r=($tipo=="s")?$n1+$n2:$n1*$n2;
//        echo "Resultado sera $r";
//    
        //== e mesma coisa independente de tipo da variavel $a=3 == $b="3" verdadeiro
        //=== se é identica ate no tipo de variavel $a=3 === $b="3" falso
        
//        $a=3;
//        $b="3";
//        $r= ($a === $b)?"SIM":"Não";
//        echo"$r";
        
//        $nota1 =$_GET["n1"];
//        $nota2 =$_GET["n2"];
//        $m=($nota1+$nota2)/2;
//        echo "Media entre $nota1 e $nota2 é $m <br>";
//        
//        echo "A Situação do aluno é ".$sit=(($m<6)?"Reprovado":"Aprovado");
//  
        $ano=$_GET["an"];
        $idade=2016 -$ano;
        echo "Quem nasceu em $ano tem idade de $idade <br>";
        $tipo = ($idade>=18 && $idade<65)?"Obrigatorio":"Não Obrigatorio";
        echo "Edessa forma seu voto é $tipo";
        
        
?>
    </div>
</body>

</html>
<!--

-->
