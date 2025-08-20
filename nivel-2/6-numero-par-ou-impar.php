<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Par ou Ímpar</h1> <br>
  <form method="post">
    Insira o seu número: <input type="number" name="num"> <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
    if(isset($_POST["num"])){
      $num = $_POST["num"];

      if($num % 2 == 0){
        echo "<br>O seu número é par!";
      } else {
        echo "<br>O seu número é ímpar!";
      }
    } else {
      echo "<br>Aguardando Envio...";
    }
  ?>
</body>
</html>