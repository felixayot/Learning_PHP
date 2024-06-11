<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Form</title>
</head>
<body>
    <main>
        <form action="includes/formhandler.php" method="post">
            <label for="name">Name:</label><br>
            <input required type="text" name="name" id="name" placeholder="Enter your name"><br><br>

            <label for="age">Age:</label><br>
            <input required type="text" name="age" id="age" placeholder="Enter your age"><br><br>

            <label for="favouritelanguage">Choose Language</label><br>
            <select name="favouritelanguage" id="favouritelanguage"><br><br>
                <option value="PHP">PHP</option>
                <option value="JavaScript">JavaScript</option>
                <option value="Python">Python</option>
                <option value="Java">Java</option>
                <option value="C">C</option>
            </select><br><br>

            <button type="submit">Submit</button>

        </form>
    </main>
</body>
</html>