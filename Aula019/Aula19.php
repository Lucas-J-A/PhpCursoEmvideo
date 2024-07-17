<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Aula18</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>

    <div>
        <pre>
        <?php
            $v= array("A","J","M","X","K");
                print_r($v);
//echo "O vetor tem ".count($v)." elementos";
           // var_dump($v); 
//$v[]="O";
//print_r($v);
//array_pop elemina ultimo elemento
//array_pop($v);
//print_r($v);
//array_push($v) coloca um elem no final
//array_push($v);
//print_r($v);
// array_unshift add primeiro elemento
// array_shift elimina primeiro elemento
//array_unshift($v,7);
//array_shift($v);
//sort($x) ordena os elementos
//rsort($x) ordena elementos aocontrario
//asort($x) coloca vetor em ordem mais mantem os indices
//arsort($x) coloca vetor em ordem aocontrario mais mantem os indices
//ksort($x) coloca os indices em ordem

sort($v);
print_r($v);
        ?>
        </pre>
    </div>
</body>

</html>
