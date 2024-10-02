<?php
    include_once 'produto.php'; //Inicialização da classe produto
    session_start();

    // Verifica se o formulário foi submetido via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Coleta os dados do formulário
        $nome = $_POST['nome'];
        $desc = $_POST['desc'];
        $valor = $_POST['valor'];
        $url = $_POST['url'];
    
        // Cria um novo objeto Produto
        $produto = new Produto($nome, $desc, $valor, $url);
    
        // Verifica se a sessão com 'produtos' já existe e caso não exista...
        if (!isset($_SESSION['produtos'])) {
            $_SESSION['produtos'] = []; // Cria um array vazio
        }
    
        // Adiciona o novo produto ao array de produtos na sessão
        $_SESSION['produtos'][] = $produto;
    
        header("Location: mostra.php");
        exit();
    }
?>