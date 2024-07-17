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
       $a= isset($_GET["ano"])?$_GET["ano"]: 1990;
       $i=date("Y")-$a;
            echo "Voçê nasceu em $a tem $i anos.<br>";
            if($i<16){$tipoVoto="nao vota";}
            elseif(($i>=16 && $i<18) || ($i>65)) {$tipoVoto = "voto opcional";}
            else $tipoVoto="voto obrigatorio";
        
                
           
        
        echo "Para esse idade, $tipoVoto";
?>


            <br><a href="aula9.html">Voltar</a>
    </div>
</body>

</html>
