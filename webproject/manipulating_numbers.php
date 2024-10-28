<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulating Numbers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Manipulating Numbers</h1>

        <?php
        // Sample data
        $quizzes = [80, 85, 90]; // Example quiz scores (3 to 5 quizzes)
        $projects = [75]; // Example project score (1 to 2 projects)
        $midtermExam = 88; // Midterm exam score

        // Calculate averages
        $averageQuizzes = array_sum($quizzes) / count($quizzes);
        $averageProjects = array_sum($projects) / count($projects);

        // Calculate grades
        $grade = ($averageQuizzes * 0.30) + ($averageProjects * 0.20) + ($midtermExam * 0.50);
        
        // For demonstration, let's assume a tentative final score
        $tentativeFinalExam = 90; // Tentative final exam score
        $finalGrade = ($grade + $tentativeFinalExam) / 2; // Final-final grade

        // Display results
        echo "<h2>Results:</h2>";
        echo "Average Quizzes: " . number_format($averageQuizzes, 2) . "<br>";
        echo "Average Projects: " . number_format($averageProjects, 2) . "<br>";
        echo "Midterm Exam Score: " . $midtermExam . "<br>";
        echo "Computed Grade: " . number_format($grade, 2) . "<br>";
        echo "Tentative Final Exam Score: " . $tentativeFinalExam . "<br>";
        echo "Final-Final Grade: " . number_format($finalGrade, 2) . "<br>";
        ?>

        <a href="index.php">Back to Main Page</a>
        <footer>
            <p>Created by Mc Bill Kline U. Ventic | Date Created: <?= date('Y-m-d') ?></p>
        </footer>
    </div>
</body>
</html>
