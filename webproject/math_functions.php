<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Using Math Functions</h1>

        <?php
        // Declare five floating-point numbers
        $floatNumbers = [10.5, 15.8, 22.4, 7.1, 3.3];

        // Declare five whole numbers
        $wholeNumbers = [2, 5, 15, 8, 30];

        // Display the floating-point numbers
        echo "<h2>Floating Point Numbers:</h2>";
        foreach ($floatNumbers as $number) {
            echo "Number: $number<br>";
        }

        // Display the whole numbers
        echo "<h2>Whole Numbers:</h2>";
        foreach ($wholeNumbers as $number) {
            echo "Number: $number<br>";
        }

        // Using Math Functions
        echo "<h2>Math Functions Demonstration:</h2>";

        // Calculate and display results using math functions
        foreach ($floatNumbers as $number) {
            echo "Square Root of $number: " . sqrt($number) . "<br>";
            echo "Ceiling of $number: " . ceil($number) . "<br>";
            echo "Floor of $number: " . floor($number) . "<br>";
        }

        // Additional Math Function Demonstrations
        echo "<h2>Results:</h2>";
        echo "Max of whole numbers: " . max($wholeNumbers) . "<br>";
        echo "Min of whole numbers: " . min($wholeNumbers) . "<br>";
        echo "Sum of whole numbers: " . array_sum($wholeNumbers) . "<br>";
        echo "Average of whole numbers: " . (array_sum($wholeNumbers) / count($wholeNumbers)) . "<br>";
        echo "Random Number between 1 and 100: " . rand(1, 100) . "<br>";
        echo "Absolute value of -15: " . abs(-15) . "<br>";
        echo "Rounded value of 10.5: " . round(10.5) . "<br>";
        echo "Power of 2^3: " . pow(2, 3) . "<br>";
        echo "Sine of 45 degrees: " . sin(deg2rad(45)) . "<br>";
        echo "Cosine of 45 degrees: " . cos(deg2rad(45)) . "<br>";
        echo "Tangent of 45 degrees: " . tan(deg2rad(45)) . "<br>";
        echo "Log of 100: " . log(100) . "<br>";
        echo "Exponential of 2: " . exp(2) . "<br>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
