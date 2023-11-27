<?php

session_start();

@include("config.php");

if (isset($_SESSION["regSuccessMessage"])) {
    echo "<script type=\"text/javascript\">"."alert('Kayıt başarıyla gerçekleştirildi.');"."</script>";
    unset($_SESSION["regSuccessMessage"]);
}

if(isset($_POST['regSubmit'])) {

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pswd = $_POST['pswd'];
    $pswdVerify = $_POST['pswdVerify'];

    $hashedPassword = password_hash($pswd, PASSWORD_DEFAULT);

    $select = " SELECT * FROM form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    
    if ($result) {
        if(mysqli_num_rows($result) > 0) {
            //$_SESSION['error_message'] = 'Bu kullanıcı zaten kayıtlı!';
            $error[] = 'Bu kullanıcı zaten kayıtlı!';
            //echo '<script type="text/javascript">','openRegScreen();','</script>';
        } else {
            $insert = "INSERT INTO form (userName, email, pswd) VALUES ('$userName', '$email', '$hashedPassword')";
                if (mysqli_query($conn, $insert)) {
                    $_SESSION["regSuccessMessage"] = "Kayıt başarıyla gerçekleştirildi.";
                    header('Location: logreg.php');
                }
            /*
            if ($pswd != $pswdVerify) {
                //$_SESSION['error_message'] = 'Şifreler eşleşmiyor!';
                //$error[] = 'Şifreler Eşleşmiyor!';
                //echo '<script type="text/javascript">','openRegScreen();','</script>';
            }
            */
        }
    }
}

?>
