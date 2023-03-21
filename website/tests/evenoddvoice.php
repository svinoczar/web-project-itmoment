<!DOCTYPE html>
<html>
  <head>
    <title>Звук чет/нечет</title>
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Тест: "Четная или нечетная сумма (звуковой)"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Вы услышите запись, сложите ее в голове, и нажмите на правильный вариант</p>
    <button onclick="startTest()">Начать тест</button>
    <div id="question"></div>
    <button onclick="checkAnswer('even')">Четное</button>
    <button onclick="checkAnswer('odd')">Нечетное</button>
    <div id="result"></div>
    <audio id="audio"></audio>
    <script src="evenoddsound.js"></script>
  </body>
</html>
