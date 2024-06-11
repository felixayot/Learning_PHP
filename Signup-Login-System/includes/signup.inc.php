<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // You can skip the sanitization and validation for now
    // It's best practice to sanitize user input while outputting data
    // on the browser in the application
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try {

        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // ERROR HANDLING
        $errors = [];
        if (is_input_empty($username, $email, $password)) {
            $errors["empty_input"] = "Please fill in all fields!";
        }
        if (is_email_invalid($email)) {
            $errors["email_invalid"] = "Please enter a valid email address!";
        }
        if (is_email_taken($pdo, $email)) {
            $errors["email_taken"] = "Email already taken!";
        }
        if (is_username_taken($pdo, $username)) {
            $errors["username_taken"] = "Username already taken!";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["signup_errors"] = $errors;
            header("Location: ../index.php");
            die();
        }

        // CREATE USER
        create_user($pdo, $username, $email, $password);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php?signup=error");
    exit();
    // echo "Error: Invalid request method";
}
