<?php
session_start();

// Dados do formulário
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "login");

// Verificar conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica se os campos foram preenchidos
if (empty($email) || empty($senha)) {
    echo "Por favor, preencha todos os campos.";
    exit();
}

// Consulta no banco de dados usando prepared statements
$sql = "SELECT idUsuario, nome, senha FROM usuario WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['idUsuario'] = $row['idUsuario'];
        header('Location: ./home.php');
        exit();
    } else {
        echo "Usuário ou senha inválidos!";
    }
} else {
    echo "Usuário ou senha inválidos!";
}

// Fechar a conexão
$conn->close();
