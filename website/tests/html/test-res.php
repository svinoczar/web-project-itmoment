<?php
    $data = $_COOKIE["result"];
    $test = $_COOKIE["test"];
    session_start();
    $email = $_SESSION["email"];
     
    $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");

    $query = "INSERT INTO `test_results` (email, result, test)
     VALUES ('$email', '$data', '$test')";

if (mysqli_query($link, $query)) {
    //ЭТО УДАЛИТЬ ПОТОМ  
    print("New record created successfully");
    
  } else {
    print("Error: " . $query . "<br>" . mysqli_error($link));
  }
    mysqli_close($link);
    header('Location: tests.html');

?>