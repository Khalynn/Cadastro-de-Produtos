<?php
    session_start();
    $pg_atual = "limpar";

    // Destrói todas as variáveis de sessão
    $_SESSION = [];

    // Remove o cookie de sessão caso exista
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();

    header("Location: novo.php");
    exit();
?>
