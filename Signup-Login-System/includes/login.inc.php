<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {

        require_once "dbh.inc.php";
        require_once "login_model.inc.php";
        require_once "login_contr.inc.php";

        // ERROR HANDLING
        $errors = [];
        if (is_input_empty($username, $password)) {
            $errors["empty_input"] = "Please fill in all fields!";
        }

        $result = get_user($pdo, $username);

        if (is_username_invalid($result)) {
            $errors["username_invalid"] = "Please enter a valid username!";
        }
        if (!is_username_invalid($result) && is_password_invalid($password, $result["pwd"])) {
            $errors["password_invalid"] = "Please enter a valid password!";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["login_errors"] = $errors;
            header("Location: ../index.php");
            die();
        }

        // CREATE A SESSION
        $newSessionId = session_create_id();
        $sessionId = $newSessionId . "_" . $result["id"];
        session_id($sessionId);

        $_SESSION["user_id"] = $result["id"];
        $_SESSION["username"] = htmlspecialchars($result["username"]);

        $_SESSION["last_regenaration"] = time();

        header("Location: ../index.php?login=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("Location: ../index.php?login=error");
    exit();
    // echo "Error: Invalid request method";
}
