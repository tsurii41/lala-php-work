<?php

$pattern = "/佐.+子/u";
// "佐和子","佐藤静子",
$subject = <<< "names"
佐藤由紀
佐藤ゆう子
塩田朋子
杉山薫
names;
$result = preg_match($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー:", preg_last_error();
}
if ($result == 0) {
  echo "マッチした値はありません";
} else {
  echo "「", $matches[0], "」が見つかりました";
}

echo "<pre>";
var_dump($matches);
echo "</pre>";
