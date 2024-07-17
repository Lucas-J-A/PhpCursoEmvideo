<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula13</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>
        <?php
        function teste (&$x){
            $x+=2;
            echo "<p>O valor de X e $x</´p>";
        }
        $a=3;
        teste($a);
        echo"<p>O valor de A é $a</p>"
        ?>

            <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>
<!--


-->
