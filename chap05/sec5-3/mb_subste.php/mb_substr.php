
<?php
$msg = "吾輩は猫である。名前はまだない。";
echo mb_strlen($msg), "<br>", PHP_EOL; //16
echo mb_substr($msg, 4), "<br>", PHP_EOL;
//である。名前はまだない
echo mb_substr($msg, 4, 10), "<br>", PHP_EOL;
//である。名前はまだな
echo mb_substr($msg, -6), "<br>", PHP_EOL;
//はまだない

$msg2 = "春はあけぼの。";
//$msg2 = mb_substr($msg2, 0, -1);
echo $msg2, "<br>", PHP_EOL;


$msg3 = "pease";
echo $msg3[3];
