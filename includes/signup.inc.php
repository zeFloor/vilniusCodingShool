<?php
    if(isset($_POST['submit-signup'])) {
        include_once 'db.inc.php';
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pswd = mysqli_real_escape_string($conn, $_POST['pswd']);

        if(empty($name) || empty($email) || empty($pswd)) {
            header("Location: ../index.php?signup=emptyInputBar");
            exit();
        } else {
            if(!preg_match("/^[a-zA-Z]*$/", $name)) {
                header("Location: ../index.php?signup=nameError");
                exit();
            } else {
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: ../index.php?signup=emailError");
                    exit();
                } else {
                    $sql = "SELECT * FROM signup WHERE user_name = '$name'";
                    $result = mysqli_query($conn, $sql);
                    $result_check = mysqli_num_rows($result);
                    if($result_check > 0) {
                        header("Location: ../index.php?signup=usernameTaken");
                        exit();
                    } else {
                        $hashedPsdw = password_hash($pswd, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO signup (user_name, user_email, user_pswd) VALUES ('$name', '$email', '$hashedPsdw');";
                        mysqli_query($conn, $sql);
                        header("Location: ../index.php?signup=success");
                        exit();
                    }
                }
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
    