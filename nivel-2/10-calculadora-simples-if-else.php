<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora</title>
</head>
<body>
  <h1>Calculadora Simples</h1>
  <h2>Fazendo o uso de if/else</h2>
  <form method="post">
    Insira o <strong>primeiro</strong> número a ser calculado: <input type="number" name="n1"> <br>
    Insira o <strong>segundo</strong> número a ser calculado: <input type="number" name="n2"> <br> <br>
    Insira o <strong>operador</strong> a ser usado: <input type="number" name="operador"> <input type="submit" value="Enviar"> <br>
    <p>Operadores:</p>
    <p>1: +</p>
    <p>2: -</p>
    <p>3: /</p>
    <p>4: x</p>
    <p>---------------------------------------------------------------------------------------------------------</p>
  </form>

  <?php
    if(isset($_POST["n1"])&& isset($_POST["n2"]) && isset($_POST["operador"])){
      $operador = $_POST["operador"];
      if($operador == 1){
        echo "". $_POST["n1"]. " + ". $_POST["n2"]. " = ". $_POST["n1"] + $_POST["n2"];
      }else if($operador == 2){
        echo "". $_POST["n1"]. " - ". $_POST["n2"]. " = ". $_POST["n1"] - $_POST["n2"];
      }else if($operador == 3){
        echo "". $_POST["n1"]. " / ". $_POST["n2"]. " = ". $_POST["n1"] / $_POST["n2"];
      }else if($operador == 4){
        echo "". $_POST["n1"]. " x ". $_POST["n2"]. " = ". $_POST["n1"] * $_POST["n2"];
      }
    } else {
      echo "(Aguardando Envio...)";
    }
  ?>
</body>
</html>