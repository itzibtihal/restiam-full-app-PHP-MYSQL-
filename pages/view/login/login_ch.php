<?php
include '../../../config/connection.php';
error_reporting(0);
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username-log'];
    $password = $_POST['password-log'];

    $sql = "SELECT * FROM users WHERE username='" . $username . "'";
    $result = mysqli_query($connexion, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        // Verify the entered password against the hashed password from the database
        if (password_verify($password, $row['password'])) {
            if ($row["Role_Id"] == "1") {
                $_SESSION['username'] = $username;
                $_SESSION['Role_Id'] = "1";
                header("location:admin.php");
            } else if ($row["Role_Id"] == "2") {
                $_SESSION['username'] = $username;
                $_SESSION['Role_Id'] = "2";
                header("location:shipping.php");
            } else if ($row["Role_Id"] == "3") {
                $_SESSION['username'] = $username;
                $_SESSION['Role_Id'] = "3";
                header("location:client.php");
            } else {
                $message = "Unknown Role_Id";
                $_SESSION['logMessage'] = $message;
                header("location:login.php");
            }
        } else {
            $message = "Username or password do not match";
            $_SESSION['logMessage'] = $message;
            header("location:login.php");
        }
    } else {
        $message = "Username not found";
        $_SESSION['logMessage'] = $message;
        header("location:login.php");
    }
}
?>
