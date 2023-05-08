<?php
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
for ($i = 0; $i < 162; $i++){
    if($new[$i] != null){
        echo "".strval($i)." => ".strval($new[$i])."<br>";
    }
}
?>
