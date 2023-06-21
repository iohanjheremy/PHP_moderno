<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Médias Ariméticas</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $v1 = $_GET['v1'] ?? '';
    $v2 = $_GET['v2'] ?? '';

    $p1 = $_GET['p1'] ?? 1;
    $p2 = $_GET['p2'] ?? 1;
  ?>
  <main>
    <h1>Médias Aritiméticas</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="v1">1 Valor</label>
      <input type="number" name="v1" id="idv1" value="<?=$v1?>" required>

      <label for="p1">1 peso</label>
      <input type="number" name="p1" id="idp1" min="1" value="<?=$p1?>" required>

      <label for="v2">2 Valor</label>
      <input type="number" name="v2" id="idv2" value="<?=$v2?>" required>

      <label for="p2">2 Peso</label>
      <input type="number" name="p2" id="idp2" min="1" value="<?=$p2?>" required>

      <input type="submit" value="Calcular Médias">
    </form>
  </main>

  <section>
    <h2>Cálculo das Médias</h2>
    <?php
      $media1 = ($v1 +$v2)/ 2;
      $media2 = ($v1*$p1 + $v2*$p2)/ ($p1 +$p2);

      echo "Analisando os valores $v1 e $v2: ";
      echo "<ul><li>A <strong>Média Aritimética Simples</strong> entre os valores é igual a ".number_format($media1,  2, ",", ".")."</li>";
      echo "<li>A <strong>Média Aritimética Ponderada</strong> com pesos $p1 e $p2 é igual a ".number_format($media2, 2, ",", ".")."</li></ul>";
    ?>

  </section>
</body>
</html>