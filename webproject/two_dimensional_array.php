<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Two-dimensional Array</h1>

        <?php
            // Set the size of the NxN array
            $n = 4; // You can change this to any integer for a different size
            $array = [];

            // Fill the array with random integers
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    $array[$i][$j] = rand(1, 100); // Random integers between 1 and 100
                }
            }

            // Display the array
            echo "<h3>Array:</h3>";
            echo "<table border='1'>";
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    echo "<td>" . $array[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            // Initialize variables for calculations
            $overallSum = 0;
            $overallMin = PHP_INT_MAX;
            $overallMax = PHP_INT_MIN;

            // Calculate sums, averages, min, and max
            echo "<h3>Results:</h3>";
            for ($i = 0; $i < $n; $i++) {
                $rowSum = 0;
                $rowMin = PHP_INT_MAX;
                $rowMax = PHP_INT_MIN;
                for ($j = 0; $j < $n; $j++) {
                    $rowSum += $array[$i][$j];
                    if ($array[$i][$j] < $rowMin) $rowMin = $array[$i][$j];
                    if ($array[$i][$j] > $rowMax) $rowMax = $array[$i][$j];
                    $overallSum += $array[$i][$j];
                    if ($array[$i][$j] < $overallMin) $overallMin = $array[$i][$j];
                    if ($array[$i][$j] > $overallMax) $overallMax = $array[$i][$j];
                }
                $rowAverage = $rowSum / $n;
                echo "Row $i - Sum: $rowSum, Average: " . round($rowAverage, 2) . ", Min: $rowMin, Max: $rowMax<br>";
            }

            // Calculate column sums and averages
            for ($j = 0; $j < $n; $j++) {
                $colSum = 0;
                $colMin = PHP_INT_MAX;
                $colMax = PHP_INT_MIN;
                for ($i = 0; $i < $n; $i++) {
                    $colSum += $array[$i][$j];
                    if ($array[$i][$j] < $colMin) $colMin = $array[$i][$j];
                    if ($array[$i][$j] > $colMax) $colMax = $array[$i][$j];
                }
                $colAverage = $colSum / $n;
                echo "Column $j - Sum: $colSum, Average: " . round($colAverage, 2) . ", Min: $colMin, Max: $colMax<br>";
            }

            // Calculate diagonal sums and averages
            $primaryDiagonalSum = 0;
            $secondaryDiagonalSum = 0;
            for ($i = 0; $i < $n; $i++) {
                $primaryDiagonalSum += $array[$i][$i];
                $secondaryDiagonalSum += $array[$i][$n - 1 - $i];
            }
            $primaryDiagonalAverage = $primaryDiagonalSum / $n;
            $secondaryDiagonalAverage = $secondaryDiagonalSum / $n;

            echo "Primary Diagonal - Sum: $primaryDiagonalSum, Average: " . round($primaryDiagonalAverage, 2) . "<br>";
            echo "Secondary Diagonal - Sum: $secondaryDiagonalSum, Average: " . round($secondaryDiagonalAverage, 2) . "<br>";

            // Display overall results
            echo "Overall Sum: $overallSum<br>";
            echo "Overall Average: " . round($overallSum / ($n * $n), 2) . "<br>";
            echo "Overall Min: $overallMin<br>";
            echo "Overall Max: $overallMax<br>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
