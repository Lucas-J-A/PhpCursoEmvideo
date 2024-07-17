<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula11</title>
    <link rel="stylesheet" href="../../_css/estilo.css">

</head>

<body>
    <div>

        <h1>Tabuada </h1>

        <?php

        $val=$_GET["val"];
        $n="1";
      do{
          echo"<p>$val x $n = ".$val*$n."</p>";
          $n++;
      }while ($n<=10);
        
        ?>



            <br><a href="aula012ex.html">Voltar</a>
    </div>
</body>

</html>
<!--
       <?php
        
        $c=1;
        while($c>=10){
        echo $c."<br/>";
        $c++;
        }
        
 ?>

-->
