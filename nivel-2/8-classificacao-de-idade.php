<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Classificação de idade</h1>
    <form method="post">
      Insira a sua idade: <input type="number" name="idade"> <br>
      <input type="submit" value="Enviar"> <br>
    </form>

    <?php
      if(isset($_POST["idade"])){
        $idade = $_POST["idade"];

        if($idade < 12){
          echo "<br>Você é criança!";
        } else if($idade < 18) {
          echo "<br>Você é adolescente!";
        } else if($idade < 65) {
          echo "<br>Você é adulto!";
        } else if($idade >= 65) {
          echo "<br>Você é idoso!";
        }
      } else {
        echo "<br>Aguardando Envio...";
      }
    ?>
</body>
</html>