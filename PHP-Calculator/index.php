<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input required type="number" name="num1" placeholder="Number 1"><br><br>
        <select name="operator">
            <!-- <option>None</option> -->
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select><br><br>
        <input required type="number" name="num2" placeholder="Number 2">
        <br><br>
        <button>Calculate</button>
    </form>

    <?php
    // Get/Retrieve data from form inputs
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = filter_input(INPUT_POST, "num1", FILTER_SANITIZE_NUMBER_FLOAT);
        // $num2 = $_POST["num2"];
        $num2 = filter_input(INPUT_POST, "num2", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
        // FILTER_SANITIZE_STRING is deprecated in PHP 8.1.0
        // Use htmlspecialchars() instead
        // $operator = filter_input(INPUT_POST, "operator", FILTER_SANITIZE_STRING);

        // Error handling
        $errors = false;
        if (empty($num1) || empty($num2) || empty($operator)) {
            echo "<p>Please fill in all the fields!</p>";
            $errors = true;
        } else if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p>Please enter a valid number!</p>";
            $errors = true;
        } else {
            // Perform calculation
            if (!$errors) {
                $value = 0;
                switch ($operator) {
                    case "add":
                        $value = $num1 + $num2;
                        break;
                    case "subtract":
                        $value = $num1 - $num2;
                        break;
                    case "multiply":
                        $value = $num1 * $num2;
                        break;
                    case "divide":
                        if ($num2 == 0) {
                            echo "<p>Cannot divide by zero!</p>";
                        } else {
                            $value = $num1 / $num2;
                        }
                        break;
                    default:
                        echo "<p>Invalid operator!</p>";
                        break;
                }

                echo "<br><p>Result = " . $value . "</p>";
            }
        }
    }
    
    ?>
</body>
</html>