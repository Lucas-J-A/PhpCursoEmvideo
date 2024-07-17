<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula13</title>
    <link rel="stylesheet" href="../_css/estilo.css">

</head>

<body>
    <div>

        <form method="get" action="aula0013.php">
            <select name="num">
                <?php
                for($c=1;$c<=10;$c++){
                    echo"<option>$c</option>";
                    
                }
                ?>

            </select>
            <input type="submit" value="Tabuada">
        </form>









        <br><a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>

</html>
<!--

        <?php/*
        for($i=1;$i<=10;$i++){
             
            echo "$i ";
        }
        echo "<br/>";
         for($i=10;$i>=1;$i--){
            
            echo "$i ";
        }
        echo "<br/>";   
         for($i=0;$i<=50;$i+=5){
            
            echo "$i ";
        }
        echo "<br/>";   
         for($i=20;$i>=0;$i-=2){
            
            echo "$i ";
        }
        */
        ?>

-->
