<!DOCTYPE html>
<html>
  <head>
    <title>Звук чет/нечет</title>
    <link rel="stylesheet" href="../css/styletest.css">
    <meta charset="UTF-8">
  </head>
  <body>
    <h1>Тест: "Четная или нечетная сумма (текстовой)"</h1>
    <p>Нажмите на кнопку, когда будете готовы начать</p>
    <p>Вы увидите выражение, сложите ее в голове, и нажмите на правильный вариант</p>
    <button onclick="startTest()">Начать тест</button>
    <div id="question"></div>
    <div id="expression"></div>
    <button onclick="checkAnswer('even')">Четное</button>
    <button onclick="checkAnswer('odd')">Нечетное</button>
    <div id="result"></div>
    <script src="evenoddtxt.js"></script>
  </body>
</html>
