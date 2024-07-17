<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula11</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>

        <h1>Testando PHP </h1>


        <form method="get" action="aula0111.php">
            <?php
        
        $c=1;
        while($c<=5){
        echo "Valor $c:<input type='number' name='v$c' value='0' max='100' min='0'/><br/>";
        $c++;
        }
        
 ?>

                <input type="submit" value="Enviar" class="botao">
        </form>


        <br><a href="aula011.html">Voltar</a>
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
