<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Use of Variables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>The Use of Variables</h1>
        <?php
            // Declaring variables
            $wholeNumbers = [10, 20, 30, 40, 50];
            $floatNumbers = [1.1, 2.2, 3.3, 4.4, 5.5];
            $strings = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
            $characters = ['A', 'B', 'C', 'D', 'E'];

            echo "<h2>Whole Numbers:</h2>";
            foreach ($wholeNumbers as $number) {
                echo "Number: $number <br>";
            }
            echo "<h2>Floating Point Numbers:</h2>";
            foreach ($floatNumbers as $float) {
                echo "Float: $float <br>";
            }
            echo "<h2>Strings:</h2>";
            foreach ($strings as $string) {
                echo "String: $string <br>";
            }
            echo "<h2>Characters:</h2>";
            foreach ($characters as $char) {
                echo "Character: $char <br>";
            }
        ?>
        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
