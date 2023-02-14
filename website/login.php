<?php
    
    $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ", "sql7597171");

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_POST["signin"])) {
        $query = "SELECT `id` FROM `users` WHERE `email`= '$email' AND `password` = '$password'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $my_row = mysqli_fetch_array($result);
        if (empty($my_row)){ 
            print("Error: " . $query . "<br>" . mysqli_error($link));
            header('Location: index.php');
        }     
    if (!empty($my_row['user_id'])) {
        session_start();
        $_SESSION_id = $user_id;
        $_SESSION_email = $email;
        $_SESSION_password = $password;
        header('Location: profile.php');
    }
    
    }
    mysqli_close($link)
?>