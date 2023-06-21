<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calc Tempo</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <?php
    $total = $_GET['seg'] ?? 0;
  ?>
  <main>
    <h1>Calculadora de Tempo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
      <label for="seg">Qual é o total de segundos?</label>
      <input type="number" name="seg" id="seg" value="<?=$total?>" min="0" step="1" required>

      <input type="submit" value="Calcular">
    </form>
  </main>
  <?php
    $resto = $total;
    //total de semanas
    $semana =(int)($resto / 604_800);
    $resto = $resto % 604_800;
    //total de dias
    $dia =(int) ($resto / 86_400);
    $resto = $resto % 86_400;  
    //horas
   $hora = (int) ($resto / 3_600);
   $resto = $resto % 3_600;  
   //minutos
   $min = (int)($resto / 60);
   $resto = $resto % 60;
   //seg
   $seg = $resto;
  ?>
  <section>
    <h2>Totalizando tudo</h2>
    <p>Analisando o valor que você digitou, <strong><?=number_format($total, 0, ",", ".")?> segundos</strong> equivalem a um total de: </p>
    <ul>
      <li><?=$semana?> semanas</li>
      <li><?=$dia?> dias</li>
      <li><?=$hora?> horas</li>
      <li><?=$min?> minutos</li>
      <li><?=$seg?> segundos</li>
    </ul>
  </section>
</body>
</html>