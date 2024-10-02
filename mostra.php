<?php 
    include_once 'produto.php'; //Inicialização da classe produto
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Mostrar Produtos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php $pg_atual = "mostra"; include "navbar.php"; ?>

    <div class="container my-container mt-3">
        <h1 class="my-h1">Produtos Salvos</h1>
        <br>
        <div class="row">
            <?php if (isset($_SESSION['produtos']) && count($_SESSION['produtos']) > 0): // Verificação de se é válido adicionar algum produto
                foreach ($_SESSION['produtos'] as $produto): // Caso seja, pega todos os produtos em sessão e mostra os mesmos salvos
                    echo '<div class="col-md-4 mb-4">';
                        $produto->exibirInformacoes(); // Card de um produto específico 
                    echo '</div>';
                endforeach; ?>
            <?php else: echo '<p class="my-p">Nenhum produto foi adicionado.</p>'; ?>
            <?php endif; ?>
        </div>
        <a href="novo.php" class="btn btn-success mt-4 my-a">Adicionar Novo Produto</a>
        <a href="limpar.php" class="btn btn-danger mt-4">Limpar Produtos</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
