<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aplicação Soma</title>
</head>

<body>
    <h1><b>Aplicação Soma</b></h1>
    <form action="index.php?action=calcularSoma" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" id="num1" required><br><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" id="num2" required><br><br>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>