<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversor de moeda</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Conversor de Moedas v1.0</h1>
    <?php
      $valor = $_REQUEST["valor"] ?? 0;
      $cotacao = 5.17;

      $dolar = $valor / $cotacao;

      $padrao = numfmt_create("pt_br", NumberFormatter::CURRENCY);

      echo "<p>Seus " .numfmt_format_currency($padrao, $valor, "BRL"). " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD"). "</strong></p>";
      echo "* Cotação fixa de R$ $cotacao informada no código";
    ?>
    <button onclick="javascript:history.go(-1)">Voltar</button>
  </main>
</body>
</html>