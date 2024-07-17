<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aula16</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <?php
        //str_replace troca palavra por outra
        $frase= "Gosoto de estudar Desenho!!!";
        $novofrase=str_replace("Desenho","PHP",$frase);
        echo"$novofrase";
        
        ?>

    </div>
</body>

</html>
<?php
/*
        //strtolower nao mostra letra maiuscula
        $nome="Lucas José";
        print("Seu nome é".strtolower($nome));
*/
        
?>

    <?php
/*        
////strtoupper mostra tudo em letra maiscula menos ascento
        $nome="Lucas José";
        print("Seu nome é".strtoupper($nome));
        */
        ?>
        <?php
/*
        //ucfirst primeira letra em maiuscula
        $nome="Lucas José";
        print("Seu nome é".ucfirst($nome));
*/
        ?>
            <?php
/*
        //ucwords primeira letra de cada palavra em maiuscula
        $nome="lucas josé";
        print("Seu nome é".ucwords($nome));
*/
        
        ?>
                <?php
/*
        //strrev mostra string invertida
        $nome="lucas josé";
        print("Seu nome é".strrev($nome));
        */
        ?>
                    <?php
/*
        //strpos mostra qual posição foi encontrada a palavra escolhida
        $nome="Estou aprendendo PHP";
        $pos=strpos($nome,"PHP");
        echo "A string foi encontrada na posição $pos";
*/
        ?>
                        <?php
/*
        //stripos mostra qual posição foi encontrada a palavra escolhida ele ignora a caixa
        $nome="Estou aprendendo PHP";
        $pos=stripos($nome,"PHP");
        echo "A string foi encontrada na posição $pos";
*/
        ?>
                            <?php
/*
        //substr_count mostra quantidade de vezes que palavra e encontrada
        $nome="Estou aprendendo PHP";
        $pos=substr_count($nome,"PHP");
        echo "A string foi encontrada  $pos vezes";
*/
        ?>
                                <?php
/*
        //substr pega um pedaço da string 0 de até 5 ou qualquer outro valor ou(7) ela pega apos o valor escolhido valores negativos -5 vai de traz para frente do ultimo pro primeiro
        $site="Curso em Vídeo";
        $sub=substr($site,0,5);
        echo"$sub";
*/
        ?>
                                    <?php
/*
        //str_pad vai fazer string caber e determinado tamanho ($var,quantidade de caractere,espaços " ",complementa a direita)
        $nome="Lucas José"
        $novo=str_pad($nome,10,"c",STR_PAD_RIGHT);
        print("Eu sou o $novo e legal !");
*/
        ?>
                                        <?php
/*
        //str_repeat repeate a palvra escolhida tantas vezes
        $txt = str_repeat("Php",5);
        print("O texto gerado foi $txt");
        print(str_repeat("-"20));
*/
        ?>
                                            <?php
/*
        //str_replace troca palavra por outra
        $frase= "Gosoto de estudar Desenho!!!";
        $novofrase=str_replace("Desenho","PHP",$frase);
        echo"$novofrase";
 */
        
        ?>
