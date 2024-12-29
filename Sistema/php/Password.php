<?php
session_start();

$conn = new mysqli("localhost", "root", "", "login");

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $email = trim($_POST['email']);
    $nova_senha = trim($_POST['nova_senha']);
    $confirmar_senha = trim($_POST['confirmar_senha']);

    // Verifica se os campos foram preenchidos
    if (empty($email) || empty($nova_senha) || empty($confirmar_senha)) {
        echo '<script>alert("Por favor, preencha todos os campos!"); window.location.href = "../Senha.php";</script>';
        exit();
    }

    // Valida se as senhas coincidem
    if ($nova_senha !== $confirmar_senha) {
        echo '<script>alert("As senhas não coincidem!"); window.location.href = "../Senha.php";</script>';
        exit();
    }

    // Atualiza a senha no banco de dados (usando hash para segurança)
    $senha_hash = password_hash($nova_senha, PASSWORD_DEFAULT); // Hash da nova senha
    $sql_update = "UPDATE usuario SET senha = ? WHERE email = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("ss", $senha_hash, $email);

    if ($stmt->execute() && $stmt->affected_rows > 0) {
        echo '<script>alert("Senha alterada com sucesso!"); window.location.href = "../Login.php";</script>';
    } else {
        echo '<script>alert("Erro ao alterar senha ou email não encontrado!"); window.location.href = "../Senha.php";</script>';
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conn->close();
}

// Destroi a sessão
session_destroy();
