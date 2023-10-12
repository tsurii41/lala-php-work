<?php
function team($name, ...$menbers)
{
  $list = implode("、", $menbers);
  return "{$name}:{$list}";
}
$team1 = Team("peach", "佐藤", "田中", "加藤");
$team2 = Team("カボス", "ひろし", "さえこ");
echo $team1 . "<br>" . PHP_EOL;
echo $team2;
