<?php
// Conexão com o banco
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "happy_idosos";

$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica conexão
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

// Recebe os dados do formulário
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$nascimento = $_POST['nascimento'];
$email = $_POST['email'];
$confirmar_email = $_POST['confirmar_email'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Validação básica
if ($email !== $confirmar_email || $senha !== $confirmar_senha) {
    die("Erro: Email ou senha não conferem.");
}

// Criptografa a senha (boa prática)
$senhaHash = password_hash($senha, PASSWORD_DEFAULT);

// Prepara a query
$sql = "INSERT INTO voluntarios (cpf, telefone, cep, nascimento, email, senha)
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $cpf, $telefone, $cep, $nascimento, $email, $senhaHash);

// Executa e redireciona
if ($stmt->execute()) {
    header("Location: index.php"); // Redireciona para index
    exit();
} else {
    echo "Erro ao cadastrar: " . $stmt->error;
}

// Fecha conexão
$stmt->close();
$conn->close();
