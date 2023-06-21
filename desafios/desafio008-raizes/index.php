<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raizes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <?php
      $numero = $_GET['num'] ?? 0;
    ?>
    <h1>Informe um número</h1>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="num">Número</label>
      <input type="number" name="num" id="idnum" value="<?=$numero?>"> 

      <input type="submit" value="Calcular Raízes">
    </form>
  </main>

  <section>
    <h2>Resultado Final</h2>
    <?php
      $quad = $numero ** (1/2);
      $cubo = $numero ** (1/3);

      echo "<p>Analisando o <strong>número $numero</strong>, temos: </p>";

      echo "<ul><li>A sua raíz quadrada é = <strong>".number_format($quad, 2, ",", ".")."</strong></li>";
      echo "<li>A sua raíz cúbica é = <strong>".number_format($cubo, 2, ",", ".")."</strong></li></ul>";
    ?>   
  </section>
</body>
</html>