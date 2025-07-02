<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Analisador de String</title>
</head>
<body>
  <h1>Análise de String</h1>

  <form method="post">
    <label for="texto">Digite uma string:</label><br>
    <input type="text" name="texto" id="texto" required><br><br>
    <button type="submit">Analisar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $textoOriginal = $_POST["texto"];
    $texto = mb_strtolower(preg_replace('/[^a-zA-Zá-úÁ-Ú]/u', '', $textoOriginal));

    $tamanho = mb_strlen($textoOriginal);

    // Verificação de palíndromo
    $reverso = mb_strrev($texto);
    $palindromo = ($texto === $reverso) ? "Sim" : "Não";

    // Contagem de vogais e consoantes
    $vogais = preg_match_all('/[aeiouáéíóú]/iu', $texto, $matches);
    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyz]/iu', $texto, $matches2);

    echo "<h2>Resultados:</h2>";
    echo "<ul>";
    echo "<li>Tamanho da string: <strong>$tamanho</strong></li>";
    echo "<li>É palíndromo: <strong>$palindromo</strong></li>";
    echo "<li>Número de vogais: <strong>$vogais</strong></li>";
    echo "<li>Número de consoantes: <strong>$consoantes</strong></li>";
    echo "</ul>";
  }

  // Função para inverter strings com suporte a multibyte
  function mb_strrev($string) {
    $result = '';
    for ($i = mb_strlen($string); $i >= 0; $i--) {
      $result .= mb_substr($string, $i, 1);
    }
    return $result;
  }
  ?>
</body>
</html>