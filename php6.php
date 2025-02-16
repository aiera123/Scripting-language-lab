<!DOCTYPE html>
<html lang="en">
<head>
    <title>form with php</title>
</head>
<body>
    <h1>Html form</h1>
    <form method="GET" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (isset($_GET["name"]) && isset($_GET["email"]))
            $name = $_GET["name"];
        $email = $_GET["email"];
        echo "<h1><u>Submitted Values:</u></h1>";
        echo "<h1>Name:" . $name . "</h1>";
        echo "<h1>Email:" . $email . "</h1>";
    }
    ?>
</body>
</html>
