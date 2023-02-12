<?php
  //ПОДКЛЮЧАЕМСЯ И ОТКЛЮЧАЕМСЯ В КАЖДОМ СКРИПТЕ(НЕ ЗАБЫВАЕМ!)
  $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ", "sql7597171");
  
  //ПРОВЕРКА НА ТО БЫЛА НАЖАТА ЛИ КНОПКА, ЕСЛИ ЕЕ НЕ БУДЕТ ТО БУДЕТ ЕРРОР. ЭТО НЕ ФОРМАЛЬНОСТЬ КОРОЧЕ
  //СТРУКТУРА БД(users) id(automated)|email|password|create_datetime
  if (isset($_GET["signup"])) {
    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT INTO `users` (email, password, create_datetime)
    VALUES ('$email', '$password', '$create_datetime')";
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