<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h1>Temperature Converter</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        
        <label for="conversion">Select Conversion:</label>
        <select name="conversion" id="conversion" required>
            <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheit_to_celsius">Fahrenheit to Celsius</option>
        </select>
        
        <input type="submit" value="Convert">
    </form>

    <?php
    // Function to convert Celsius to Fahrenheit
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Function to convert Fahrenheit to Celsius
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversion = $_POST["conversion"];
        
        if ($conversion == "celsius_to_fahrenheit") {
            $result = celsiusToFahrenheit($temperature);
            echo "<p>$temperature&deg;C is equal to $result&deg;F</p>";
        } elseif ($conversion == "fahrenheit_to_celsius") {
            $result = fahrenheitToCelsius($temperature);
            echo "<p>$temperature&deg;F is equal to $result&deg;C</p>";
        }
    }
    ?>
</body>
</html>
