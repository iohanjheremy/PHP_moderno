<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerador de números </title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
    <h1>Trabalhando com números aleatórios</h1>

      <?php
        $gera = mt_rand(0, 100);

        echo "Gerando um número aleatório entre 0 e 100";
        echo "<p>O valor gerado foi <strong>$gera</strong></p>"; 
      ?>
     <button onclick = "window.location.reload()">&#128260; Gerar outro </button>
  </main>
</body>
</html>