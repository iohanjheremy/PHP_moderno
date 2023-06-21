<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    // operador de concatenação: (.) -> "curso" . "PHP" = "curso PHP"

    echo "PHP \u{1F418}";

    $nome = "iohan";
    $sobrenome="jheremy \u{1f596}";
    echo " $nome $sobrenome ";

    const ESTADO = "AM \u{1F49A}";
    echo "<br> Moro em " .ESTADO;

    echo "<br> Estamo no ano de " .date('Y');

    date_default_timezone_set("America/Manaus");
    echo "<br> A hora atual é: " . date('G:i:s');

    $nom = "Rodrigo";
    $snom = "Nogueira";
    //sequincia de escape para aspas duplas -> \n (nova linha), \t (tabulacao), \\ barra invertida, \$ (mostra o cifrao), \u{} (caratere unicode)


    echo "<br> $nom   \"Minotauro\" $snom <br>";


    // Sintaxe Heredoc
    $curso = "PHP";
    $ano = date('Y');

    echo <<< FRASE
      Estou estudando $curso em $ano <br>
          Em $ano faço 19 anos <br>
    FRASE;



    //Sintaxe Nowdoc
    echo <<< 'FRASE'
    Estou estudando $curso em $ano <br>
    Em $ano faço 19 anos
    FRASE;
  ?>
</body>
</html>