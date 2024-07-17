<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula11</title>
    <link rel="stylesheet" href="../../_css/estilo.css">

    <style>
        span.texto {
            color: red;
        }

    </style>
</head>

<body>
    <div>

        <h1>Primo ?</h1>

        <?php
        
        $val=isset($_GET["val"])?$_GET["val"]:1;
        echo"Analisando o número $val<br/>";
        $c=1;
        $Tmult=0;
        $valMult="";
        while($c<=$val){
            $di=$val%$c;
            if($di==0)
            {
               
                $valMult=$valMult." ".$c;
              
                $Tmult++;
            }
            $c++;
           
       }
        echo"Valores múltiplos : $valMult <br/> Total de múltiplos $Tmult<br/><br/>";
        
        if($Tmult==2){
            echo "Resultado :$val <span class=texto>È PRIMO</span><br/>";
        }else{
            echo "Resultado :$val <span class=texto>NÂO È PRIMO</span><br/>";
        }
        
        ?>



            <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>
