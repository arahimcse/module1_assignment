<?php
/**
 * Task 7: Simple Calculator
 * Build a PHP calculator named simple_calculator.php that performs basic arithmetic operations. Provide input fields for two numbers and a dropdown to select the operation (addition, subtraction, multiplication, division). Display the result of the chosen operation.
 */
include_once('./header.php')
    ?>

<body>
    <section class="w-11/12 mx-auto my-10 flex flex-col items-center">
        <h1 class="text-center text-2xl my-10">Comparison Tool</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <P>
                <label for="num1">Number 1: </label><br />
                <input class="mt-2" type="number" name="num1" id="num1" value="<?php
                echo array_key_exists('num1', $_POST) ? $_POST['num1'] : null
                    ?>" required>
            </P>
            <p class="mt-4">
                <label for="operation">Select Operation:</label><br />
                <select class="w-full" id="operation" name="operation">
                    <option value="addition">Addition</option>
                    <option value="subtraction" <?php if (array_key_exists('operation', $_POST)) {
                        echo ($_POST['operation'] === 'subtraction') ? 'selected' : null;
                    }
                    ?>>Subtraction</option>
                    <option value="multiplication" <?php if (array_key_exists('operation', $_POST)) {
                        echo ($_POST['operation'] === 'multiplication') ? 'selected' : null;
                    }
                    ?>>Multiplication</option>
                    <option value="division" <?php if (array_key_exists('operation', $_POST)) {
                        echo ($_POST['operation'] === 'division') ? 'selected' : null;
                    }
                    ?>>Division</option>
                </select>
            </p>
            <P class="mt-4">
                <label for="num2">Number 2: </label><br />
                <input class="mt-2" type="number" name="num2" id="num2" value="<?php
                echo array_key_exists('num2', $_POST) ? $_POST['num2'] : null
                    ?>" required>
            </P>
            <input class="bg-indigo-500 my-5 p-3 w-full text-white cursor-pointer font-bold hover:bg-indigo-700"
                type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number1 = intval($_POST['num1']);
            $number2 = intval($_POST['num2']);
            $operator = strval($_POST['operation']);
            $result = '';
            if ($operator === 'addition') {
                $result = $number1 + $number2;
            } elseif ($operator === 'subtraction') {
                $result = $number1 - $number2;
            } elseif ($operator === 'multiplication') {
                $result = $number1 * $number2;
            } elseif ($operator == 'division') {
                $result = ($number2 != 0) ? ($number1 / $number2) : "Error: Division by zero is not allowed.";
            } else {
                $result = "Error: Invalid operation.";
            }

            $format = "<p>Result: %0.2f</p>";
            printf($format, $result);
        }
        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>
</body>

</html>