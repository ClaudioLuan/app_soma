<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Soma</title>
</head>
<body>
    <h1>Aplicação Soma</h1>
    <form action="index.php?action=calcularSoma" method="post">
        <label for="num1">Valor 1:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Valor 2:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>
