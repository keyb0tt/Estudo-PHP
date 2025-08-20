<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Calculadora de média escolar</h1>
  <form method="post">
    Insira a sua primeira nota: <input type="number" name="n1"> <br>
    Insira a sua segunda nota: <input type="number" name="n2"> <br>
    Insira a sua terceira nota: <input type="number" name="n3"> <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
    if(isset($_POST["n1"]) && isset($_POST["n1"]) && isset($_POST["n1"])){
      $media = ($_POST["n1"] + $_POST["n2"] + $_POST["n3"]) / 3;

      if($media >= 7){
        echo "<br>Parabéns! Você foi aprovado! <br>Sua média: $media";
      } else if ($media >=5) {
        echo "<br>Você ficou de recuperação! <br>Sua média: $media";
      } else {
        echo "<br>Você foi reprovado! <br>Sua média: $media";
      }
    } else {
      echo "<br>Aguardando Envio...";
    }
  ?>
</body>
</html>