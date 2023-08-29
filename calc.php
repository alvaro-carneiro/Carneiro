<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="">
        <label for="num1">Número 1:</label>
        <input type="text" name="num1" id="num1" required><br>

        <label for="num2">Número 2:</label>
        <input type="text" name="num2" id="num2" required><br>

        <label for="operation">Operação:</label>
        <select name="operation" id="operation">
            <option value="add">Adição</option>
            <option value="sub">Subtração</option>
            <option value="mul">Multiplicação</option>
            <option value="div">Divisão</option>
        </select><br>

        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operation = $_POST["operation"];
        $result = 0;

        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "sub":
                $result = $num1 - $num2;
                break;
            case "mul":
                $result = $num1 * $num2;
                break;
            case "div":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "Não é possível dividir por zero.";
                }
                break;
        }

        echo "<p>Resultado: $result</p>";
    }
    ?>
</body>
</html>