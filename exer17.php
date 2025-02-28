<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exercicio 17</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Exercicio 17</h1>

        <form method="post" action="respostaexer17.php">

            <div class="mb-3">
                <label for="capital" class="form-label">Capital</label>
                <input type="number" id="capital" name="capital" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="taxa" class="form-label">Taxa</label>
                <input type="number" id="taxa" name="taxa" class="form-control" required="">
            </div>

            <div class="mb-3">
                <label for="periodo" class="form-label">Periodo</label>
                <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </div>
</body>

</html>