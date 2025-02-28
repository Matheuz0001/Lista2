<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta exercicio 19</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Resposta exercicio 19</h1>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            try {
                $dia = $_POST['dia'];
                if ($dia < 0 ) {
                    throw new Exception('O valor de dias não pode ser negativo');
                }

                $hora = $dia * 24;
                $minuto = $hora * 60;
                $segundo = $minuto * 60;
                
                echo "<h3>$dia dias equivalem a:</h3>";
                echo "<p>$hora horas</p>";
                echo "<p>$minuto minutos</p>";
                echo "<p>$segundo segundos</p>";
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }


        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>