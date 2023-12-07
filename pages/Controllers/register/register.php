<?php

include "db.php";

session_start();

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $confirmPwd = $_POST['confirmPassword'];
    $role = 3;




    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) ||empty($address)||empty($phone)|| empty($username)||empty($confirmPwd)) {
        echo "Please fill in all fields.";
    } elseif ($password !== $confirmPwd) {
        echo "Passwords do not match. Please try again.";
    } else {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);


        $sql = "INSERT INTO `users` (`first_name`, `last_name`, `email`, `phone`, `address` , `Creation_Date` , `username`, `password` ,`Role_Id`)
                VALUES (?, ?, ?, ?, ?,NOW(),?,?,?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {

            $stmt->bind_param("sssssssi", $first_name, $last_name, $email, $phone, $address, $username, $hashedPassword, $role);
            if ($stmt->execute()) {
                $_SESSION['email'] = $email;
                $path = "http://localhost/login/log.php";
                header("location:" . $path);
                exit();
            } else {
                echo "Error: Registration failed.";
            }
        } else {
            echo "Error";
        }
    }
}