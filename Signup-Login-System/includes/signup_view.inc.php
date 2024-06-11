<?php

declare(strict_types=1);

function check_signup_errors() {

    // echo $_SESSION['last_regeneration'];

    if (isset($_SESSION['signup_errors'])) {
        $errors = $_SESSION['signup_errors'];

        echo "<br>";
        // echo $_SESSION['signup_errors'];

        foreach ($errors as $error) {
            echo "<p style='color: red'>" . $error . "</p>" . "<br>";
        }

        unset($_SESSION['signup_errors']);
    } else if (isset($_GET['signup']) && $_GET['signup'] == 'success') {
        echo "<br>";
        echo "<p style='color: green'>Sign up successful!</p>";
    }
}
