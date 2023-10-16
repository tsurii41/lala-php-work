
<?php
//$msg = "東京<->京都 'EAT & RUN'ツアー";
// $msg = "<script>alert('ウイルス発見！')</script>";
$msg = "<textarea></textarea>";
//echo $msg;
echo htmlspecialchars($msg, ENT_NOQUOTES, 'UTF-8');
// &lt;script&gt;alert('ウイルス発見！')&lt;/script&gt;
