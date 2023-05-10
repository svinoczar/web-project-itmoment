<?php
error_reporting(E_ALL ^ E_WARNING); 
$link = mysqli_connect("VH297.spaceweb.ru", "hogdaw1gma", "mUhNf!JELM349ii", "hogdaw1gma");
session_start();
$email = $_SESSION["email"];
$query = "SELECT rof.`email`, rof.result, rof.type_of_test, ptt.PQ_id FROM `result_of_test` as
`rof` right join `PQ_to_test` as ptt on rof.type_of_test = ptt.test_id where rof.email = '$email'";

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

  $new = [];
  for ($i = 0; $i < 162; $i++){
    if($div_arr[$i] != null){
        $new[$i] = $arr[$i]/$div_arr[$i];
    }
}
// ДЛЯ КАЙФА ↓↓↓
// for ($i = 0; $i < 162; $i++){
//     if($new[$i] != null){
//         echo "".strval($i)." => ".strval($new[$i])."<br>";
//     }
// }
    
$query = "SELECT * FROM `PQ_to_professions`";
$result = mysqli_query($link, $query) or die(mysqli_error($link));

$professions = [];
$pqs = [];
while($row = mysqli_fetch_assoc($result)) {
    if (!in_array($row["profession_name"], $professions)) {
        array_push($professions, $row["profession_name"]);
    }
}
$div_arr = [];
foreach ($professions as $prof) {
    $pqs[$prof] = 0;
    $div_arr[$prof] = 0;
}

foreach ($professions as $prof) {
    $query = "SeLeCt PQ.id from PQ_to_professions as ptp left join PQ on PQ.id = ptp.PQ_id where profession_name = '$prof'";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
    while($row = mysqli_fetch_assoc($result)) {
        $pqs[$prof] += $new[$row["id"]];
        $div_arr[$prof] += 1;
    }
}

$weight = 0;
$name = "";
foreach ($professions as $prof) { 
    if ($pqs[$prof] / $div_arr[$name] > $weight) {
        $name = $prof;
        $weight = $pqs[$prof] / $div_arr[$name];
    }
}

$_SESSION["best_profession"] = $name;
$_SESSION["percentage"] = $weight;
?>
