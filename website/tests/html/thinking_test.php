<!DOCTYPE html>
<html>
<head>
  <title>Мышление</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../../css/styletest.css">

<style>
  canvas {
    border: 0px solid black;
  }
</style>
</head>
<body>
      <div class="header">
        <div class="header logo">
          <a href="../../index.php">
            <img src="./../../img/ITMOMENT_logo.png" alt="Кнопка «input»">
          </a>  
        </div>
      </div>
<h1>Тест: "Оценка мышления"</h1>
<p>Пройдите небольшой тест на мышление(состоит из 10 вопросов).</p>
<button id="startButton">Начать</button>
<form id="testForm1" style="display: none;">
    <ol>
        <li>
            <p>Продолжите последовательность чисел: 41, 34, 28, 23, 19...</p>
            <input type="radio" name="q1" value="1"> 15<br>
            <input type="radio" name="q1" value="2"> 16<br>
            <input type="radio" name="q1" value="3"> 13<br>
        </li>
        <li>
            <p>Мария купила в магазине 6 яблок и 5 огурцов. Пока она шла домой, съела 2 яблока и 1 огурец. Сколько фруктов у нее осталось?</p>
            <input type="radio" name="q2" value="1"> 4<br>
            <input type="radio" name="q2" value="2"> 3<br>
            <input type="radio" name="q2" value="3"> 8<br>
        </li>
        <li>
            <p>Продолжите ряд чисел: 2, 4, 7, 14, 17...</p>
            <input type="radio" name="q3" value="1"> 24<br>
            <input type="radio" name="q3" value="2"> 34<br>
            <input type="radio" name="q3" value="3"> 27<br>
        </li>
        <li>
            <p>Какая из следующих дробей не подходит к двум остальным?</p>
            <input type="radio" name="q4" value="1"> 3/7<br>
            <input type="radio" name="q4" value="2"> 3/9<br>
            <input type="radio" name="q4" value="3"> 3/11<br>
        </li>
        <li>
            <p>"Размер" так относится к "длине", как "нечестный" к...</p>
            <input type="radio" name="q5" value="1"> укравший<br>
            <input type="radio" name="q5" value="2"> тюрьма<br>
            <input type="radio" name="q5" value="3"> грешный<br>
        </li>
        <li>
            <p>Какое из следующих сочетаний знаков должно продолжить этот ряд: ХООООХХОООХХХ...</p>
            <input type="radio" name="q6" value="1"> ОХХХ<br>
            <input type="radio" name="q6" value="2"> ООХХ<br>
            <input type="radio" name="q6" value="3"> ХООО<br>
        </li>
        <li>
            <p>"Пламя" относится к "жара", как "роза" к...</p>
            <input type="radio" name="q7" value="1"> шип<br>
            <input type="radio" name="q7" value="2"> красные лепестки<br>
            <input type="radio" name="q7" value="3"> запах<br>
        </li>
        <li>
            <p>"Лопата" относится к "копать", как "нож" к...</p>
            <input type="radio" name="q8" value="1"> острый<br>
            <input type="radio" name="q8" value="2"> резать<br>
            <input type="radio" name="q8" value="3"> точить<br>
        </li>
        <li>
            <p>"Усталый" относится к "работе", как "гордый" к...</p>
            <input type="radio" name="q9" value="1"> улыбка<br>
            <input type="radio" name="q9" value="2"> успех<br>
            <input type="radio" name="q9" value="3"> счастливый<br>
        </li>
        <li>
            <p>Какое из данных слов не подходит к двум остальным:</p>
            <input type="radio" name="q10" value="1"> свеча<br>
            <input type="radio" name="q10" value="2"> луна<br>
            <input type="radio" name="q10" value="3"> лампа<br>
        </li>
    </ol>
</form>
<form id="testForm2" style="display: none;">
    <ol>
        <li>
            <p>Продолжите ряд чисел: 2, 4, 7, 14, 17...</p>
            <input type="radio" name="q1" value="1"> 24<br>
            <input type="radio" name="q1" value="2"> 34<br>
            <input type="radio" name="q1" value="3"> 27<br>
        </li>
        <li>
            <p>Какая из следующих дробей не подходит к двум остальным?</p>
            <input type="radio" name="q2" value="1"> 3/7<br>
            <input type="radio" name="q2" value="2"> 3/9<br>
            <input type="radio" name="q2" value="3"> 3/11<br>
        </li>
        <li>
            <p>Продолжите последовательность чисел: 41, 34, 28, 23, 19...</p>
            <input type="radio" name="q3" value="1"> 15<br>
            <input type="radio" name="q3" value="2"> 16<br>
            <input type="radio" name="q3" value="3"> 13<br>
        </li>
        <li>
            <p>Мария купила в магазине 6 яблок и 5 огурцов. Пока она шла домой, съела 2 яблока и 1 огурец. Сколько фруктов у нее осталось?</p>
            <input type="radio" name="q4" value="1"> 4<br>
            <input type="radio" name="q4" value="2"> 3<br>
            <input type="radio" name="q4" value="3"> 8<br>
        </li>
        <li>
            <p>"Размер" так относится к "длине", как "нечестный" к...</p>
            <input type="radio" name="q5" value="1"> укравший<br>
            <input type="radio" name="q5" value="2"> тюрьма<br>
            <input type="radio" name="q5" value="3"> грешный<br>
        </li>
        <li>
            <p>Какое из следующих сочетаний знаков должно продолжить этот ряд: ХООООХХОООХХХ...</p>
            <input type="radio" name="q6" value="1"> ОХХХ<br>
            <input type="radio" name="q6" value="2"> ООХХ<br>
            <input type="radio" name="q6" value="3"> ХООО<br>
        </li>
        <li>
            <p>"Лопата" относится к "копать", как "нож" к...</p>
            <input type="radio" name="q7" value="1"> острый<br>
            <input type="radio" name="q7" value="2"> резать<br>
            <input type="radio" name="q7" value="3"> точить<br>
        </li>
        <li>
            <p>"Усталый" относится к "работе", как "гордый" к...</p>
            <input type="radio" name="q8" value="1"> улыбка<br>
            <input type="radio" name="q8" value="2"> успех<br>
            <input type="radio" name="q8" value="3"> счастливый<br>
        </li>
        <li>
            <p>"Пламя" относится к "жара", как "роза" к...</p>
            <input type="radio" name="q9" value="1"> шип<br>
            <input type="radio" name="q9" value="2"> красные лепестки<br>
            <input type="radio" name="q9" value="3"> запах<br>
        </li>
        <li>
            <p>Какое из данных слов не подходит к двум остальным:</p>
            <input type="radio" name="q10" value="1"> свеча<br>
            <input type="radio" name="q10" value="2"> луна<br>
            <input type="radio" name="q10" value="3"> лампа<br>
        </li>
    </ol>
</form>
<form id="testForm3" style="display: none;">
    <ol>
        <li>
            <p>Какое из следующих сочетаний знаков должно продолжить этот ряд: ХООООХХОООХХХ...</p>
            <input type="radio" name="q1" value="1"> ОХХХ<br>
            <input type="radio" name="q1" value="2"> ООХХ<br>
            <input type="radio" name="q1" value="3"> ХООО<br>
        </li>
        <li>
            <p>"Лопата" относится к "копать", как "нож" к...</p>
            <input type="radio" name="q2" value="1"> острый<br>
            <input type="radio" name="q2" value="2"> резать<br>
            <input type="radio" name="q2" value="3"> точить<br>
        </li>
        <li>
            <p>"Усталый" относится к "работе", как "гордый" к...</p>
            <input type="radio" name="q3" value="1"> улыбка<br>
            <input type="radio" name="q3" value="2"> успех<br>
            <input type="radio" name="q3" value="3"> счастливый<br>
        </li>
        <li>
            <p>"Пламя" относится к "жара", как "роза" к...</p>
            <input type="radio" name="q4" value="1"> шип<br>
            <input type="radio" name="q4" value="2"> красные лепестки<br>
            <input type="radio" name="q4" value="3"> запах<br>
        </li>
        <li>
            <p>Какое из данных слов не подходит к двум остальным:</p>
            <input type="radio" name="q5" value="1"> свеча<br>
            <input type="radio" name="q5" value="2"> луна<br>
            <input type="radio" name="q5" value="3"> лампа<br>
        </li>
        <li>
            <p>Продолжите ряд чисел: 2, 4, 7, 14, 17...</p>
            <input type="radio" name="q6" value="1"> 24<br>
            <input type="radio" name="q6" value="2"> 34<br>
            <input type="radio" name="q6" value="3"> 27<br>
        </li>
        <li>
            <p>Какая из следующих дробей не подходит к двум остальным?</p>
            <input type="radio" name="q7" value="1"> 3/7<br>
            <input type="radio" name="q7" value="2"> 3/9<br>
            <input type="radio" name="q7" value="3"> 3/11<br>
        </li>
        <li>
            <p>Продолжите последовательность чисел: 41, 34, 28, 23, 19...</p>
            <input type="radio" name="q8" value="1"> 15<br>
            <input type="radio" name="q8" value="2"> 16<br>
            <input type="radio" name="q8" value="3"> 13<br>
        </li>
        <li>
            <p>Мария купила в магазине 6 яблок и 5 огурцов. Пока она шла домой, съела 2 яблока и 1 огурец. Сколько фруктов у нее осталось?</p>
            <input type="radio" name="q9" value="1"> 4<br>
            <input type="radio" name="q9" value="2"> 3<br>
            <input type="radio" name="q9" value="3"> 8<br>
        </li>
        <li>
            <p>"Размер" так относится к "длине", как "нечестный" к...</p>
            <input type="radio" name="q10" value="1"> укравший<br>
            <input type="radio" name="q10" value="2"> тюрьма<br>
            <input type="radio" name="q10" value="3"> грешный<br>
        </li>
    </ol>
</form>
<button id="checkButton">Проверить ответы</button>
<div id="result"></div>
<script>

    let form;
    let randomForm;

    function show(){
        const forms = ['testForm1', 'testForm2', 'testForm3'];
        randomForm = forms[Math.floor(Math.random() * forms.length)];
        console.log(randomForm);
        form = document.getElementById(randomForm);
        form.style.display = "block";
    }

    function onSubmit() {
        var flg = "";
        var checkRight = 0;
        var selectedAnswer1 = form.querySelector('input[name="q1"]:checked');
        var selectedAnswer2 = form.querySelector('input[name="q2"]:checked');
        var selectedAnswer3 = form.querySelector('input[name="q3"]:checked');
        var selectedAnswer4 = form.querySelector('input[name="q4"]:checked');
        var selectedAnswer5 = form.querySelector('input[name="q5"]:checked');
        var selectedAnswer6 = form.querySelector('input[name="q6"]:checked');
        var selectedAnswer7 = form.querySelector('input[name="q7"]:checked');
        var selectedAnswer8 = form.querySelector('input[name="q8"]:checked');
        var selectedAnswer9 = form.querySelector('input[name="q9"]:checked');
        var selectedAnswer10 = form.querySelector('input[name="q10"]:checked');

        if (randomForm === 'testForm1') {
            if (selectedAnswer1) {
                if (selectedAnswer1.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer2) {
                if (selectedAnswer2.value === "1") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer3) {
                if (selectedAnswer3.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer4) {
                if (selectedAnswer4.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer5) {
                if (selectedAnswer5.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer6) {
                if (selectedAnswer6.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer7) {
                if (selectedAnswer7.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer8) {
                if (selectedAnswer8.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer9) {
                if (selectedAnswer9.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer10) {
                if (selectedAnswer10.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
        }

        if (randomForm === 'testForm2') {
            if (selectedAnswer1) {
                if (selectedAnswer1.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer2) {
                if (selectedAnswer2.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer3) {
                if (selectedAnswer3.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer4) {
                if (selectedAnswer4.value === "1") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer5) {
                if (selectedAnswer5.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer6) {
                if (selectedAnswer6.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer7) {
                if (selectedAnswer7.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer8) {
                if (selectedAnswer8.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer9) {
                if (selectedAnswer9.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer10) {
                if (selectedAnswer10.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
        }

        if (randomForm === 'testForm3') {
            if (selectedAnswer1) {
                if (selectedAnswer1.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer2) {
                if (selectedAnswer2.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer3) {
                if (selectedAnswer3.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer4) {
                if (selectedAnswer4.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer5) {
                if (selectedAnswer5.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer6) {
                if (selectedAnswer6.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer7) {
                if (selectedAnswer7.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer8) {
                if (selectedAnswer8.value === "2") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer9) {
                if (selectedAnswer9.value === "1") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
            if (selectedAnswer10) {
                if (selectedAnswer10.value === "3") {
                    checkRight++;
                }
            } else {
                flg = "Выбраны не все варианты ответа";
            }
        }

        console.log(checkRight);
        if(flg != ""){
            alert(flg);
            return false;
        }else{
            document.getElementById('result').innerText =`Ваш процент правильных ответов: ${((checkRight / 10) * 100).toFixed(2)}%`;
            startButton.disabled = true;
            return true;
        }

    }
    const fButton = document.getElementById('startButton');
    fButton.addEventListener('click', show);
    const startButton = document.getElementById('checkButton');
    startButton.addEventListener('click', onSubmit);
</script>
</body>
</html>