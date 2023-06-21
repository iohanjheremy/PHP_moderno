<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Antecessor e sucessor</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main>
  <h1>Resultado Final</h1>
    <?php
      $num = $_POST["numero"];
      $ant= $num - 1;
      $suc = $num + 1;
 
      if($num){
        echo "<p> O número escolhido foi <strong>$num</strong></p>";
        echo "<p>O seu <i>antecessor</i> é $ant</p>";
        echo "<p>O seu <i>sucessor</i> é $suc</p>";
      }
    ?>
      <a href="javascript:history.go(-1)">
        <input type="button" value="&#129044 Voltar">
      </a>
    </form>
  </main>
</body>
</html>