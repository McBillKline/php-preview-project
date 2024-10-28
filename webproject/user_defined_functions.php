<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-defined Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>User-defined Functions</h1>

        <?php
        // Problem: Calculate statistics for an array of numbers
        $numbers = [12, 45, 67, 23, 89, 10, 34, 56, 78, 91];

        // Function to calculate the average of numbers
        function calculateAverage($array) {
            $sum = array_sum($array);
            return $sum / count($array);
        }

        // Function to find the maximum number
        function findMax($array) {
            return max($array);
        }

        // Function to find the minimum number
        function findMin($array) {
            return min($array);
        }

        // Function to calculate the sum of numbers
        function calculateSum($array) {
            return array_sum($array);
        }

        // Function to count the numbers
        function countNumbers($array) {
            return count($array);
        }

        // Function to calculate the range
        function calculateRange($array) {
            return findMax($array) - findMin($array);
        }

        // Function to sort the numbers
        function sortNumbers($array) {
            sort($array);
            return $array;
        }

        // Function to display the numbers
        function displayNumbers($array) {
            return implode(", ", $array);
        }

        // Function to check if a number exists in the array
        function numberExists($array, $number) {
            return in_array($number, $array) ? "Yes" : "No";
        }

        // Function to find the median
        function calculateMedian($array) {
            sort($array);
            $count = count($array);
            $middle = floor(($count - 1) / 2);
            if ($count % 2) {
                return $array[$middle];
            } else {
                return ($array[$middle] + $array[$middle + 1]) / 2;
            }
        }

        // Displaying the results
        echo "<h2>Numbers: " . displayNumbers($numbers) . "</h2>";
        echo "<h3>Statistics:</h3>";
        echo "Sum: " . calculateSum($numbers) . "<br>";
        echo "Average: " . calculateAverage($numbers) . "<br>";
        echo "Maximum: " . findMax($numbers) . "<br>";
        echo "Minimum: " . findMin($numbers) . "<br>";
        echo "Count: " . countNumbers($numbers) . "<br>";
        echo "Range: " . calculateRange($numbers) . "<br>";
        echo "Median: " . calculateMedian($numbers) . "<br>";

        // Example of checking if a number exists
        $numberToCheck = 45;
        echo "Does the number $numberToCheck exist? " . numberExists($numbers, $numberToCheck) . "<br>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
