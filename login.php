<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password) && !is_numeric($email)) {
        $query = "SELECT * FROM JOCODE WHERE Email = '$email' AND Password = '$password' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['id'];
            header("Location: index.php"); // Redirect to the main page after successful login
            die;
        } else {
            echo "<script type='text/javascript'>alert('Invalid email or password');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please enter some valid information');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login">
        <h2>Login</h2>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" value="Submit">
        </form>
        <p>Not have an account? <a href="register.php">Register here</a></p>
    </div>
</body>
</html>
