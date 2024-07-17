<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula11</title>
    <link rel="stylesheet" href="../../_css/estilo.css">

</head>

<body>
    <div>

        <h1>Testando PHP </h1>

        <?php

        $inicio=$_GET["inicio"];
        $final=$_GET["final"];
        $incr=$_GET["incremento"];
        
        while($inicio<$final){
            echo "$inicio"." ";
            $inicio+=$incr;
        }
        
        ?>



            <br><a href="aula011ex.html">Voltar</a>
    </div>
</body>

</html>

<?php
        
        $c=1;
        while($c>=10){
        echo $c."<br/>";
        $c++;
        }
