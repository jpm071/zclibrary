<?php
session_start();

if(isset($_POST['reset-submit'])) {
    $pass = $_POST['password'];
    $pass_rep = $_POST['password-rep'];
    $email = $_SESSION['email'];

    if (empty($pass) || empty($pass_rep)){
        $_SESSION['m_fail'] = "password fields are empty!";
        header("location: ../index.php?newpass=empty");
        exit();
    }
    else if ($pass != $pass_rep) {
        $_SESSION['m_fail'] = "password fields are not equal!";
        header("location: ../index.php?newpass=notmatch");
        exit();
    }

    include ('../db_conn.php');

    $sql = "UPDATE users SET password = ? WHERE email = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)){
        echo "there was an error!";
        exit();
    }
    else {
        $new_pwd_hash = password_hash($pass, PASSWORD_DEFAULT);
        mysqli_stmt_bind_param($stmt, "ss", $new_pwd_hash, $email);
        mysqli_stmt_execute($stmt);

        $_SESSION['suc_mess'] = "Password has been successfully changed!";
        header("location: ../index.php?newpass=success");
        exit();
    }

}
else{
    $_SESSION['m_fail'] = "unexpected error occured!";
    header("location: ../index.php");
    exit();
}