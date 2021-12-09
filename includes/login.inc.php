<?php
    session_start();
    if(isset($_POST['submit-login'])) {
        include_once 'db.inc.php';
        $name = mysqli_real_escape_string($conn, $_POST['username']);
        $pswd = mysqli_real_escape_string($conn, $_POST['pswd']);

        if(empty($name) || empty($pswd)) {
            header("Location: ../index.php?=loginError");
            exit();
        } else {
            $sql = "SELECT * FROM signup WHERE user_name = '$name'";
            $result = mysqli_query($conn, $sql);
            $result_check = mysqli_num_rows($result);
            if($result_check < 1) {
                header("Location: ../index.php?=loginError");
                exit();
            } else {
                 if($row = mysqli_fetch_assoc($result)) {
                     $hashedPswdCheck = password_verify($pswd, $row['user_pswd']);
                     if($hashedPswdCheck == false) {
                         header("Location: ../index.php?=loginError");
                         exit();
                     } elseif($hashedPswdCheck == true) {
                         $_SESSION['u_id'] = $row['user_id'];
                         $_SESSION['u_name'] = $row['user_name'];
                         $_SESSION['u_email'] = $row['user_email'];
                         header("Location: ../index.php?=loginSuccess");
                         exit();
                     }
                 }
            }
        }

    } else {
        header("Location: ../index.php?=loginError");
        exit();
    }