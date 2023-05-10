<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/styletest.css">

    <title>ITMOMENT</title>
    <script type="text/x-mathjax-config">
        MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
      </script>
      <script type="text/javascript"
        src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
      </script>
</script>
  </head>
  <body>
   <p style="text-align: center;">Формула расчета веса профессии на основе весов пвк <h1 style="text-align: center;">$\frac{\sum\frac{\sum_i(n_i)}{|n|}}{C}$</h1></p>
   <h3 style="text-align: center;">Где $n$ - вектор весов всех пвк</h3>
   <h3 style="text-align: center;">Где $C$ - количество наиболее значимых пвк для профессии</h3>
   <?php
      $link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
      session_start();
      $email = $_SESSION["email"];
      $query = "SELECT rof.`email`, rof.result, rof.type_of_test, ptt.PQ_id, tt.name_of_test, pq.kind FROM `result_of_test` as `rof` 
      join `PQ_to_test` as ptt on rof.type_of_test = ptt.test_id 
      join `test_type` as tt on tt.id = rof.type_of_test
      join `PQ` as pq on pq.id=ptt.PQ_id where rof.email = '$email'
      order by pq.kind asc ";

      $result = mysqli_query($link, $query) or die(mysqli_error($link));
      $arr = [];
      $div_arr = [];
      while($row = mysqli_fetch_assoc($result)) {

          if($row["type_of_test"]<=5){
              $normalized = abs(($row["result"]/1000) - 1);
          }
          if($row["type_of_test"]>5){
              $normalized = abs($row["result"])/100;
          }
          if($arr[$row["PQ_id"]]==null){
              $arr[$row["PQ_id"]] = $normalized;
              $div_arr[$row["PQ_id"]] = 1;
          }
          if($arr[$row["PQ_id"]]!=null){
              $arr[$row["PQ_id"]] += $normalized;
              $div_arr[$row["PQ_id"]] += 1;
          }
        }
//rof.`email`, rof.result, rof.type_of_test, ptt.PQ_id, tt.name_of_test, pq.kind 
        $new = [];
        for ($i = 0; $i < 162; $i++){
          if($div_arr[$i] != null){
              $new[$i] = $arr[$i]/$div_arr[$i];
          } else {
              $new[$i] = 0;
          }
        }
          echo "После расчетов по данной формуле были получены следующие веса у пвк(До финальной суммы для подробностей):<br>";
          $query = "SELECT ptt.PQ_id, tt.name_of_test, pq.kind FROM result_of_test as rof       join PQ_to_test as ptt on rof.type_of_test = ptt.test_id        join test_type as tt on tt.id = rof.type_of_test
          join PQ as pq on pq.id=ptt.PQ_id      group by ptt.PQ_id, tt.name_of_test, pq.kind order by tt.name_of_test asc;";
          $result = mysqli_query($link, $query) or die(mysqli_error($link));
          //////////////////fafdsafadfasdasdas
          $c = 0;

            echo "<h1>Специалист информационной безопасности-</h1>";
            while($row = mysqli_fetch_assoc($result) and $c < 8) {
              $c+=1;
              echo "<br> ".$row["kind"]." - ".$row["name_of_test"]." - ".round($new[$row["PQ_id"]], 2)."";
            }

            echo "<h1><br>Тестировщик-</h1>";
            while($row = mysqli_fetch_assoc($result) and $c >= 8 and $c <= 16) {
              $c+=1;
              echo "<br> ".$row["kind"]." - ".$row["name_of_test"]." - ".round($new[$row["PQ_id"]], 2)."";
            }

            echo "<h1><br>Data Scientist-</h1>";
            while($row = mysqli_fetch_assoc($result) and $c > 16) {
              $c+=1;
              echo "<br> ".$row["kind"]." - ".$row["name_of_test"]." - ".round($new[$row["PQ_id"]], 2)."";
            }

      
    ?>
      </body>
    </html>


