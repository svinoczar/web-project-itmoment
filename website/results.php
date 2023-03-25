<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/results.css">

    <title>ITMOMENT</title>
  </head>
  <body>

    <table class="table" width=100% height=100% border=1 valign=MIDDLE>
 <tr>
  <th>Эксперт</th>
  <th>Профессия</th>
  <th>ПВК</th>
 </tr>
    <?php
    $link = mysqli_connect("db4free.net", "itmo_user", "mUhNf!JELM349ii", "itmoment");
    $query = "SELECT * FROM `profession_pqs`";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    //$pqs_query = "SELECT * FROM `PQ`";
    //$pqs_result = mysqli_query($link, $pqs_query);
    while($row = mysqli_fetch_assoc($result)) {
      //$pqs_new = "";
      // while($pqs_row = mysqli_fetch_assoc($pqs_result)){
      // if((string) $row["pqs"][$my_row["id"]-1] = "1" && $my_row["kind"]!=null){
      //     $pqs_new+=$my_row["kind"] + ", ";
      //   }
      // }
      echo "<tr>
      <td>".$row["expert_email"]."</td>
      <td>".$row["profession_name"]."</td>
      <td>".$row["pqs"]."</td>
           </tr>";
    }
    mysqli_close($link);
    ?>
</table>

  </body>
</html>