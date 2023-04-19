<!DOCTYPE html>
<html>
  <head>
    <title>Звук</title>
    <link rel="stylesheet" href="../../css/styletest.css">

    <meta charset="UTF-8" />
  </head>
  <body>
    <h1>Тест: "Реакция на звук"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Нажмите на пробел, когда услышите звук</p>
    <p id="progress"></p>
    <progress id="progress-bar" value="0" max="100"></progress><br></br>
    <button id="startButton">Запуск теста</button>
    <p id="result"></p>
    <div id="resultFalse"></div>

    <script>
      const startButton = document.getElementById("startButton");
      const result = document.getElementById("result");
      const progressBar = document.getElementById("progress-bar");

      let startTime, endTime, totalReactionTime = 0, counter = 0;

      function runTest() {
        //progress.textContent = `Ваш прогресс: ${((counter / 30).toFixed(2) * 100).toFixed(0)} %`;
        progressBar.value = ((counter / 30).toFixed(2) * 100).toFixed(0);
        if (counter < 30) {
          startButton.disabled = true;
          counter++;
          delay = Math.floor(Math.random() * 3000) + 1000;
          setTimeout(function() {
            audio = new Audio("../mp3/sound.mp3");
            audio.play();
            startTime = new Date().getTime();
          }, delay);
        } else {
          startButton.disabled = false;
          averageReactionTime = Math.floor(totalReactionTime / 30);
          result.textContent = `Среднее время реакции: ${averageReactionTime} ms`;
          document.cookie = "result=" + averageReactionTime;
          document.cookie = "table=result_sound"
          startTime = null;
          endTime = null;
          totalReactionTime = 0;
          counter = 0;
        }
      }

      startButton.addEventListener("click", function() {
        runTest();
      });

      document.addEventListener("keydown", function(event) {
        if (event.code === "Space" && startTime > 1000) {
          endTime = new Date().getTime();
          reactionTime = endTime - startTime;
          totalReactionTime += reactionTime; 
          startTime = 0;
          runTest();
        }
      });
    </script>
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
