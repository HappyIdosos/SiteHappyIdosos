<?php
// Conexão com o banco
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "happy_idosos";

$conn = new mysqli($host, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe os dados
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$confirmar_email = $_POST['confirmar_email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Verifica email
if ($email !== $confirmar_email) {
    die("Erro: os e-mails não coincidem.");
}

// Verifica senha se foi informada
$atualizarSenha = false;
if (!empty($senha)) {
    if ($senha !== $confirmar_senha) {
        die("Erro: as senhas não coincidem.");
    }
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $atualizarSenha = true;
}

// Prepara a SQL com ou sem senha
if ($atualizarSenha) {
    $sql = "UPDATE voluntarios SET telefone = ?, cep = ?, nascimento = ?, email = ?, senha = ? WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $telefone, $cep, $nascimento, $email, $senhaHash, $cpf);
} else {
    $sql = "UPDATE voluntarios SET telefone = ?, cep = ?, nascimento = ?, email = ? WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $telefone, $cep, $nascimento, $email, $cpf);
}

// Executa a atualização
if ($stmt->execute()) {
    header("Location: index.php"); // volta para a home
    exit();
} else {
    echo "Erro ao atualizar: " . $stmt->error;
}

$stmt->close();
$conn->close();
