<?php
function twice(float $var): int
{
  $var *= 2; //21.6
  return $var; //21
}
$num = 10.8;
$result = twice($num);
echo "{$num}の２倍は", $result;
