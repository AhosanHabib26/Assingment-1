<?php
// Function to calculate the letter grade based on the average score
function calculateGrade($average) {
    if ($average >= 90) {
        return 'A';
    } elseif ($average >= 80) {
        return 'B';
    } elseif ($average >= 70) {
        return 'C';
    } elseif ($average >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $score1 = $_POST["score1"];
    $score2 = $_POST["score2"];
    $score3 = $_POST["score3"];

    // Calculate the average score
    $average = ($score1 + $score2 + $score3) / 3;

    // Calculate the letter grade
    $grade = calculateGrade($average);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="score1">Test Score 1:</label>
        <input type="number" name="score1" id="score1" required>
        
        <label for="score2">Test Score 2:</label>
        <input type="number" name="score2" id="score2" required>
        
        <label for="score3">Test Score 3:</label>
        <input type="number" name="score3" id="score3" required>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    if (isset($average) && isset($grade)) {
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>
</html>
