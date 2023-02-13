<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8" />
  <title>ITMO.TEST</title>
  <style>
   article, aside, details, figcaption, figure, footer,header,
   hgroup, menu, nav, section { display: block; }
  </style>
 </head>
 <body>
    <form id="test1" onsubmit="return CheckForm(this)" method="post">
        <span>1) Какой из нижеперечисленных языков вам наиболее близок?</span><br></br>
        <input type="radio" name="lang" id="Java" value="Java">
        <label for="Java">Java</label>
        <input type="radio" name="lang" id="JavaScript" value="JavaScript">
        <label for="JavaScript">JavaScript</label>
        <input type="radio" name="lang" id="Python" value="Python">
        <label for="Python">Pyhton</label>
        <input type="radio" name="lang" id="None" value="None">
        <label for="None">Никакой</label><br></br>

        <span>2) Вы отвественный человек?</span><br></br>
        <input type="radio" name="que2" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que2" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>3) Вы дисциплинированный человек?</span><br></br>
        <input type="radio" name="que3" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que3" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>4) Вы готовы к постоянному развитию?</span><br></br>
        <input type="radio" name="que4" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que4" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>5) Вы аккуратны и дотошны к своей работе?</span><br></br>
        <input type="radio" name="que5" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que5" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>6) Вы готовы уделять много времени работе?</span><br></br>
        <input type="radio" name="que6" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que6" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>7) Вы инициативны?</span><br></br>
        <input type="radio" name="que7" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que7" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>8) Вы решительны?</span><br></br>
        <input type="radio" name="que8" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que8" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>9) Вы любите работать в команде?</span><br></br>
        <input type="radio" name="que9" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que9" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>10) Вы логичны в своих действиях?</span><br></br>
        <input type="radio" name="que10" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que10" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>11) Вы креативный человек?</span><br></br>
        <input type="radio" name="que11" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que11" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>12) Вы стрессоустойчивы?</span><br></br>
        <input type="radio" name="que12" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que12" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>13) Вы способны представить архитектуру программы до ее написания?</span><br></br>
        <input type="radio" name="que13" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que13" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>14) Вы способны к резкому переключению с одной деятельности на другую?</span><br></br>
        <input type="radio" name="que14" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que14" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>15) Вы обычно орентируетесь на собственные силы?</span><br></br>
        <input type="radio" name="que15" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que15" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>16) Вы легко переносите неудачи?</span><br></br>
        <input type="radio" name="que16" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que16" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>17) Вам нравится однотипная работа?</span><br></br>
        <input type="radio" name="que17" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que17" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>18) Вам нравится писать код с нуля?</span><br></br>
        <input type="radio" name="que18" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que18" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>19) Вы готовы использовать новые технологии?</span><br></br>
        <input type="radio" name="que19" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que19" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <span>20) Вы способны принимать свои ошибки?</span><br></br>
        <input type="radio" name="que20" id="yes" value="yes">
        <label for="yes">Да</label>
        <input type="radio" name="que20" id="no" value="no">
        <label for="no">Нет</label><br></br>

        <div id="error" style="color:crimson"></div>
        <input type="submit" name="submit" value="Готово">

    </form>

    <script src="test1.js"></script>

</body>
</html>