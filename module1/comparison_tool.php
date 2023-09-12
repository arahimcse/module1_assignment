<?php
/**
 * Task 6: Comparison Tool
 * Develop a PHP tool named comparison_tool.php that compares two numbers and displays the larger one using the ternary operator. Create a form where the user can input two numbers. Use the ternary operator to determine the larger number and display the result.
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

            // Use the ternary operator to determine the larger number
            $largerNumber = ($number1 > $number2) ? $number1 : $number2;

            $format = "<p>The larger number is: %d</p>";
            printf($format, $largerNumber);
        }
        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>
</body>

</html>