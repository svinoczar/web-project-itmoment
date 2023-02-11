<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <?php
      $link = mysqli_connect("sql7.freemysqlhosting.net", "sql7597171", "FQ7CvReXHZ");

      if ($link == false){
          print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
      }
    ?>
    <title>ITMOMENT</title>
  </head>
  <body>
    <!-- 1234 -->
    <!--верхний блок-->
<header class="header" id="header">

        <div class="header__inner">
            <div class="header__logo" data-scroll="#intro">ITMOMENT</div>





                <!-- кнопочкка, чтобы войти -->
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Войти</button>

      <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
          </div>

          <div class="container">
            <label for="uname"><b>Логин или почта</b></label>
            <input type="text" placeholder="Введите логин или почту" name="uname" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="psw" required>

            <button type="submit">Войти</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Запомнить меня
            </label>
          </div>

          <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Закрыть</button>
            <span class="psw"><a href="#">Забыли пароль?  (не сделано)</a></span>
          </div>
        </form>
      </div>




      <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Зарегистрироваться</button>

      <div id="id02" class="modal">

        <form class="modal-content animate" action="/action_page.php">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
          </div>

          <form action="/action_page.php">
        <div class="container">
          <h1>Регистрация</h1>
          <p>Заполните эти формы, чтобы создать аккаунт</p>
          <hr>

          <label for="email"><b>Почта</b></label>
          <input type="text" placeholder="Введите почту" name="email" required>

          <label for="psw"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="psw" required>

          <label for="psw-repeat"><b>Повторите пароль</b></label>
          <input type="password" placeholder="Введите пароль еще раз" name="psw-repeat" required>
          <hr>

          <button type="submit" class="registerbtn">Заренистрироваться</button>
        </div>

        <div class="container signin">
        </div>
      </form>


</header>
<!-- тесты-->
<div class="tests">
  <a href="tests/test1">пройти тест 1</a>

</div>
  </body>
</html>
