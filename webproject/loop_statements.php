<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Statements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Loop Statements</h1>

        <?php
        // Declare whole number variables n and m
        $n = 5; // Example value for n
        $m = 8; // Example value for m

        // Display n x m multiplication table using for loop
        echo "<h2>Multiplication Table of $n:</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }

        // Display n Fibonacci series using while loop
        echo "<h2>Fibonacci Series of $n:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $n) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }
        echo "<br>";

        // Display m Fibonacci series using while loop
        echo "<h2>Fibonacci Series of $m:</h2>";
        $a = 0;
        $b = 1;
        $count = 0;
        while ($count < $m) {
            echo $a . " ";
            $next = $a + $b;
            $a = $b;
            $b = $next;
            $count++;
        }
        echo "<br>";

        // Compute the factorial of n and summation of m using do...while loop
        $factorial = 1;
        $i = 1;
        do {
            $factorial *= $i;
            $i++;
        } while ($i <= $n);

        $sum = 0;
        $j = 1;
        do {
            $sum += $j;
            $j++;
        } while ($j <= $m);

        echo "<h2>Factorial of $n: $factorial</h2>";
        echo "<h2>Summation of $m: $sum</h2>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
