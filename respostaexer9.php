<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta exercicio 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Resposta exercicio 9</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $raio = (float) $_POST['raio'];

                if ($raio <= 0) {
                    throw new Exception('O raio deve ser um valor positivo.');
                }

                // Calcula a área do círculo (π * r²)
                $area = pi() * pow($raio, 2);
                echo "<h3>A área do círculo é: " . number_format($area, 2, ',', '.') . " unidades²</h3>";
            } catch (Exception $e) {
                echo "<p style='color: red;'>" . $e->getMessage() . "</p>";
            }
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>