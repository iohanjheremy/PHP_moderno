<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Resultado do processamento</h1>
  </header>
  <main>
    <?php
      //var_dump ($_GET); $_REQUEST eh jucao de $_GET + $_POST + $_COOKIES

      $nome = $_GET["nome"] ?? "sem nome";
      $sobrenome = $_GET["sobrenome"] ?? "desconhecido";

      echo "<p>É um grande prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é meu site !</p>";
    ?>
    <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
  </main>
</body>
</html>