<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soma de 1 a N</title>
</head>
<body>
  <h1>Soma de 1 a N</h1>
  <form method="post">
    Escolha o número: <input type="number" name="finalNumber"> <input type="submit" value="Enviar"> <br>
  </form>

  <?php
    if(isset($_POST["finalNumber"])){
      echo "<br>";
      $finalNumber = $_POST["finalNumber"];
      $i = 1;
      $sum = 0;

      for($i = 1; $i <= $finalNumber; $i++){
        echo " ".$sum += $i;
      }
      echo "<br>";
      echo "<br>A soma de todos os números de 1 até $finalNumber é $sum";
    } else{
      echo "<br>(Aguardando Envio...)";
    }
  ?>
</body>
</html>