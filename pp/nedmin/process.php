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
        echo 'selam';
        header("Location: index.php");
    }else{
        header("Location: login.php?login=no");
    }
    
}

// update ve insert

// skill insert 
if(isset($_POST['insert_skills'])){
    $about_title = $_POST['about_title'];
    $cv_title = $_POST['cv_title'];
    $cv = $_POST['cv'];
    $skill_title = $_POST['skill_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];

    $insert_skill = $db -> prepare("INSERT INTO about_me SET
    about_title = '$about_title',
    cv_title = '$cv_title',
    cv = '$cv',
    skill_title = '$skill_title',
    first_skill = '$first_skill',
    second_skill = '$second_skill',
    third_skill = '$third_skill',
    first_counter = '$first_counter',
    second_counter = '$second_counter',
    third_counter = '$third_counter'
    ");
    $insert = $insert_skill -> execute();

    if ($insert) {
        header("Location: skills.php?insert=ok");
    } else {
        header("Location: skills.php?insert=no");
    }
}

// skill update
if(isset($_POST['update_skills'])){
    $about_title = $_POST['about_title'];
    $cv_title = $_POST['cv_title'];
    $cv = $_POST['cv'];
    $skill_title = $_POST['skill_title'];
    $first_skill = $_POST['first_skill'];
    $second_skill = $_POST['second_skill'];
    $third_skill = $_POST['third_skill'];
    $first_counter = $_POST['first_counter'];
    $second_counter = $_POST['second_counter'];
    $third_counter = $_POST['third_counter'];

    $update_skill = $db -> prepare("UPDATE about_me SET
    about_title = '$about_title',
    cv_title = '$cv_title',
    cv = '$cv',
    skill_title = '$skill_title',
    first_skill = '$first_skill',
    second_skill = '$second_skill',
    third_skill = '$third_skill',
    first_counter = '$first_counter',
    second_counter = '$second_counter',
    third_counter = '$third_counter' WHERE about_id=1
    ");

    $update = $update_skill -> execute();

    if ($update) {
        header("Location: skills.php?update=ok");
    } else {
        header("Location: skills.php?update=no");
    }
}

// contact insert
if(isset($_POST['insert_contact'])){
    $contact_title = $_POST['contact_title'];
    $content = $_POST['content'];
    $addresss = $_POST['addresss'];
    $addresss_link = $_POST['addresss_link'];
    $gsm = $_POST['gsm'];
    $email = $_POST['email'];

    $insert_contact = $db -> prepare("INSERT INTO contact SET
    contact_title = '$contact_title',
    content = '$content',
    addresss = '$addresss',
    addresss_link = '$addresss_link',
    gsm = '$gsm',
    email = '$email'
    ");
    $insert_c = $insert_contact -> execute();
    if ($insert_c) {
        header("Location: contact.php?insert_c=ok");
    } else {
        header("Location: contact.php?insert_c=no");
    }
}
// update contact
if(isset($_POST['update_contact'])){
    $contact_title = $_POST['contact_title'];
    $content = $_POST['content'];
    $addresss = $_POST['addresss'];
    $addresss_link = $_POST['addresss_link'];
    $gsm = $_POST['gsm'];
    $email = $_POST['email'];

    $update_contact = $db -> prepare("UPDATE contact SET
    contact_title = '$contact_title',
    content = '$content',
    addresss = '$addresss',
    addresss_link = '$addresss_link',
    gsm = '$gsm',
    email = '$email' WHERE contact_id=1
    ");
    $update_c = $update_contact -> execute();
    if ($update_c) {
        header("Location: contact.php?update_c=ok");
    } else {
        header("Location: contact.php?update_c=no");
    }
}
// main insert
if(isset($_POST['insert_main'])){
    $main_title = $_POST['main_title'];
    $main_title2 = $_POST['main_title2'];
    $job_title = $_POST['job_title'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $dicord = $_POST['discord'];

    $insert_main = $db -> prepare("INSERT INTO main SET
    main_title = '$main_title',
    main_title2 = '$main_title2',
    job_title = '$job_title',
    instagram = '$instagram',
    twitter = '$twitter',
    facebook = '$facebook',
    linkedin = '$linkedin',
    github = '$github',
    discord = '$dicord'
    ");
    $insert_m = $insert_main -> execute();
    if ($insert_m) {
        header("Location: about_us.php?insert_m=ok");
    } else {
        header("Location: about_us.php?insert_m=no");
    }
}

// main update
if(isset($_POST['update_main'])){
    $main_title = $_POST['main_title'];
    $main_title2 = $_POST['main_title2'];
    $job_title = $_POST['job_title'];
    $instagram = $_POST['instagram'];
    $twitter = $_POST['twitter'];
    $facebook = $_POST['facebook'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $dicord = $_POST['discord'];

    $update_main = $db -> prepare("UPDATE main SET
    main_title = '$main_title',
    main_title2 = '$main_title2',
    job_title = '$job_title',
    instagram = '$instagram',
    twitter = '$twitter',
    facebook = '$facebook',
    linkedin = '$linkedin',
    github = '$github',
    discord = '$dicord' WHERE main_id=1
    ");

    $update_m = $update_main -> execute();
    if ($update_m) {
        header("Location: about_us.php?update_m=ok");
    } else {
        header("Location: about_us.php?update_m=no");
    }
}

// setting insert
if(isset($_POST['insert_settings'])){
    $site_title = $_POST['site_title'];
    $logo_pic = $_POST['logo_pic'];
    $profil_foto = $_POST['profil_foto'];

    $insert_settings = $db -> prepare("INSERT INTO site_settings SET
    site_title = '$site_title',
    logo_pic = '$logo_pic',
    profil_foto = '$profil_foto'
    ");

    $insert_se = $insert_settings -> execute();
    if ($insert_se) {
        header("Location: settings.php?insert_se=ok");
    } else {
        header("Location: settings.php?insert_se=no");
    }
}
// settings update & password update
if(isset($_POST['update_settings'])){
    $site_title = $_POST['site_title'];
    $logo = $_POST['logo'];
    $passnew = $_POST['passnew'];
    $rpassnew = $_POST['rpassnew'];
    $eskisifre = sha1('password');
    $sorgu = $db -> prepare("SELECT * FROM user WHERE user_id=1 AND password='$eskisifre' ");
    $sifre = $sorgu -> execute();
    
    $update_settings = $db -> prepare("UPDATE site_settings SET
    site_title = '$site_title',
    logo = '$logo' WHERE settings_id=1
    ");
    $update_se = $update_settings -> execute();
    
    if($eskisifre !== $passnew){
        if ($passnew == $rpassnew) {
            if (strlen($passnew) >=6) {
                $passn = sha1($passnew);
                $newpassword = $db->prepare("UPDATE user SET password='$passn' WHERE user_id=1 ");
                $updatepass = $newpassword->execute();
                if($updatepass) {
                    if($update_se){
                        header("Location: logout.php");
                    }
                    else {
                        header("Location: settings.php?update_se=no");
                    }
                }
                else {
                    header("Location: settings.php?update_se=no");
                }
            }
            else {
                header("Location: settings.php?updatepass=lowchar");
            }
        } else {
            header("Location: settings.php?updatepass=inequal");
        }
    }
    else {
        header("Location: settings.php?updatepass=no");
    }

}




