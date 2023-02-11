<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
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

        <form class="modal-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
          </div>

          <div class="container">
            <label for="uname"><b>Логин или почта</b></label>
            <input type="text" placeholder="Введите логин или почту" name="uname" required>

            <label for="psw"><b>Пароль</b></label>
            <input type="password" placeholder="Введите пароль" name="psw" required>

            <button type="submit"  name="signin">Войти</button>
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

        <form class="modal-content animate">
          <div class="imgcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
          </div>
          <!-- очень важно если нужно подключить к форме php вписать к ней action и method -->
          <!-- Артем. не трогай регистрацию не поговрив с Aнтоном или Sаней. Целую <3 -->
          <form action="registration.php" method='GET'>
        <div class="container">
          <h1>Регистрация</h1>
          <p>Заполните эти формы, чтобы создать аккаунт</p>
          <hr>

          <label for="email"><b>Почта</b></label>
          <input type="text" placeholder="Введите почту" name="email" required>

          <label for="password"><b>Пароль</b></label>
          <input type="password" placeholder="Введите пароль" name="password" required>

          <hr>
          <form action="registration.php" method='GET'>
          <input style='position: relative; top:20px; left: 30px' type="submit" name="signup">
          </form>
        </div>
        <div class="container signin">
        </div>
      </form>
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

</header>
<!-- тесты-->
<div class="tests">
  <a href="tests/test1">пройти тест 1</a>
 
</div>
  </body>
</html>