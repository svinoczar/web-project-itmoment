<?php
    
    $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ", "sql7597171");

    if (isset($_GET["signin"])) {
        $query = "SELECT * FROM `users` WHERE `email`= '$email' AND `password` = '$password' ";
        $result = mysqli_query($link, $query) or die(mysqli_error($link));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) { 
            print ("login_successful.php / profile.php"); // Обновить страницу для авторизованного пользователя
        } else {
            print("Error: " . $query . "<br>" . mysqli_error($link));
        }
    }
    mysqli_close($link)
?>