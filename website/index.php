<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITMOMENT</title>
    <link rel="stylesheet" href="./styles/style.css">
    <?php
      $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ");

      if ($link == false){
          print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
      }
    ?>
  </head>
  <body>
    <div class="vvod">
    <input name="Test_bd" type="Name" />
    </div>
  </body>
</html>
