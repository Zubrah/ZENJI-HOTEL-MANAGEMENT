<?php

if(isset($_POST["sign-up-button"])){
    require ('db.php');

    $username = $_POST["Sign-up-Username"];
    $emailaddress = $_POST["Sign-up-Email Address"];
    $password = $_POST["Sign-up-Password"];
    $repeatpasword = $_POST["Sign-up-RepeatPassword"];

    if (empty($username) || empty($emailaddress) || empty($password) || empty($repeatpasword)) {
        // error message
        header("Location:../index.html.php?error= emptyfields&Sign-up-Username=".$username."Sign-up-Email Address=".$emailaddress);
        exit();
    
    }
    else if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL) & (!preg_match("/^[a-zA-Z0-9]*$/", $username))) {
        // error message
        header("Location:../index.html?error= invalidUsername&Sign-up-Username=".$username."Sign-up-Email Address=".$emailaddress);
        exit();
    } 
    else if (!filter_var($emailaddress, FILTER_VALIDATE_EMAIL)){
          // error message
          header("Location:../index.html?error= invalidMail&Sign-up-Username=".$username);
          exit();

    } else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        // error message
        header("Location:../index.html?error= invalidUsername&Sign-up-Username=".$username."Sign-up-Email Address=".$emailaddress);
        exit();
    }
    else if ($password !== $repeatpasword) {
        // error message
        header("Location:../index.html?error= passwordcheck&Sign-up-Username=".$username."Sign-up-Email Address=".$emailaddress);
        exit();
    }else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../index.html?error=sqlerror");
            exit();
        }else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $result_check = mysqli_stmt_num_rows($stmt);
            if ($result_check > 0 ) {
                header("Location: ../index.html?error=Usertaken");
            exit();

            }else {
                $sql = "INSERT INTO users (username, Email_address,pword) VALUES(?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:../index.html?error=sqlerror");
                    exit();
                }
                else {
                    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sss", $username, $emailaddress, $hashed_password);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../index.html?signup=success");
                    exit();
                    

                }
            }
        }
        
        
    }
    
}
else {
    header("Location: ././index.php");
    exit();
}
    


    
        






    








