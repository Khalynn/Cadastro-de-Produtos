<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Formulário</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php $pg_atual = "novo"; include "navbar.php";?>

    <div class="container-fluid my-container mt-3">
        <h1>Adicionar Novo Produto</h1>
        <br>
        <form action="cria.php" method="post">
            
            <div class="mb-3 my-div">
                <input type="text" class="form-control-sm" id="nome" name="nome" placeholder="Nome:" required>
            </div>
            
            <div class="mb-3 my-div">
                <textarea class="form-control-sm mb" rows="5" id="desc" name="desc" placeholder="Descrição:"></textarea>
            </div>

            <div class="mb-3 my-div">
                <input type="number" step="0.01" class="form-control-sm" id="floatingInput" name="valor" placeholder="R$0.00" required>
            </div>

            <div class="mb-3 my-div">
                <input type="url" class="form-control-sm" id="url" name="url" placeholder="URL da imagem:"required>
            </div>

            <button type="submit" class="btn btn-primary my-btn">Adicionar Produto</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
