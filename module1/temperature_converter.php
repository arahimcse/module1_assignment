<?php
/**
 * Task 2: Temperature Converter
 * Design a PHP program called temperature_converter.php that converts temperatures between Celsius and Fahrenheit. Provide a form where the user can input a temperature value and select the conversion direction (Celsius to Fahrenheit or vice versa). Display the converted temperature.
 */
include_once('./header.php');
?>

<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col items-center">
        <h1 class="my-5 text-3xl">Temperature Converter</h1>
        <form class="w-1/3 flex flex-col items-center my-5" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p class="my-2">
                <label for="temperature">Enter Temperature:</label><br />
                <input class="mt-[6px]" type="text" id="temperature" name="temperature" required value=<?php
                if (array_key_exists('temperature', $_POST)) {
                    echo $_POST["temperature"] ? $_POST["temperature"] : null;
                }
                ?>>
            </p>
            <p class="my-2">
                <label for="conversion">Select Conversion:</label><br />
                <select class="mt-[6px]" id="conversion" name="conversion">
                    <option value="celsius_to_fahrenheit">Celsius to Fahrenheit</option>
                    <option value="fahrenheit_to_celsius" <?php if (array_key_exists('conversion', $_POST)) {
                        echo ($_POST['conversion'] == 'fahrenheit_to_celsius') ? 'selected' : null;
                    }
                    ?>>Fahrenheit to Celsius
                    </option>
                </select>
            </p>
            <input class="bg-blue-400 text-white font-bold hover:bg-blue-500 cursor-pointer p-3 my-4 w-1/3"
                type="submit" value="Convert">

        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temperature = floatval($_POST["temperature"]);
            $conversion = $_POST["conversion"];
            $result = '';

            if ($conversion === "celsius_to_fahrenheit") {
                $result = ($temperature * 9 / 5) + 32;
                $result_unit = 'Fahrenheit';
            } elseif ($conversion === "fahrenheit_to_celsius") {
                $result = ($temperature - 32) * 5 / 9;
                $result_unit = 'Celsius';
            }
            $format = "<p>Result: %.2f %s</p>";
            printf($format, $result, $result_unit);
            unset($result);
        }

        ?>
        <span
            class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a
                href="./index.php">Back to Home</a></span>
    </section>
</body>

</html>