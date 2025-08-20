<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Números Pares</title>
</head>
<body>
  <h1>Números pares até 100</h1>
</body>

<?php
  echo "<br>";
  $i = 2;

  for($i = 2; $i <= 100; $i += 2){
    echo "$i ";
  }
?>
</html>