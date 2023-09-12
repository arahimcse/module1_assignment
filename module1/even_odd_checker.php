<?php
/**
 * Task 4: Even or Odd Checker
 * Build a PHP program called even_odd_checker.php that checks whether a given number is even or odd. Provide an input field where the user can enter a number. Display a message indicating whether the number is even or odd.
 * 
 */
include_once('./header.php')
    ?>

<body>
    <section class="w-11/12 mx-auto my-10 flex flex-col items-center">
        <h1 class="text-center text-2xl my-10">Even or Odd chekcker</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <P>
                <label for="num">Enter Number</label><br>
                <input class="mt-3" type="number" name="num" id="num" value="<?php
                echo array_key_exists('num', $_POST) ? $_POST['num'] : null
                    ?>">
            </P>
            <input class="bg-indigo-500 my-5 p-3 w-full text-white cursor-pointer font-bold hover:bg-indigo-700"
                type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $number = intval($_POST['num']);
            $result = '';
            if ($number % 2 == 0) {
                $result = 'Even';
            } else {
                $result = 'Odd';
            }

            $format = "<p>%d is a \"%s\" number</p>";
            printf($format, $_POST['num'], $result);
        }
        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>
</body>

</html>