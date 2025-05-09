<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Calculadora de Unidades</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
  <div class="container bg-primary py-6">
    <h2> 🏢TABANGO TOCTAGUANO </h2>

    <form method="POST">
      <label for="valor">Valor de la Unidad:</label>
      <input type="number" name="valor" id="valor" required>

      <label for="origen">Unidad de Origen:</label>
      <select name="origen" id="origen">
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
      </select>

      <label for="unidad">Convertir a:</label>
      <select name="unidad" id="unidad">
        <option value="C">Celsius</option>
        <option value="F">Fahrenheit</option>
      </select>

      <button type="submit">Convertir</button>
    </form>

    <?php
    if (isset($_POST["valor"])) {
      $valor = $_POST["valor"];
      $origen = $_POST["origen"];
      $unidad = $_POST["unidad"];

      if ($origen == "C" && $unidad == "F") {
        $resultado = ($valor * 9 / 5) + 32;
        echo "<p>$valor °C = " . round($resultado, 2) . " °F</p>";
      } else if ($origen == "F" && $unidad == "C") {
        $resultado = ($valor - 32) * 5 / 9;
        echo "<p>$valor °F = " . round($resultado, 2) . " °C</p>";
      }
    }
    ?>
  </div>
</body>

</html>