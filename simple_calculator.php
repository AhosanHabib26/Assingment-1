<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" id="num1" required>

        <label for="operator">Select an operator:</label>
        <select name="operator" id="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" id="num2" required>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $operator = $_POST["operator"];
        $num2 = $_POST["num2"];
        $result = 0;

        // Perform the selected operation
        switch ($operator) {
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero!</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operator!</p>";
        }

        if ($operator != "/" || ($operator == "/" && $num2 != 0)) {
            echo "<p>Result: $num1 $operator $num2 = $result</p>";
        }
    }
    ?>
</body>
</html>


