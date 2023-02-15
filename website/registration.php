<?php
  //ПОДКЛЮЧАЕМСЯ И ОТКЛЮЧАЕМСЯ В КАЖДОМ СКРИПТЕ(НЕ ЗАБЫВАЕМ!)
  $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ", "sql7597171");
  
  //ПРОВЕРКА НА ТО БЫЛА НАЖАТА ЛИ КНОПКА, ЕСЛИ ЕЕ НЕ БУДЕТ ТО БУДЕТ ЕРРОР. ЭТО НЕ ФОРМАЛЬНОСТЬ КОРОЧЕ
  //СТРУКТУРА БД(users) id|email|password|create_datetime
  if (isset($_GET["signup"])) {
    $create_datetime = date("Y-m-d H:i:s");
    $id = mb_substr((hash_hmac('md5', $email, 'pnhchmo', false)),0,-20);
    $query = "INSERT INTO `users` (id, email, password, create_datetime)
    VALUES ('$id', '$email', '$password', '$create_datetime')";
    //mysqli_query и делает запрос
    if (mysqli_query($link, $query)) {
      //ЭТО УДАЛИТЬ ПОТОМ  
      print("New record created successfully");
    } else {
      print("Error: " . $query . "<br>" . mysqli_error($link));
    }
      }
  mysqli_close($link)
?> 
