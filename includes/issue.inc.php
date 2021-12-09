<?php
    if(isset($_POST['submit-issue'])) {
        include_once 'db.inc.php';
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $issue = mysqli_real_escape_string($conn, $_POST['issue']);

        if(empty($email) || empty($issue)) {
            header("Location: ../index.php?issue=empty");
            exit();
        } else {
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?issue=invalidemail");
                exit();
            } else {
                $sql = "INSERT INTO issues (user_email, user_issue) VALUES ('$email', '$issue');";
                mysqli_query($conn,$sql);
                header("Location: ../index.php#contact-us?=success");
                exit();
            }
        }
    } else {
        header("Location: ../index.php");
        exit();
    }