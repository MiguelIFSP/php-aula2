<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Juros Simples</title>
</head>
<body>

<h1>Calculadora de Juros Simples</h1>

<form method="get">
    Capital: <input type="number" name="capital" step="0.01" required><br>
    Taxa (%): <input type="number" name="taxa" step="0.01" required><br>
    Tempo (anos): <input type="number" name="tempo" required><br>
    <input type="submit" value="Calcular">
</form>
<br>

<?php
if (isset($_GET['capital']) && isset($_GET['taxa']) && isset($_GET['tempo'])) {
    $capital = (float) $_GET['capital'];
    $taxa = (float) $_GET['taxa'] / 100; // convertendo para decimal
    $tempoFinal = (int) $_GET['tempo'];

    echo "<strong>Capital:</strong> R$ $capital<br>";
    echo "<strong>Taxa:</strong> " . ($taxa * 100) . "% ao ano<br>";
    echo "<strong>Tempo:</strong> $tempoFinal anos<br><br>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>Tempo</th><th>Montante</th><th>Juro</th></tr>";

    $t = 0;
    while ($t <= $tempoFinal):
        $juro = $capital * $taxa * $t;
        $montante = $capital + $juro;
        ?>
        <tr>
            <td><?= $t ?></td>
            <td><?= number_format($montante, 2, ',', '.') ?></td>
            <td><?= number_format($juro, 2, ',', '.') ?></td>
        </tr>
        <?php
        $t++;
    endwhile;

    echo "</table>";
}
?>

</body>
</html>
