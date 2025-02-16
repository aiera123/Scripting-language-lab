<?php
session_start();
if (isset($_SESSION['loggedin']) == true) {
    header("location:dashboard.php");
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = "Anuradha";
    $password = "Dulal";
    if ($_POST["username"] === $username && $_POST["password"] == $password) {
        $_SESSION['loggedin'] = true;
        header ("location: dashboard.php");
        exit;
    } else {
        $error = "Invalid username or password!";
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <h1>Login </h1>
    <?php if (isset($error)) {
        echo "<p>$error</p>";
    }
    ?>
    <form method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" value="" required><br><br>
        <input type="submit" value="login">
    </form>
</body>
