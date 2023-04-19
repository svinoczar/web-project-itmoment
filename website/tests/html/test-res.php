<?php
    $data = $_COOKIE["result"];
    $table = $_COOKIE["table"];
    session_start();
    $email = $_SESSION["email"];
     
    $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");

    $query = "INSERT INTO $table (email, result)
     VALUES ('$email', '$result')";

if (mysqli_query($link, $query)) {
    //ЭТО УДАЛИТЬ ПОТОМ  
    print("New record created successfully");
    
  } else {
    print("Error: " . $query . "<br>" . mysqli_error($link));
  }
    mysqli_close($link);
    header('Location: tests.html');

?>