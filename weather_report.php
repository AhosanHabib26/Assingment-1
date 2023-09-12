<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>

    <?php
    // Define the temperature
    $temperature = 20; // Change this to the actual temperature

    // Provide weather information based on temperature
    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } elseif ($temperature > 15 && $temperature <= 30) {
        echo "<p>It's warm.</p>";
    } else {
        echo "<p>It's hot!</p>";
    }
    ?>
</body>
</html>
