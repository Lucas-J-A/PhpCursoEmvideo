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
        $n=isset($_GET["num"])?$_GET["num"]:1;
        for($c=1;$c<=10;$c++){
            $r=$n*$c;
            echo"$n x $c = $r <br/>";
        }
        ?>










            <br><a href="aula013.php">Voltar</a>
    </div>
</body>

</html>
