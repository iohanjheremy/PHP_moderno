<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Exemplo PHP</h1>
  <?php
    date_default_timezone_set("America/Manaus"); // configuracao de horario
    echo "Hoje e dia " .date("d/M/Y"); // data
    echo " e a hora atual e " .date("G:i:s "); // hora
  ?>
</body>
</html>