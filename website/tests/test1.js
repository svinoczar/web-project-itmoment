function CheckForm(el){

    var front = 0;
    var back = 0;
    var tester = 0;
    var engBD = 0;
    var dataS = 0;
    
    var lang = el.lang.value;
    var ans2 = el.que2.value;
    var ans3 = el.que3.value;
    var ans4 = el.que4.value;
    var ans5 = el.que5.value;
    var ans6 = el.que6.value;
    var ans7 = el.que7.value;
    var ans8 = el.que8.value;
    var ans9 = el.que9.value;
    var ans10 = el.que10.value;
    var ans11 = el.que11.value;
    var ans12 = el.que12.value;
    var ans13 = el.que13.value;
    var ans14 = el.que14.value;
    var ans15 = el.que15.value;
    var ans16 = el.que16.value;
    var ans17 = el.que17.value;
    var ans18 = el.que18.value;
    var ans19 = el.que19.value;
    var ans20 = el.que20.value;
    
    
    switch (lang) {
        case "Java":
            back++;
            engBD++;
            break;
        case "JavaScript":
            front++;
            break;
        case "Python":
            back++;
            engBD++;
            dataS++;
            break;
        case "None":
            tester++;
            break;
      }

      switch (ans2) {
        case "yes":
            back++;
            tester++;
            engBD++;
            dataS++;
            break;
        case "no":
            front++;
            break;
      }

      switch (ans3) {
        case "yes":
            tester++;
            engBD++;
            break;
        case "no":
            front++;
            back++;
            dataS++;
            break;
      }

      switch (ans4) {
        case "yes":
            front++;
            back++;
            dataS++;
            break;
        case "no":
            tester++;
            engBD++;
            break;
      }

      switch (ans5) {
        case "yes":
            back++;
            engBD++;
            dataS++;
            break;
        case "no":
            front++;
            tester++;
            break;
      }

      switch (ans6) {
        case "yes":
            back++;
            dataS++;
            break;
        case "no":
            front++;
            tester++;
            engBD++;
            break;
      }

      switch (ans7) {
        case "yes":
            back++;
            front++;
            break;
        case "no":
            dataS++;    
            tester++;
            engBD++;
            break;
      }

      switch (ans8) {
        case "yes":
            back++;
            front++;
            dataS++;
            break;
        case "no":   
            tester++;
            engBD++;
            break;
      }

      switch (ans9) {
        case "yes":
            back++;
            front++;
            engBD++;
            break;
        case "no":   
            tester++;
            dataS++;
            break;
      }

      switch (ans10) {
        case "yes":
            engBD++;
            tester++;
            dataS++;
            break;
        case "no":   
            back++;
            front++;
            break;
      }

      switch (ans11) {
        case "yes":
            front++;
            back++;
            dataS++;
            break;
        case "no":   
            tester++;
            engBD++;
            break;
      }

      switch (ans12) {
        case "yes":
            back++;
            dataS++;
            engBD++;
            break;
        case "no":   
            tester++;
            front++;
            break;
      }

      switch (ans13) {
        case "yes":
            back++;
            engBD++;
            break;
        case "no":   
            tester++;
            front++;
            dataS++;
            break;
      }

      switch (ans14) {
        case "yes":
            front++;
            back++;
            dataS++;
            break;
        case "no":   
            tester++;
            engBD++;
            break;
      }

      switch (ans15) {
        case "yes":
            back++;
            engBD++;
            dataS++;
            break;
        case "no":   
            tester++;
            front++;
            break;
      }

      switch (ans16) {
        case "yes":
            back++;
            engBD++;
            dataS++;
            tester++;
            break;
        case "no":   
            front++;
            break;
      }

      switch (ans17) {
        case "yes":
            tester++;
            engBD++;
            break;
        case "no":   
            front++;
            back++;
            dataS++;
            break;
      }

      switch (ans18) {
        case "yes":
            front++;
            back++;
            dataS++;
            engBD++;
            break;
        case "no":   
            tester++;
            break;
      }

      switch (ans19) {
        case "yes":
            front++;
            back++;
            dataS++;
            break;
        case "no":   
            tester++;
            engBD++;
            break;
      }

      switch (ans20) {
        case "yes":
            front++;
            back++;
            dataS++;
            engBD++;
            break;
        case "no":   
            tester++;
            break;
      }

   
    var fail = "";
        if (lang == "" || ans2 == "" || ans3 == "" || ans4 == "" || ans5 == "" || ans6 == "" || ans7 == "" || ans8 == "" || ans9 == "" || ans10 == "" || ans11 == "" || ans12 == "" || ans13 == "" || ans14 == "" || ans15 == "" || ans16 == "" || ans17 == "" || ans18 == "" || ans19 == "" || ans20 == ""){
            fail = "Ответьте на все вопросы!";
    }
   
    if(fail != ""){
        document.getElementById('error').innerHTML = fail;
        return false;
    }else{
        var mx = Math.max(front, back, tester, engBD, dataS);

        if (mx <= 10){
            mx = mx + 5;
            front = front + 5;
            back = back + 5;
            tester = tester + 5;
            engBD = engBD + 5;
            dataS = dataS + 5;
        }

        if (mx == front){
            alert("Поздравляю! Вы Фронтенд разработчик на: " + (front / 20).toFixed(2) * 100 + "%");
        }else if (mx == back){
            alert("Поздравляю! Вы Бэкенд разработчик на: " + (back / 20).toFixed(2) * 100 + "%");
        }else if (mx == tester){
            alert("Поздравляю! Вы Тестировщик на: " + (tester / 20).toFixed(2) * 100 + "%");
        }else if (mx == engBD){
            alert("Поздравляю! Вы Инженер базы данных на: " + (tester / 20).toFixed(2) * 100 + "%");
        }else if (mx == dataS){
            alert("Поздравляю! Вы Аналитик-программист на: " + (tester / 20).toFixed(2) * 100 + "%");
        }
        return true;
    }
}