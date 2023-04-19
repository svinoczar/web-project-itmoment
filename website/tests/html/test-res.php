<?php
    $data = $_COOKIE["result"];
    $test = $_COOKIE["test"];
    session_start();
    $email = $_SESSION["email"];
     
    $link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");

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