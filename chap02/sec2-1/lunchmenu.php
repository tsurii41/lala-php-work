<?php
$meat = "チキン南蛮香味だれ";
$fish = "サバの竜田揚げ";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    body {
      color: red;
    }
  </style>
</head>


<body>
  <div class="main-contents">
    本日のランチ、肉料理は、
    <h1><?php echo $meat; ?></h1>
    魚料理は、
    <h1><?php echo $fish; ?></h1>
  </div>
  です
  <br>

  <script>
    'use strict';
    alert('わはは');
  </script>
</body>

</html>