<?php
$pattern = "/[4-9]-49/u";
$subject1 = "確か49-46でした";
$subject2 = "たぶん46-49でした";
$result1 = preg_match($pattern, $subject1);
$result2 = preg_match($pattern, $subject2);
$result3 = preg_match($pattern, "41-49かな？");

if ($result2) {
  echo "マッチしました";
} else {
  echo "マッチしません。";
}

// var_dump($result1); //int(0) 
// var_dump($result2); //int(1) 
// var_dump($result3);//bool(false) N