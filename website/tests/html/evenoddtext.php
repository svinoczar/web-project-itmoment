<!DOCTYPE html>
<html>
  <head>
    <title>Звук чет/нечет</title>
    <link rel="stylesheet" href="../../css/styletest.css">

    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Тест: "Четная или нечетная сумма (текстовой)"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Вы увидите выражение, сложите ее в голове, и нажмите на правильный вариант</p>
    <p id="progress"></p>
    <progress id="progress-bar" value="0" max="100"></progress><br></br>
    <button onclick="startTest()">Начать тест</button>
    <div id="question"></div>
    <div id="expression"></div>
    <button onclick="checkAnswer('even')">Четное</button>
    <button onclick="checkAnswer('odd')">Нечетное</button>
    <div id="result"></div>
    <div id="resultFalse"></div>
    <script src="../js/evenoddtxt.js"></script>
    <?php
    session_start();
    if(isset($_SESSION["logged_in"])){
      if($_SESSION["logged_in"]==true){
        echo '<a href="test-res.php">Завершить выполнение теста и сохранить результат</a>';
      }
    }
    ?>
  </body>
</html>