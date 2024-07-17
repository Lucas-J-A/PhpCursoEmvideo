<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula10</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>

        <h1>Testando PHP </h1>


        <?php 
        $d = isset ($_GET["ds"])?$_GET["ds"]:0;
        switch ($d){
                
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Levanta e vai estudar  :)";
                break;
            case 7:
            case 8:
                echo "Pode ir dormi pequeno gafanhoto ;)";
                break;
            default:
                echo"Dia da semana inválido";
        }
        
      
?>


            <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>
