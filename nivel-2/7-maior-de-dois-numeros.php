<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Maior de dois números</h1>
  <form method="post">
    Insira o primeiro número: <input type="number" name="n1"> <br>
    Insira o segundo número: <input type="number" name="n2"> <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
    if(isset($_POST["n1"]) && isset($_POST["n2"])){
      $n1 = $_POST["n1"];
      $n2 = $_POST["n2"];

      if($n1 > $n2){
        echo "<br>O maior número inserido foi $n1";
      } else if($n1 < $n2){
        echo "<br>O maior número inserido foi $n2";
      } else if($n1 == $n2){
        echo "<br>Os números inseridos são iguais";
      }
    } else {
      echo "<br>Aguardando Envio...";
    }
  ?>
</body>
</html>