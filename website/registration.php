<?php
  //ПОДКЛЮЧАЕМСЯ И ОТКЛЮЧАЕМСЯ В КАЖДОМ СКРИПТЕ(НЕ ЗАБЫВАЕМ!)
  $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");
  $email = $_POST['email'];
  $password = $_POST['password'];
  //ПРОВЕРКА НА ТО БЫЛА НАЖАТА ЛИ КНОПКА, ЕСЛИ ЕЕ НЕ БУДЕТ ТО БУДЕТ ЕРРОР. ЭТО НЕ ФОРМАЛЬНОСТЬ КОРОЧЕ
  //СТРУКТУРА БД(users) id|email|password|create_datetime
  if (isset($_POST["signup"])) {
    //$create_datetime = date("Y-m-d H:i:s");
    $id = mb_substr((hash_hmac('md5', $email, '367970goof', false)),0,-20);
    //$query = "INSERT INTO `users` (id, email, password, create_datetime)
    $query = "INSERT INTO `users` (id, email, password, group_admin)
    VALUES ('$id', '$email', '$password', '0')";
    //mysqli_query и делает запрос
    if (mysqli_query($link, $query)) {
      //ЭТО УДАЛИТЬ ПОТОМ  
      print("New record created successfully");
      
    } else {
      print("Error: " . $query . "<br>" . mysqli_error($link));
    }
      }
  header('Location: index.php');
  mysqli_close($link);
?> 
