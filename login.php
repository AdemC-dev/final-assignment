<?php 

session_start();

@include("config.php");

if(isset($_POST['logSubmit'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pswd = $_POST['pswd'];

    $select = " SELECT * FROM form WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if ($result) {
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            $_SESSION["userName"] = $row["userName"];
            $hashedPassword = $row["pswd"];

            if (password_verify($pswd, $hashedPassword)) {
                $_SESSION["email"] = $row["email"];
                $_SESSION['logSuccessMessage'] = "Giriş başarıyla gerçekleştirildi.";
                header('Location: logged.php');
            } else {
                //$error2[] = 'E-posta veya Şifre Yanlış!';
            }
        } else {
            //$error2[] = 'E-posta veya Şifre Yanlış!';
        }
    }
};
?>
