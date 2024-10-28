<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Constants</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Using Constants</h1>

        <?php
        // Define constants
        define("PI", 3.14159);
        define("EULER", 2.71828);
        define("SPEED_OF_LIGHT", 299792458); // in meters per second
        define("GRAVITY", 9.81); // in meters per second squared
        define("PLANCKS_CONSTANT", 6.62607015E-34); // in J·s
        define("AVOGADROS_NUMBER", 6.02214076E+23); // particles per mole
        define("GAS_CONSTANT", 8.314); // in J/(mol·K)
        define("BOLTZMANN_CONSTANT", 1.380649E-23); // in J/K
        define("RADIUS_EARTH", 6371000); // in meters
        define("FARADAY_CONSTANT", 96485.33212); // in C/mol

        // Display the constants
        echo "<h2>Scientific Constants:</h2>";
        echo "PI: " . PI . "<br>";
        echo "Euler's Number (E): " . EULER . "<br>";
        echo "Speed of Light: " . SPEED_OF_LIGHT . " m/s<br>";
        echo "Gravity: " . GRAVITY . " m/s²<br>";
        echo "Planck's Constant: " . PLANCKS_CONSTANT . " J·s<br>";
        echo "Avogadro's Number: " . AVOGADROS_NUMBER . " particles/mol<br>";
        echo "Gas Constant: " . GAS_CONSTANT . " J/(mol·K)<br>";
        echo "Boltzmann Constant: " . BOLTZMANN_CONSTANT . " J/K<br>";
        echo "Radius of Earth: " . RADIUS_EARTH . " meters<br>";
        echo "Faraday's Constant: " . FARADAY_CONSTANT . " C/mol<br>";

        // Examples of how to use them
        echo "<h2>Examples of Using Constants:</h2>";
        echo "Circumference of a circle with radius 5: " . (2 * PI * 5) . "<br>";
        echo "Energy of a photon with frequency 500 THz: " . (PLANCKS_CONSTANT * 500E12) . " J<br>";
        echo "Weight of an object of mass 10 kg on Earth: " . (10 * GRAVITY) . " N<br>";
        echo "Number of molecules in 1 mole of substance: " . AVOGADROS_NUMBER . " molecules<br>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
