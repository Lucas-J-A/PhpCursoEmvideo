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
        //ord pega a letra  e mostra codigo correspondendo
        $letra=C;
        $cod=ord($letra);
        echo"A letra 
        $letra tem codigo igual a $cod";
        
    
        ?>

    </div>
</body>

</html>

<?php
/*
    $p="Leite";
    $pr=4.5;
    //echo "O $p custa R$ ". number_format($p,2);
    printf("O %s custa R$ %.2f", $p, $pr);
*/
    ?>
    <?php
        /*$v[0]=4;$v[1]=8;$v[2]=3;
        
        //print_r($v);
        
        $v2=array(3,7,6,2,1,9);
        
        mostra os valores do array
        
        print_r($v2);
        
        var_export($v2);
        
        var_dump($v2)
        */
        ?>
        <?php
/*
       $t="Aqui temos um texto gigante criado pelo PHP e vai mostra o funcionamento da função wordwrap";
       
        //quebra a string em cada caractere; false ela  nao quebra a palavra ja true ela quebra  5 numero de caracteres
        
        $r=wordwrap($t,5,"<br/>\n", false);
*/
        ?>

            <?php
     /*strlen calcula tamanho da string conta espaço
        $txt="Curso em video";
        $tamanho=strlen($txt);
        echo"$tamanho"
        */
        ?>
                <?php
     /*trim ignora varios espaços entre nomes x representa os espaços
    //ltrim nao mostra espaço no começo
        //rtrim nao mostra os espaço do final
        
        $nome="         José       da Silva    ";
        echo(strlen($nome));
        $novo=trim($nome);
        echo"$novo";
        */
        ?>
                    <?php
     /*
     str_word_count quantidades de palavras numa string 0 contra palavras 1 ele monta vetor com palavras 2 gera vetor mantendo posionamento dentro da string
     $frase="Eu vou estudar PHP";
        $cont=str_word_count($frase,0);
        print($cont);
        */
        ?>

                        <?php
     /*explode ele procura os " "espaço qual vai ser string quebrada no array;
     $site="curso em video";
      $vetor=explode(" ",$site);
        print_r($vetor);
        */
        ?>
                            <?php
     /*str_split quebra cada letra e joga em um indice
     $site="Maria";
      $vetor=str_split($site);
        print_r($vetor);
        */
        ?>
                                <?php
/*
 //implode()
        //Join()
        //junta os vetor em palavras
        $vetor[0]="Curso";
        $vetor[1]="em";
        $vetor[2]="Video";
        $texto=implode("#",$vetor);
        print($texto);
*/
?>

                                    <?php
        /*chr pega o codigo e mostra letra correspondendo
        $letra=chr(67);
        echo"A letra de codigo 67 é $letra";
        
    */
        ?>
