<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="number1">Enter the first number:</label>
        <input type="number" name="number1" id="number1" required>
        
        <label for="number2">Enter the second number:</label>
        <input type="number" name="number2" id="number2" required>
        
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        
        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
