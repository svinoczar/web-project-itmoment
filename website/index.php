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
        <div class="header__logo" style="text-align:center"> ITMOMENT</div>
        <!-- button to sign in -->
        <button onclick="document.getElementById('registration_window').style.display='block'" style="width:auto;">Войти</button>
        <!-- sing up  window -->
        <div class="modal" id="registration_window">
        <form class="modal-content animate">
          
            <div class="container">
              <label for="email"><b>Почта</b></label>
              <input type="text" placeholder="Введите почту" name="email" required>
              <label for="password"><b>Пароль</b></label>
              <input type="password" placeholder="Введите пароль" name="password" required>
              <!-- очень важно если нужно подключить к форме php вписать к ней action и method -->
              <!-- Артем. не трогай авторизацию не поговорив с Aнтоном или Sаней. Целую <3 -->
              <form action="login.php" method="GET">
                <button name="signin" type="submit" >Войти</button>
              </form>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Запомнить меня
              </label>
            </div>
            <div class="container" style="background-color:#f1f1f1"> <!---->
              <button type="button" onclick="document.getElementById('registration_window').style.display='none'" class="cancel_button">Закрыть</button>
              <span class="psw"><a href="#">Забыли пароль?  (не сделано)</a></span>
            </div>
          </form>
          <!-- Подключение скрипта для входа в систему -->
          <div class="hide">
            <?php
               if (isset($_GET["signin"])) {
                $login_data = [
                  'password'=>$_GET['password'],
                  'email'=>$_GET['email']
              ];
              extract($login_data);
              require 'login.php';
            }
            ?>
          </div>

        </div>

        <!-- button to register -->
        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" >Зарегистрироваться</button>
        <div class="modal" id="id02">
          <form class="modal-content animate"> <!-- action="/action_page.php (if all works good, delete it)-->
            <!-- button to close registration panel -->
            <div class="imgcontainer">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
            </div>
            <!-- main registration panel -->
            <form action="registration.php" method="GET">
              <div class="container">
                <h1>Регистрация</h1>
                <p>Заполните эти формы, чтобы создать аккаунт</p>
                <hr> <!--this tag used to make line after upper words-->
                <label for="email"><b>Почта</b></label>
                <input type="text" placeholder="Введите почту" name="email" required>

                <label for="password"><b>Пароль</b></label>
                <input type="password" placeholder="Введите пароль" name="password" required>

                <!-- <label for="psw-repeat"><b>Повторите пароль</b></label>
                <input type="password" placeholder="Введите пароль еще раз" name="psw-repeat" required> -->

                <hr><!--this tag makes line after upper words-->

<!-- чзх ммомент -->
                <form class="" action="registration.php" method="GET">
                  <button type="submit" name="signup" class="registerbtn">Зарегистрироваться</button>
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
      <a href="tests/test1.html" class="button">Пройти тест №1</a>
    </div>
    <div class="test2">
      <a href="tests/test2.html" class="button">Пройти тест №2</a>
    </div>
    <div class="test3">
      <a href="tests/test3.html" class="button">Пройти тест №3</a>
    </div>
  </body>
</html>
