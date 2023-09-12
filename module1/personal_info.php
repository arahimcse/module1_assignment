<?php
/**
 Task 1: Personal Information Page
 Create a PHP file named personal_info.php that displays your personal information using variables and the echo statement. Include your
 name, age, country, and a brief introduction.
*/
include_once('./header.php');
?>
<body>
    <section class="w-11/12 mx-auto mt-10 flex flex-col">
        <h1 class="text-2xl self-center">Welcome to Task 1: Personal Information Page</h1>
        <article class="mt-10">
            <h1 class="text-xl"><?php 
            $name="Abdur Rahim"; 
            $age = 32; 
            $country = "Bangladesh"; 
            $format = "Hi, my name is %s. I come from %s. l'm %d years old.";
            printf($format, $name, $country, $age); ?>
            </h1>
            <p class="ml-5"> - <?php 
            $briefDecription ="I live in Tangail. There are 4 people in my family. They are Sumaia Akter, Rajuwan Ahammed, and Safuwan Ahammed, and Mim. I'm a student at MBSTU. My major is CSE. My favorites subject is Software Engineering. My hobbies are watch live football and cricket matches. In my free time, I also enjoy reading news paper/internet browsing. I don't like gossiping. My favorite food is fish. I would like to be a Full Stack Web Developer";
            echo $briefDecription;
            ?></p>
        </article>
        <span class="flex flex-row justify-center mt-10 bg-blue-500 text-white p-3 font-bold w-[200px] mx-auto hover:bg-blue-400"><a href="./index.php">Back to Home</a></span>
    </section>
</body>
</html>