<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabuada</title>
</head>
<body>
  <h1>Tabuada</h1>
  <form method="post">
    Insira o número ao qual você deseja ver a tabuada do 1 ao 10: <input type="number" name="nTab"> <input type="submit" value="Enviar"> <br>
  </form>

  <?php
    if(isset($_POST["nTab"])){
      echo "<br>";
      $nTab = $_POST["nTab"];
      $i = 1;

      for($i = 1; $i <= 10; $i++){
        echo "$i x ". $nTab. " = ". $i * $nTab. "<br>";
    }
  } else {
    echo "<br>(Aguardando Envio..)";
  }
  ?>
</body>
</html>