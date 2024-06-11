<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // You can skip the sanitization and validation for now
    // It's best practice to sanitize user input while outputting data
    // on the browser in the application
    $userSearch = $_POST["usersearch"];


    try {
        
    require_once "includes/dbh.inc.php";

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM posts WHERE user_id = :usersearch;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":usersearch", $userSearch);


    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }

} else {
    header("Location: ../index.php?usersearch=error");
    exit();
    // echo "Error: Invalid request method";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Posts</title>
</head>
<body>
    <section>
    <h3>Search Results:</h3>

    <?php
    if (empty($results)) {
        echo "<div>";
        echo "<p>No results found</p>";
        echo "</div>";
    } else {
        foreach ($results as $result) {
            echo "<div>";
            echo "<h4>" . htmlspecialchars($result["user_id"]) . "</h4>";
            echo "<p>" . htmlspecialchars($result["content"]) . "</p>";
            echo "<p>" . htmlspecialchars($result["created_at"]) . "</p>";
            echo "</div>";
        }
    }

    ?>
    </section>

</body>
</html>