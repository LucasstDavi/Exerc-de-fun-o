<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerc de Funções</title>
    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    // a) escrever a tabuada de um número passado por parâmetro. Exemplo: se o parâmetro for 2
    echo "<h3>A)</h3>";
    function tabuada($n) {
        for ($i = 0;$i <= 10; $i++) {
            echo "$n x $i = ";
            echo $n * $i.'<br>';
        }
    }

    tabuada(2);

    echo "<hr>";

    // b) inverter o conteúdo de um vetor qualquer. Exemplo: se a entrada for ['a', 'z,'m'] deve devolver ['m','z','a'].
    echo "<h3>B)</h3>";
    $letras = ["a,z,m"];

    print_r($letras);

    echo "<br>";
    echo "<br>";
    echo "Array invertido é: ";

    function inverte($vetor) {
        $string = implode($vetor);
        echo strrev($string);
    }

    inverte($letras);

    echo "<hr>";

    // c) que receba um vetor com números inteiros e que devolva o maior número existente no vetor.  Use apenas um laço de repetição e instrução if.

    echo "<h3>C)</h3>";

    $nums = [2,22,7,55,3,13,8];

    print_r($nums);

    echo "<br>";
    echo "<br>";
    echo "O maior número do array é: ";

    $maiorNum = 0;
    for ($i = 0; $i < 7; $i++) {
        if ($nums[$i] > $maiorNum) {
            $maiorNum = $nums[$i];
        }
    }

    echo $maiorNum;

    echo "<hr>";

    // d) formatar um número como CPF (###.###.###-##, onde # representa um dígito). 
    echo "<h3>D)</h3>";
    $numeros = "14638940152";
    echo "Números do CPF: $numeros <br><br>";
    echo "CPF Formatado: ";

    function formatCPF($n) {
        $p1 = substr($n,0,3);
        $p2 = substr($n,3,3);
        $p3 = substr($n,6,3);
        $p4 = substr($n,9,2);
        return $formtCPF = "$p1.$p2.$p3-$p4";
    }

    echo formatCPF($numeros);

    echo "<hr>";

    // sabendo que a fórmula para a conversão de uma temperatura em  Fahrenheit para Celsius é: c = (f-32)/18, faça uma função em PHP que mostre os valores em Celsius das seguintes temperaturas em Fahrenheit: 90º, 77º, 52º e 12º (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)
    echo "<h3>E)</h3>";

    function trasGrau($f) {
        return ($f - 32) /18;
    }

    echo trasGrau(90)."<br>";
    echo trasGrau(77)."<br>";
    echo trasGrau(52)."<br>";
    echo trasGrau(12);

    echo "<hr>";

    // f) desenvolva, em PHP, a função buscaTexto($texto, $busca), sendo $texto uma variável string que contém um texto, e $busca, um array que contém palavras a serem buscadas no texto. Cada vez que uma palavra buscada for localizada, ela deverá ser destacada na cor vermelha. A função deverá retornar o $texto com as palavras destacadas em vermelho. (PHP na prática, Júlia Marques Carvalho da  Silva, Campus)
    echo "<h3>F)</h3>";

    $str = "vamos buscar algo aqui";

    function buscaTexto($texto, $busca) {
        if (strpos($texto, $busca) !== false) {
            echo $texto. "<br>";
            echo "<span>algo</span>";
        }else {
            echo "Palavra não encontrada!";
        }
    }

    buscaTexto($str, 'algo');

    echo "<hr>";

    // g) que receba um vetor de números inteiros e devolva a soma dos valores contidos nesse vetor. Use apenas um laço de repetição e instrução if.
    echo "<h3>G)</h3>";

    $numsInt = [2,6,8,15,8,12];

    print_r($numsInt);
    echo "<br>";
    $soma = 0;
    for ($i = 0; $i < 6; $i++) {
        $soma += $numsInt[$i];
    }

    echo "Soma deles é  $soma";

    ?>
</body>
</html>