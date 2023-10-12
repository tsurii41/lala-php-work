<?php



//乱数で0から３の数を発生させて
//運勢を返す



function uranai()
{
  $fortune = ["大吉", "中吉", "小吉", "凶"];
  $num = mt_rand(0, 3);
  return $fortune[$num];
}
echo uranai();
