<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_lng.exe</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Welcome to AD-Activity-1</h1>
        <p>A simple PHP and CSS integration example</p>
    </header>

    <main>
        <section class="greeting">
            <h2>Greetings</h2>
            <p>
                <?php
                $name = "John Doe";
                $num = 69;

                echo "Hello $name. Your favorite number is $num.<br>";
                echo "Hello {$name}. Your favorite number is {$num}.<br>";
                ?>
            </p>
        </section>

        <section class="array-output">
            <h2>Array Output</h2>
            <p>
                <?php
                $str_arr = array("John", "Doe", "Jane", "Smith");

                foreach ($str_arr as $name) {
                    echo "Hello $name. ";
                }
                ?>
            </p>
        </section>

        <section class="price-calculation">
            <h2>Price Calculation</h2>
            <p>
                <?php
                $amount = 650;
                $discount = 25;

                echo "Price after discount: ";
                echo $amount - $amount / (100 / $discount);
                ?>
            </p>
        </section>

        <section class="dmc-characters">
            <h2>DMC 5 Characters</h2>
            <p>
                <?php
                $arrayNames = array("Dante", "Vergil", "Nero", "Lady");

                echo "Characters: ";
                foreach ($arrayNames as $name) {
                    echo "$name, ";
                }
                ?>
            </p>
        </section>

        <section class="verification">
            <h2>Verification</h2>
            <p>
                <?php
                $legal = false;
                $age = 0;

                echo "==Verification==<br>";
                while ($legal == false) {
                    echo "Age: $age - Not Legal<br>";
                    $age++;
                    if ($age == 18) {
                        $legal = true;
                    }
                }
                ?>
            </p>
            <h3>
                <?php 
                echo "Age: $age - Legal<br>";
                ?>
            </h3>
        </section>

    </main>

    <footer>
        <p>&copy; 2025 AD-Activity-1. All rights are not reserved.</p>
        <a href="page/secondPage.php">
            <button>Go to Second Page</button>
        </a>
    </footer>
</body>
</html>