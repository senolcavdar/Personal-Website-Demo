<?php

include 'connect.php';
ob_start();
session_start();

//admin kayıt
if (isset($_POST['signup'])) {
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];

    //şifre uyuşma kontrolü
    if ($password_1 === $password_2) {
        //echo 'şifreler aynı';
        //şifre karakter kontrolü
        if (strlen($password_1) >= 6) {
            //echo 'başarılı';

            $admin_control = $db->prepare("SELECT * FROM user");
            $admin_control->execute();
            $has_admin = $admin_control->rowCount();
            if ($has_admin == 0) {
                $pass = sha1($password_1);
                $admin_signup = $db->prepare("INSERT INTO user SET
                user_name='$user_name',
                email='$email',
                password='$pass'");

                $insert = $admin_signup->execute();

                if ($insert) {
                   // echo 'başarılı';
                    header("Location: login.php?status=ok&user_name=$user_name");
                } else {
                    //echo 'başarısız';
                    header("Location: register.php?register=no");
                }
            } else {
                //echo 'kayıtlı admin mevcut';
                header("Location: register.php?register=hasadmin");
            }
        } else {
            //echo 'şifre kısa';
            header("Location: register.php?register=lowchar");
        }
    } else {
        //echo 'şifreler farklı';
        header("Location: register.php?register=inequal");
    }
}
//Admin  giriş
if (isset($_POST['login'])) {
    $user_name = $_POST['user_name'];
    $pass = sha1($_POST['password']);

    $login = $db->prepare("SELECT * FROM user WHERE user_name='$user_name' and password='$pass'");
    $login ->execute();

    $count = $login -> rowCount();

    if($count == 1){
        $_SESSION['user_name'] = $user_name;
        header("Location: index.php");
    }else{
        header("Location: login.php?login=no");
    }

}