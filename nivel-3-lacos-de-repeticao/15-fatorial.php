<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <h1>Fatorial</h1> <br>
    Insira o número ao qual você deseja fazer o cálculo fatorial: <input type="number" name="numberF"> <input type="submit" value="Enviar"> <br>
  </form>

  <?php
    if(isset($_POST["numberF"])){
      $numberF = $_POST["numberF"];

      $fatorial = 1;
      $i = $_POST["numberF"];

      while($i > 1){
        $fatorial *= $i;
        $i--;

      }
      echo "<br>O Fatorial de $numberF é: $fatorial";
    } else{
      echo "<br>(Aguardando Envio...)";
    }
  ?>
</body>
</html>