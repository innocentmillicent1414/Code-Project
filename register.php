<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $gmail = $_POST['email'];
    $password = $_POST['pass'];

    if (!empty($gmail) && !empty($password) && !is_numeric($gmail)) {
        $query = "INSERT INTO JOCODE (FirstName, LastName, Gender, ContactAddress, Address, Email, Password) VALUES ('$firstname', '$lastname', '$gender', '$contact', '$address', '$gmail', '$password')";
        if (mysqli_query($con, $query)) {
            echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
        } else {
            echo "<script type='text/javascript'>alert('Error: " . mysqli_error($con) . "');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please Enter some Valid Information');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register">
        <h2>Register</h2>
        <form method="POST" action="register.php">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Address</label>
            <input type="text" name="contact" required>
            <label>Address</label>
            <input type="text" name="address" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="pass" required>
            <input type="submit" value="Submit">
        </form>
        <p>By clicking the register button, you agree to our<br>
            <a href="">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
        </p>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>
