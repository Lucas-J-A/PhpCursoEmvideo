<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>aula4</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>

<body>
    <div>
        <h1>Testando PHP</h1>
        <?php
 
//        $n=4;
//        $no=(string)"Lucas";
//        $n=4.5;
//        echo $n;
        $nome ="Lucas";
        $idade= 21;
       // echo $nome." tem ".$idade." anos !";
        echo "$nome tem $idade anos !"
    
    ?>
    </div>
</body>

</html>
<!--   
    //formas de fazer comentario em php // para uma linha ou /**/ varias linhas
        
    /*
    $ usado para marca variavel em outros casos serai var n=4;
    o php interpreta  o valor que variavel recebe e da um tipo nao precisando setar qual e o tipo dela quando for declara
    
    (string) é um typcast que força a variavel ser do tipo string poderia ser int fload double no lugar de string
    
    variavel lógico true=1 false=vazio
    '' aspas simples ele nao interpreta as variaves
    */
    
    
Comandos de saída do PHP

Os comandos ECHO, PRINT e PRINTF servem para gerar saídas na tela. Um exemplo simples desse comando é:

echo “Estou aprendendo variáveis em PHP”;

A pronúncia correta do comando echo é ECO

Note que no comando acima, foi utilizada uma tag HTML para a quebra de linha. Isso é possível, já que o PHP se integra com essa tecnologia. Fique à vontade para utilizar tags de marcação hipertexto dentro dos seus comandos de saída em PHP.


Variáveis são espaços na memória do computador que podem conter valores. Variáveis simples armazenam apenas um valor de cada vez, dependendo do seu tipo.

Todas as variáveis no PHP possuem um $ na frente e seguem as mesmas regras de construção de nomes de identificadores:

- Devem começar com uma letra (após o $)
- Podem conter letras e números
- Não podem conter caracteres acentuados
- Não podem conter símbolos como % # * & etc (exceto _ e $)

OBS: O PHP faz a diferenciação entre as letras maiúsculas e minúsculas, por isso recomendamos que você utilize apenas identificadores com letras minúsculas em seus scripts PHP.

Declaração de variáveis

No PHP não existe a necessidade de declarar variáveis. Os tipos serão atribuídos automaticamente de acordo com o valor que a variável receber. Esse processo é conhecido como coerção. Isso pode ser até empolgante no início, mas é preciso prestar bastante atenção para não fazer nada errado.

Você pode forçar um tipo primitivo a uma variável por TYPECAST, utilizando (int) (real) (float) (double) (string) antes do valor na atribuição.

Não existe typecast para variáveis lógicas. Os valores booleanos são considerados números, sendo o valor 1 atribuído para true e vazio para false.

Atribuição de valores

Atribuir valor é colocar um conteúdo em uma variável. Utilizamos o operador de atribuição = para realizar essa tarefa. Veja alguns exemplos:

$idade = 15;
$salario = 1500.25;
$nome = “Lucas”;
$casado = false;

Concatenação de valores

Concatenar é juntar valores para tratá-los em conjunto. A concatenação em PHP é realizada pelo operador ponto (.) como no trecho de código a seguir.

$idade = 18;
$nome = “Maria”;
echo $nome . “ tem “ . $idade . “ anos “;

No script acima, será exibido “Maria tem 18 anos”, já que acontecerão concatenações.

Porém, já que os identificadores PHP começam com um $, é possível realizar o comando de saída utilizando um modo simplificado:

echo “$nome tem $idade anos”;

O comando acima pode ser usado sem problemas, contanto que sejam utilizadas aspas duplas.
-->
