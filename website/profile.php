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
<td>Тест</td>
<th>Средняя оценка</th>
                    </tr>
<?php
$link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
session_start();
$user_email = $_SESSION["email"];
$query = "SELECT T.name_of_test, avg(R.result) as avg from result_of_test as R join test_type as T on T.id = R.type_of_test where R.user_email = '$user_email' group by R.type_of_test, T.id";
$result = mysqli_query($link, $query) or die(mysqli_error($link));
while($row = mysqli_fetch_assoc($result)) {
  echo "<tr>
  <td>".$row["avg"]. " мс</td>
  <td>".$row["name_of_test"]."</td>
       </tr>";
}
mysqli_close($link);
?>
            </table>
              </div>
            </div>
          </div><!-- /.container -->

        </section>
    </body>
</html>
