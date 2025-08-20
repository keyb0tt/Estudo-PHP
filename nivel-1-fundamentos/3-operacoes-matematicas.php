<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post">
    <h1>Somas Matemáticas</h1> <br>
    Insira o primeiro número: <input type="number" name="n1"> <br>
    Insira o segundo número: <input type="number" name="n2"> <br>
    <input type="submit" value="Enviar">
  </form>

  <?php
    if(isset($_POST["n1"]) && isset($_POST["n2"])){
      echo "<br>Soma: ". $_POST["n1"]. " + ". $_POST["n2"]. " é igual a: ". ($_POST["n1"] + $_POST["n2"]);
      echo "<br>Subtração: ". $_POST["n1"]. " - ". $_POST["n2"]. " é igual a: ". ($_POST["n1"] - $_POST["n2"]);
      echo "<br>Multiplicação: ". $_POST["n1"]. " x ". $_POST["n2"]. " é igual a: ". ($_POST["n1"] * $_POST["n2"]);
      echo "<br>Divisão: ". $_POST["n1"]. " / ". $_POST["n2"]. " é igual a: ". ($_POST["n1"] / $_POST["n2"]);
    } else {
      echo "<br>Aguardando envio...";
    }
  ?>
</body>
</html>