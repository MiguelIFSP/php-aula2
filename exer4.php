<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1.7 Atividade</title>
</head>
<body>
    <h1>Atividade</h1>

    <form method="get">
        Número 1: <input type="number" name="num1"><br>
        Número 2: <input type="number" name="num2"><br>
        <input type="submit" value="Comparar">
    </form>
    <br>

<?php

if (isset($_GET['num1']) && isset($_GET['num2'])) {

    $x = $_GET['num1'];
    $y = $_GET['num2'];

    echo "Valores recebidos: x = $x, y = $y<br><br>";

    echo "$x > $y : " . ($x > $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x < $y : " . ($x < $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x >= $y : " . ($x >= $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x <= $y : " . ($x <= $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x == $y : " . ($x == $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x != $y : " . ($x != $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x <> $y : " . ($x <> $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x === $y : " . ($x === $y ? 'Verdadeiro' : 'Falso') . "<br>";
    echo "$x !== $y : " . ($x !== $y ? 'Verdadeiro' : 'Falso') . "<br>";

    $cmp = $x <=> $y;

    if ($cmp === -1) {
        echo "$x <=> $y : $x é menor que $y<br>";
    } elseif ($cmp === 0) {
        echo "$x <=> $y : $x é igual a $y<br>";
    } else {
        echo "$x <=> $y : $x é maior que $y<br>";
    }

}

?>

</body>
</html>
