<?php
/**
 * Task 5: Weather Report
 * Create a PHP script named weather_report.php that provides weather information based on temperature. Use a variable to store the temperature. Depending on the temperature range, display messages like "It's freezing!", "It's cool.", or "It's warm."
 */
include_once('./header.php')
    ?>

<body>
    <section class="w-11/12 mx-auto my-10 flex flex-col items-center">
        <h1 class="text-center text-2xl my-10">Weather Report</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <P>
                <input type="range" name="num" id="num" min="-20" max="50" value="<?php
                echo array_key_exists('num', $_POST) ? $_POST['num'] : 0
                    ?>"><span class="ml-3" id="demo"></span>
            </P>
            <input class="bg-indigo-500 my-5 p-3 w-full text-white cursor-pointer font-bold hover:bg-indigo-700"
                type="submit" value="Check">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $temperature = intval($_POST['num']);
            $result = '';
            if ($temperature <= 0) {
                $result = 'It\'s freezing!';
            } elseif ($temperature > 0 && $temperature <= 15) {
                $result = 'It\'s cool.dd';
            } else {
                $result = 'It\'s warm.';
            }
            $format = "<p>%s</p>";
            printf($format, $result);
        }
        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>
    <script>
        let slider = document.getElementById("num");
        let output = document.getElementById('demo')
        output.innerHTML = slider.value;
        slider.oninput = function () {
            output.innerHTML = this.value;
        }
    </script>
</body>

</html>