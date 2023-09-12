<!DOCTYPE html>
<html>
<head>
    <title>My Personal Information</title>
</head>
<body>
    <?php
    // Define variables for personal information
    $name = "Ahosan Habib";
    $age = 25;
    $country = "Bangladesh";
    $introduction = "Hello, I am " . $name . ". I am " . $age . " years old and I come from " . $country . ".";
    
    // Display personal information using echo
    echo "<h1>Personal Information</h1>";
    echo "<p><strong>Name:</strong> " . $name . "</p>";
    echo "<p><strong>Age:</strong> " . $age . "</p>";
    echo "<p><strong>Country:</strong> " . $country . "</p>";
    echo "<p><strong>Introduction:</strong> " . $introduction . "</p>";
    ?>
</body>
</html>
