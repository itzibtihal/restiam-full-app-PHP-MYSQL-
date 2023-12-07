<?php

include '../../../config/connection.php' ;
error_reporting(0);
session_start();
    
if ($_SERVER["REQUEST_METHOD"]=="POST") {
   $username = $_POST['username-log'];
   $password = $_POST['password-log'];
   

   $sql = "SELECT * FROM users WHERE username='".$username."' AND password = '".$password."'";
   $result = mysqli_query($connexion, $sql);
   // $row = mysqli_fetch_assoc($result);
   $row = mysqli_fetch_array($result);

   if($row["Role_Id"]=="1"){
      $_SESSION['username']=$name;
      $_SESSION['Role_Id']="1";
      header("location:admin.php");
   }
   else if($row["Role_Id"]=="2"){
      $_SESSION['username']=$name;
      $_SESSION['Role_Id']="2";
      header("location:shipping.php");
   }
   else if($row["Role_Id"]=="3"){
      $_SESSION['username']=$name;
      $_SESSION['Role_Id']="3";
      header("location:client.php");
   }
   else {
       session_start();
       $message = "username or password do not match ";
       $_SESSION['logMessage']=$message ;
       header("location:login.php");
       
    }
 
}
    
//    if (mysqli_num_rows($result) > 0) {
//        if ($row["password"] == $password) {
//            $successMessage = "counte created successfully";
//            header("location:../index.php");
//            exit;

//        }
//    } else {
//        $errorMessage = "user name or the password are incorect";
//    }
// }
   
