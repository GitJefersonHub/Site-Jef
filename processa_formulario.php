<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "meu_banco_de_dados";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Coleta os dados do formulário
$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$telefone = htmlspecialchars($_POST['telefone']);
$mensagem = htmlspecialchars($_POST['mensagem']);

// Prepara a consulta SQL para inserir os dados
$sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES ('$nome', '$email', '$telefone', '$mensagem')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Dados cadastrados com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>
