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
          $query = "SELECT DISTINCT ptp.profession_name, ptt.PQ_id, tt.name_of_test, rof.result, tt.type_of_data, pq.kind FROM result_of_test AS `rof` JOIN PQ_to_test AS `ptt` ON rof.type_of_test = ptt.test_id JOIN test_type AS `tt` ON tt.id = rof.type_of_test JOIN result_of_test AS `rot` ON rot.type_of_test = rof.type_of_test JOIN PQ AS `pq` ON pq.id=ptt.PQ_id JOIN PQ_to_professions AS `ptp` ON ptp.PQ_id = ptt.PQ_id WHERE rof.email = 'test@mail.ru' GROUP BY tt.name_of_test, pq.kind, ptp.profession_name ORDER BY `ptp`.`profession_name` ASC, `pq`.`kind` ASC";
          $result = mysqli_query($link, $query) or die(mysqli_error($link));
          //////////////////fafdsafadfasdasdas
          $prev_prof = "";
          $prev_kind = "";
            while($row = mysqli_fetch_assoc($result)) {
              if($prev_prof!=$row["profession_name"] && $prev_kind != $row["kind"]){
                $prev_prof = $row["profession_name"];
                $prev_kind = $row["kind"];
                echo "<h1>" . $prev_prof . "</h1>";
                echo "<h2> - " . $prev_kind . " = ".round($new[$row["PQ_id"]], 2)."</h2>";
              }
              if($prev_prof==$row["profession_name"] && $prev_kind != $row["kind"]){
                $prev_prof = $row["profession_name"];
                $prev_kind = $row["kind"];
                echo "<h2> - " . $prev_kind . " = ".round($new[$row["PQ_id"]], 2)."</h2>";
              }
              if($prev_prof==$row["profession_name"] && $prev_kind == $row["kind"]){
                echo " -- " . $row["name_of_test"] ." = ".$row["result"] ." ". $row["type_of_data"] ."<br>";
              }
            }
    ?>
      </body>
    </html>


