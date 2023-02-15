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
        else {
            // $query = "SELECT `admin` FROM `users` WHERE `email`= '$email' AND `password` = '$password'";
            // $admin_status = mysqli_query($link, $query);
            $admin_status = 1;
            session_start();
            $_SESSION_id = $user_id;
            $_SESSION_email = $email;
            $_SESSION_password = $password;
            $_SESSION_status = $admin_status;
            if ($admin_status = 0){
                header('Location: profile.php');
            }
            else {
                header('Location: profile.php');
            }
        }
    }
    mysqli_close($link)
?>