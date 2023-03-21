<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/profile.css">
        <link rel="stylesheet" href="css/style1.css">

        <title>ITMOMENT</title>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__inner">
                <div class="header logo" style="text-align:center">
                    <img src="img/ITMOMENT_logo.png">
                </div>
                <div class="panel" id="expert-panel">
                    <div class="container">
                    <?php
                        if (session_status() == PHP_SESSION_NONE) {
                            session_start();
                        }
                        $entry_value = $_SESSION["admin"];
                        if ($entry_value) {
                            // Entry value is true, show the button
                            echo '<a class="expertbtn" href="expert-panel.html" >Панель эксперта</a>';
                            // id="expertbtn" name="expert" type="submit"
                          } else {
                            // Entry value is false, hide the button
                            echo '<a id="expertbtn" name="expert" type="submit" style="visibility: hidden" href="expert-panel.html" >Панель эксперта</a>';
                          }
                        ?>
                    <a class="expertbtn" href="validator.php" >validator test</a>
                          <a class="expertbtn" href="results.php">Статистика</a>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
