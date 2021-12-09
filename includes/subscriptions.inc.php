<?php
    if(isset($_POST['submit-sub'])) {
        include_once 'db.inc.php';
        $email = mysqli_real_escape_string($conn, $_POST['email']);

        if(empty($email)) {
            header("Location: ../index.php?=missingEmail");
            exit();
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?=invalidEmail");
                exit();
            } else {
                $sql = "SELECT * FROM subscriptions WHERE user_email = '$email'";
                $result = mysqli_query($conn, $sql);
                $result_check = mysqli_num_rows($result);
                if($result_check > 0) {
                    header("Location: ../index.php?=alreadySubscribed");
                    exit();
                } else {
                    $sql = "INSERT INTO subscriptions (user_email) VALUES ('$email');";
                    mysqli_query($conn, $sql);
                    header("Location: ../index.php?=success");
                    exit();
                }
            }
        }
    } else {
        header("Location: ../index.php?=error");
        exit();
    }
?>