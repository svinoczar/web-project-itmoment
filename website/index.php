<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
    <title>ITMOMENT</title>
  </head>
  <body>
    <!-- ♥-♥ -->
    <header class="header" id="header">
      <div class="header">
        <div class="header logo">
        <a href="index.php">
          <img src="img/ITMOMENT_logo.png" alt="Кнопка «input»">
        </a>
          <?php
          session_start();
          if(isset($_SESSION["logged_in"])){
            if ($_SESSION["logged_in"] == false){
              echo '<button class="topbuttons1" onclick="document.getElementById(\'login_window\').style.display=\'block\'" >Войти</button>';
              echo '<button class="topbuttons2" onclick="document.getElementById(\'registration_window\').style.display=\'block\'" >Зарегистрироваться</button>';
            } else {
              echo '<a class="topbuttons1" href="profile.php">Перейти в профиль</a>';
            }
          } else {
            echo '<button class="topbuttons1" onclick="document.getElementById(\'login_window\').style.display=\'block\'" >Войти</button>';
              echo '<button class="topbuttons2" onclick="document.getElementById(\'registration_window\').style.display=\'block\'" >Зарегистрироваться</button>';
          }
      ?>

        </div>
        <!-- sign in window -->
        <div class="modal" id="login_window">
          <form class="modal-content animate" action="login.php" method="POST">
            <div class="container">
              <label for="email">
                <b>Почта</b>
              </label>
              <input type="email" placeholder="Введите почту" name="email" required>
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

        <div class="hide">

        </div>
        </div>
      <div class="modal" id="registration_window">

          <!-- button to close registration panel -->
          <div class="imgcontainer">
            <span onclick="document.getElementById('registration_window').style.display='none'" class="close" title="Close Modal">×</span>
          </div>

          <!-- main registration panel -->
          <form class="modal-content animate" action="registration.php" method="POST">
            <div class="container">
              <h1>Регистрация</h1>
              <p>Заполните эти формы, чтобы создать аккаунт</p>
              <hr> <!--this tag used to make line after upper words-->
              <label for="email">
                <b>Почта</b>
              </label>
              <input type="email" placeholder="Введите почту" name="email" required>
              <label for="password">
                <b>Пароль</b>
              </label>
              <input type="password" placeholder="Введите пароль" name="password" required>
              <hr>
                <button class="registrationbtn" name="signup" type="submit" >Зарегистрироваться</button>
            </div>
          </form>
        </div>
      </div>
    </header>

    <div class="page">

    <!-- Intro -->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro__inner">
                <h1 class="intro__title">Добро пожаловать</h1>
            </div>
        </div>


    </div><!-- /.intro -->


    <!-- About -->
    <!--<section class="section" id="about">
        <div class="container">

            <div class="section__header">
                <h2 class="section__title">О нас</h2>
                <div class="section__text">
                  <p>Мы  </p>
                </div>
            </div>


            </div>

    </section> -->
    <section class="section">
      <div class="container">
        <div class="section__header">
          <h2 class="section__title">Пройти тесты</h2>
        </div>
        <div class="wedo">
          <div class="wedo__item">
            <p>Здесь вы сможете пройты тесты подготовленные нашей командой.</p>
          </div>
          <div class="wedo__item">
            <a class="btn" href="tests/html/tests.html">пройти тесты</a>
          </div>
        </div>
      </div><!-- /.container -->

    </section>
    <section class="section">
      <div class="container">
        <div class="section__header">
          <h2 class="section__title">Профессии</h2>
        </div>

        <div class="wedo">

            <table>

            <?php
            $link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
            $query = "SELECT * FROM `professions` ";
            $result = mysqli_query($link, $query) or die(mysqli_error($link));

            // $query = "SELECT `describe_of_profession` FROM `profession_describe` WHERE `name_of_profession` = '$row[name]'";
            // $description = mysqli_query($link, $query) or die(mysqli_error($link));
            // mysqli_close($link);
            while($row = mysqli_fetch_assoc($result)) {
              $query = "SELECT `describe_of_profession` FROM `profession_describe` WHERE `name_of_profession` = '$row[name]'";
              $description = mysqli_query($link, $query) or die(mysqli_error($link));
              $desc = mysqli_fetch_assoc($description);
              echo "<tr>
              <td>".$row["name"]."</td>
              <td> - </td>
              <td>".$row["pqs"]."</td>
              <td>".$desc["describe_of_profession"]."</td>
                </tr>";
              }

              ?>
            </table>
      </div>
    </section>

    <section class="section">
      <div class="container">

        <div class="section__header">
          <h2 class="section__title">Станьте экспетом</h2>
        </div>

        <div class="wedo">
          <div class="wedo__item">
            <p>Для того чтобы стать экспертом, напишите на почту <a href = "mailto: itmoment.contact@yahoo.com">itmoment.contact@yahoo.com</a>
            В письме напишите почему вы хотите им стать и почему мы должны взять в вас в число экспертов.
            </p>
          </div>
          <div class="wedo__item">

          </div>
        </div>
      </div><!-- /.container -->
    </section>




  </body>
</html>
