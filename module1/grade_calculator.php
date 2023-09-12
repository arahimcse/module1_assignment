<?php
/**
 * Task 3: Grade Calculator
 * Develop a PHP script named grade_calculator.php that computes the average of three test scores and determines the corresponding letter grade. Create a form where the user can input three test scores. Calculate the average and display it along with the corresponding grade (A, B, C, D, F).
 */
include_once('./header.php')
    ?>

<body>
    <section class="w-11/12 mx-auto my-10 flex flex-col items-center">
        <h1 class="my-5 text-3xl text-center">Grade Calculator</h1>
        <form class="flex flex-col items-center" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p class="my-2">
                <label for="test1">Test 1 Score:</label><br />
                <input type="number" id="test1" name="test1" value=<?php
                echo array_key_exists('test1', $_POST) ? $_POST['test1'] : null
                    ?> required>
            </p>

            <p class="my-2">
                <label for="test2">Test 2 Score:</label><br />
                <input type="number" id="test2" name="test2" value=<?php
                echo array_key_exists('test2', $_POST) ? $_POST['test2'] : null
                    ?> required>
            </p>

            <p class="my-2">
                <label for="test3">Test 3 Score:</label><br />
                <input type="number" id="test3" name="test3" value=<?php
                echo array_key_exists('test3', $_POST) ? $_POST['test3'] : null
                    ?> required>
            </p>

            <input class="w-full p-3 bg-red-400 hover:bg-red-500 cursor-pointer text-white font-bold text-xl mb-10"
                type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $test1 = intval($_POST["test1"]);
            $test2 = intval($_POST["test2"]);
            $test3 = intval($_POST["test3"]);

            // Calculate the average of the test scores
            $average = ($test1 + $test2 + $test3) / 3;

            // Determine the corresponding letter grade
            $grade = '';
            if ($average >= 80) {
                $grade = 'A+';
            } elseif ($average >= 70) {
                $grade = 'A';
            } elseif ($average >= 60) {
                $grade = 'A-';
            } elseif ($average >= 50) {
                $grade = 'B';
            } elseif ($average >= 40) {
                $grade = 'C';
            } elseif ($average >= 33) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }

            printf("<p>Average Score: %d</p>", $average);
            echo "<p>Letter Grade: $grade</p>";
        }
        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>

</body>

</html>