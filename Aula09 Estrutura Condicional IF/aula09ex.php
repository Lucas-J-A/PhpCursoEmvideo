<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula5</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>

        <h1>Testando PHP </h1>


        <?php 
       $n1= isset($_GET["n1"])?$_GET["n1"]: "Digite a nota 1";
       $n2= isset($_GET["n2"])?$_GET["n2"]: "Digite a nota 2";
        $m=($n1+$n2)/2;
        if($m<6){      echo 
            "<style>
            span {
            color:red;
         
            }
            </style>";
            $sit="Reprovado";
        }
        elseif($m>=6){
            $sit="Aprovado";
             echo 
            "<style>
            span {
            color:blue;
         
            }
            </style>";
        
        }
        
    echo "Média entre  $n1 e $n2 é $m situação é <span>$sit </span>";
?>


            <br><a href="aula9exercicio.html">Voltar</a>
    </div>
</body>

</html>
