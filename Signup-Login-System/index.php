<?php
    require_once 'includes/config_session.inc.php';
    require_once 'includes/signup_view.inc.php';
    require_once 'includes/login_view.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Log In System</title>
</head>
<body>
    <h3>Sign Up</h3>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username" reqired><br><br>
        <input type="email" name="email" placeholder="Email" reuired><br><br>
        <input type="password" name="password" placeholder="Password" reuired><br><br>
        <button>Sign Up</button><br><br>
    </form>

    <?php
        check_signup_errors();
    ?>

    <h3>Log In</h3>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username"><br><br>
        <!-- <input type="email" name="email" placeholder="Email"><br><br> -->
        <input type="password" name="password" placeholder="Password"><br><br>
        <button>Log In</button><br><br>
    </form>

    <?php
        // echo $_SERVER["SERVER_NAME"];
        // echo "<br>";
        // echo $_SERVER["HTTP_HOST"];
        // echo "<br>";
        // echo $_SESSION["signup_errors"];
        // echo "<br>";
        // echo $_SESSION['last_regeneration'];
        check_login_errors();
    ?>

</body>
</html>
