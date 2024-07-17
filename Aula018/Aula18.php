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
//$n=array(3,5,8,2);
//print_r($n);
//$c=range(5,20,2);
//foreach($c as $v){
//echo"$v ";
//}

//$v = array (0=>5,1=>9,2=>8,3=>7);
//unset($v[3]);
//print_r($v);
/*
$v=array("nome"=>"Ana",
        "idade"=>23,
         "peso"=>65.5
        );
print_r($v);
foreach($v as $k =>$c){
    echo "O campo $k possui conteudo $c <br>";
}
*/
$m =array(array(6,4),
          array(4,9),
          array(3,2)
         );
$m[0][1]=$m[2][0];
print_r($m);
 
        ?>
        </pre>
    </div>
</body>

</html>
