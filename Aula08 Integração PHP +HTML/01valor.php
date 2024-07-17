<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula5</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <?php
    $txt=isset($_GET["t"])?$_GET["t"]:"Texto generico";
    $tam=isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor=isset($_GET["cor"])?$_GET["cor"]:"#000000";
    
    ?>
        <style>
            span.texto {
font-size: <?php echo $tam;?>;
 color: <?php echo $cor;?>;
            }

        </style>
</head>

<body>
    <div>

        <h1>Testando PHP </h1>

        <?php 
//        $valor=$_GET["v"];
//        $rq= sqrt($valor);
//        echo "A raiz de $valor é igual a                   ".number_format($rq,2);
        
//    $nome= isset($_GET["nome"])?$_GET["nome"]:"[nao informado]";
//        
//    $ano=isset($_GET["ano"])?$_GET["ano"]:0;
//        
//    $sexo=isset($_GET["sexo"])?$_GET["sexo"]:"[sem sexo]";
//        
//    $idade = date("Y")-$ano;
//        
//    echo"O $nome e $sexo tem $idade anos.";
        echo "<span class='texto'>$txt</span>";
        ?>


            <br><a href="aula8.html">Voltar</a>
    </div>
</body>

</html>
<!--
Interligando o formulário HTML com o script PHP

Para interligar o formulário, vamos usar a cláusula $_GET

?php
$valor = $_GET[“v”];
echo “Digitou $valor”;
?

Obs: O $_GET sempre vai utilizar todas as letras maiúsculas.
Obs: Se por acaso seu formulário utilizar o método post, você vai precisar usar $_POST.

Interligando outros tipos de controles de formulários HTML5 com PHP

A integração de qualquer controle de formulário PHP pode ser feita através do parâmetro NAME de cada um deles. Durante a aula, criamos um formulário com vários tipos de controles e interligamos eles ao arquivo PHP.

Pegando o ano atual com PHP

Para obter o ano atual no PHP, utilizamos

$idade = date(“Y”) - $ano; 

-->
