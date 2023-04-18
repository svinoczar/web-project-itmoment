<?php

    $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");

    $email = $_POST['email'];
    $password = $_POST['password'];


    if (isset($_POST["signin"])) {
        $query = "SELECT `id`, `group_admin` FROM `users` WHERE `email`= '$email' AND `password` = '$password'";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $my_row = mysqli_fetch_array($result);
        if (empty($my_row)){
            print("Error: " . $query . "<br>" . mysqli_error($link));
            header('Location: index.php');
        }
    else {
        session_start();
        $_SESSION['id'] = $my_row["id"];
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['admin'] = $my_row["group_admin"];
        $_SESSION['logged_in'] = true;
        header('Location: profile.php');
    }

    }
    mysqli_close($link)
?>
