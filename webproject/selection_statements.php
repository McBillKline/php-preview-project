<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Selection Statements</h1>

        <?php
        // Initialize five string variables
        $strings = ["Banana", "Apple", "Mango", "Grapes", "Orange"];
        
        // Initialize five integer variables
        $numbers = [5, 10, 15, 20, 25];

        // Function to sort strings in ascending order using bubble sort
        function sortStringsAscending($arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] > $arr[$j + 1]) {
                        // Swap
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            return $arr;
        }

        // Function to sort strings in descending order using bubble sort
        function sortStringsDescending($arr) {
            $n = count($arr);
            for ($i = 0; $i < $n - 1; $i++) {
                for ($j = 0; $j < $n - $i - 1; $j++) {
                    if ($arr[$j] < $arr[$j + 1]) {
                        // Swap
                        $temp = $arr[$j];
                        $arr[$j] = $arr[$j + 1];
                        $arr[$j + 1] = $temp;
                    }
                }
            }
            return $arr;
        }

        // Sort and display strings in ascending order
        $sortedStringsAsc = sortStringsAscending($strings);
        echo "<h2>Strings in Ascending Order:</h2>";
        foreach ($sortedStringsAsc as $string) {
            echo $string . "<br>";
        }

        // Sort and display strings in descending order
        $sortedStringsDesc = sortStringsDescending($strings);
        echo "<h2>Strings in Descending Order:</h2>";
        foreach ($sortedStringsDesc as $string) {
            echo $string . "<br>";
        }

        // Check divisibility and calculate sum, product, and average
        if ($numbers[0] % $numbers[4] === 0) {
            $sum = array_sum($numbers);
            $product = array_product($numbers);
            $average = $sum / count($numbers);

            echo "<h2>Sum: $sum</h2>";
            echo "<h2>Product: $product</h2>";
            echo "<h2>Average: $average</h2>";
        } else {
            // Sort numbers in ascending order using bubble sort
            function sortNumbersAscending($arr) {
                $n = count($arr);
                for ($i = 0; $i < $n - 1; $i++) {
                    for ($j = 0; $j < $n - $i - 1; $j++) {
                        if ($arr[$j] > $arr[$j + 1]) {
                            // Swap
                            $temp = $arr[$j];
                            $arr[$j] = $arr[$j + 1];
                            $arr[$j + 1] = $temp;
                        }
                    }
                }
                return $arr;
            }

            $sortedNumbersAsc = sortNumbersAscending($numbers);
            echo "<h2>Numbers in Ascending Order:</h2>";
            foreach ($sortedNumbersAsc as $number) {
                echo $number . "<br>";
            }
        }
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
