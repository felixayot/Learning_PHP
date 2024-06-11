<?php

// Handle User Input

// Use $_SERVER["REQUEST"] global variable to
// check if the form was submitted using
// the POST method(The intended method for submitting forms)
// Not just submitting the form
// Using isset() to check if the form was submitted
// does not guarantee that the form was submitted using the POST method

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Use htmlspecialchars() or htmlentities() to prevent XSS(Cross-Site Scripting) attacks
    $name = htmlspecialchars($_POST["name"]);
    $age = htmlspecialchars($_POST["age"]);
    $favouritelanguage = htmlspecialchars($_POST["favouritelanguage"]);

    // Check if any of the fields are empty
    // Never rely on client side validation
    // Always validate on the server side
    // Some users can override client side security validations
    // using browser developer tools
    if (empty($name) || empty($age) || empty($favouritelanguage)) {
        header("Location: ../index.php?submit=empty");
        echo "Please fill in all the fields!";
        exit();
    }

    echo "User Information: <br>";
    echo "Name: " . $name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Favourite Language: " . $favouritelanguage . "<br>";

    // Save the user information to a file
    // Redirect the user to the index page
    // to prevent them from accessing private files
    header("Location: ../index.php?submit=success");
} else {
    header("Location: ../index.php?submit=failed");
}
