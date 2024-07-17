<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula11</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>


        <?php
        $v=isset($_GET["val"])?$_GET["val"]:1;
        echo"<h1>Calculando o fatorial de $v</h1>";
        $c=$v;
        $fat=1;
        do{
            $fat=$fat*$c;
            $c--;
            
        }while ($c>=1);
        echo "<h2>$v! = $fat</h2>"
        ?>




            <br><a href="aula012.html">Voltar</a>
    </div>
</body>

</html>
<!--
  
    <?php /*
        
        $c=1;
        do{
            echo"$c ";
            $c+=2;
            
            
        }while($c<=20);

        
 ?>
 
     
       <?php
        
        $c=10;
        do{
            echo"$c ";
            $c--;
            
            
        }while($c>1);
        */
        
 ?>
 
-->
