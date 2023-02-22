<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>ITMOMENT</title>
  </head>
  <body>
    <!-- ♥-♥ -->
    <header class="header" id="header">
      <div class="header__inner">
        <div class="header logo">
          <img src="img/ITMOMENT_logo.png">
          <!-- button to autorization -->
          <button class="topbuttons" onclick="document.getElementById('login_window').style.display='block'" >Войти</button>
          <!-- button to register -->
          <button class="topbuttons" onclick="document.getElementById('registration_window').style.display='block'" >Зарегистрироваться</button>
        </div>
        <!-- sign in window -->
        <div class="modal" id="login_window">
          <form class="modal-content animate" action="login.php" method="POST">
            <div class="container">
              <label for="email">
                <b>Почта</b>
              </label>
              <input type="text" placeholder="Введите почту" name="email" required>
              <label for="password">
                <b>Пароль</b>
              </label>
              <input type="password" placeholder="Введите пароль" name="password" required>
                <button class="loginbtn" name="signin" type="submit" >Войти</button>
              <label>
                <input type="checkbox" checked="checked" name="remember">Запомнить меня
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('login_window').style.display='none'" class="cancel_button">Закрыть</button>
              <span class="psw">
                <a href="#">Забыли пароль?  (не сделано)</a> <!-- not implemented yet -->
              </span>
            </div>
          </form>

        <!-- Подключение скрипта для входа в систему -->
        <div class="hide">

        </div>
        </div>
      <div class="modal" id="registration_window">
        <form class="modal-content animate"> <!-- action="/action_page.php (if all works good, delete it)-->

          <!-- button to close registration panel -->
          <div class="imgcontainer">
            <span onclick="document.getElementById('registration_window').style.display='none'" class="close" title="Close Modal">×</span>
          </div>

          <!-- main registration panel -->
          <form action="registration.php" method="GET">
            <div class="container">
              <h1>Регистрация</h1>
              <p>Заполните эти формы, чтобы создать аккаунт</p>
              <hr> <!--this tag used to make line after upper words-->
              <label for="email">
                <b>Почта</b>
              </label>
              <input type="text" placeholder="Введите почту" name="email" required>
              <label for="password">
                <b>Пароль</b>
              </label>
              <input type="password" placeholder="Введите пароль" name="password" required>

              <!-- <label for="psw-repeat"><b>Повторите пароль</b></label>
              <input type="password" placeholder="Введите пароль еще раз" name="psw-repeat" required> -->  <!-- ???????????? -->

              <hr><!--this tag makes line after upper words-->
              <form class="" action="registration.php" method="GET">
                <button class="registrationbtn" name="signup" type="submit" >Зарегистрироваться</button>
              </form>
            </div>
          </form>
        </form>

          <!-- Подключение скрипта для регистрации -->

          <?php
          if (isset($_GET["signup"])) {
            $data = [
              'password'=>$_GET['password'],
              'email'=>$_GET['email']
          ];
          extract($data);
          require 'registration.php';
        }
            ?>
        </div>
      </div>
    </header>

    <!-- tests -->
    <!-- Тесты были разделены на отдельные классы, возможно нужно будет именно это,
    но можно в дальшейшем соединить в один для укорочения -->

    <div class="test1">
      <a href="tests/test1.php" class="button test1">Пройти тест №1</a>
    </div>
    <div class="test2">
      <a href="tests/test2.php" class="button test2">Пройти тест №2</a>
    </div>
    <div class="test3">
      <a href="tests/test3.php" class="button test3">Пройти тест №3</a>
    </div>
  </body>
</html>
