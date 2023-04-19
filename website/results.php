<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style1.css">
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
    $link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
    $query = "SELECT * FROM `profession_pqs`";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    //$pqs_query = "SELECT * FROM `PQ`";
    //$pqs_result = mysqli_query($link, $pqs_query);
    while($row = mysqli_fetch_assoc($result)) {
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
