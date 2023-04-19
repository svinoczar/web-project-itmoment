<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <!-- <link rel="stylesheet" href="css/style1.css"> -->
        <link rel="stylesheet" href="css/profile.css">

        <title>ITMOMENT</title>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__inner">
                <div class="header logo" style="text-align:center">
                    <!-- <a class="homepagebtn" href="/index.php" ><img src="img/ITMOMENT_logo.png"></a> -->

                    <!-- <img src="img/ITMOMENT_logo.png"> -->

                    <input type="image" src="img/ITMOMENT_logo.png" alt="Кнопка «input»">

                    <!-- <div class="panel" id="expert-panel"> -->
                    <!-- <div class="container"> -->
                    <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        $entry_value = $_SESSION["admin"];
                        if ($entry_value) {
                            // Entry value is true, show the button
                            echo '<a class="expertbtn" href="expert-panel.php" >Панель эксперта</a>';
                            // id="expertbtn" name="expert" type="submit"
                          } else {
                            // Entry value is false, hide the button
                            echo '<a id="expertbtn" name="expert" type="submit" style="visibility: hidden" href="expert-panel.php" >Панель эксперта</a>';
                          }
                        ?>
                    <a class="expertbtn" href="/tests/html/tests.html" >Пройти тесты</a>
                    <a class="expertbtn" href="validator.php">Валидация</a>
                    <a class="expertbtn" href="results.php">Статистика</a>
                    <a class="expertbtn" href="index.php">Вернуться на главную</a>
                    <a class="expertbtn" href="logout.php">Выйти из аккаунта</a>
                    <!-- </div> -->
                    <!-- </div> -->

                </div>
                <!--  -->
            </div>
        </header>
        <section class="section">
          <div class="container">
            <div class="wedo">
              <div class="wedo__item">
              </div>
              <div class="wedo__item">
                <table>
                  <tr>
                    <td>fghj</td>
                    <td>dfgh</td>
                    <td>cvbhnj</td>
                  </tr>
                </table>
              </div>
            </div>
          </div><!-- /.container -->

        </section>
    </body>
</html>
