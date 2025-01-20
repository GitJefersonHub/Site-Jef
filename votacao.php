<?php
session_start();

// Inicializa os votos se ainda não estiverem definidos
if (!isset($_SESSION['votos'])) {
    $_SESSION['votos'] = [
        '1' => 0,
        '2' => 0,
        '3' => 0
    ];
}

// Processa o voto
if (isset($_POST['candidato'])) {
    $candidato = $_POST['candidato'];
    if (isset($_SESSION['votos'][$candidato])) {
        $_SESSION['votos'][$candidato]++;
    }
}

// Exibe o resultado e encerra a votação
if (isset($_POST['sair']) && $_POST['sair'] == 'sair') {
    echo "<h1>Resultado da Votação</h1>";
    echo "<p>Candidato 1: " . $_SESSION['votos']['1'] . " votos</p>";
    echo "<p>Candidato 2: " . $_SESSION['votos']['2'] . " votos</p>";
    echo "<p>Candidato 3: " . $_SESSION['votos']['3'] . " votos</p>";
    session_destroy();
    exit();
}

// Redireciona de volta para o formulário de votação
header("Location: index.html");
exit();
?>
