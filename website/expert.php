<?php
  //ПОДКЛЮЧАЕМСЯ И ОТКЛЮЧАЕМСЯ В КАЖДОМ СКРИПТЕ(НЕ ЗАБЫВАЕМ!)
  $link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
  
  //ПРОВЕРКА НА ТО БЫЛА НАЖАТА ЛИ КНОПКА, ЕСЛИ ЕЕ НЕ БУДЕТ ТО БУДЕТ ЕРРОР. ЭТО НЕ ФОРМАЛЬНОСТЬ КОРОЧЕ
  //СТРУКТУРА БД(users) id|email|password|create_datetime
  if (isset($_GET["submit"])) {
    session_start();
    $expert_email = $_SESSION['email'];
    $pqs = $_COOKIE['pqs'];
    $profession_name = $_COOKIE['profession'];

    $query = "INSERT INTO `profession_pqs` (profession_name, pqs, expert_email)
        VALUES ('$profession_name', '$pqs', '$expert_email')";

    //mysqli_query и делает запрос
    if (mysqli_query($link, $query)) {
      header('Location: profile.php');
    } else {
      print("Error: " . $query . "<br>" . mysqli_error($link));
    }
      }
  unset($_COOKIE['profession']);
  unset($_COOKIE['pqs']);
  mysqli_close($link);
?> 
