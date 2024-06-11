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

    // Use prepared statements to prevent SQL injection
    $query = "UPDATE users SET username = :username, email = :email, pwd = :pwd WHERE id = 1;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $password);

    $stmt->execute();
    // $stmt->execute([$username, $email, $password]);

    $pdo = null;
    $stmt = null;

    header("Location: ../index.php?userupdate=success");
    // Use die() to close off any running connections and exit the script
    // exit() just exits the script without closing off any running connections
    die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php?userupdate=error");
    exit();
    // echo "Error: Invalid request method";
}
