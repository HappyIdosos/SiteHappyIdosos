<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "happy_idosos";

$conn = new mysqli($host, $usuario, $senha, $banco);
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$cpf = $_GET['cpf'] ?? '';

if (!empty($cpf)) {
    $sql = "SELECT * FROM voluntarios WHERE cpf = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $cpf);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $voluntario = $resultado->fetch_assoc();
    } else {
        die("Voluntário não encontrado.");
    }
} else {
    die("CPF não informado.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - Voluntário | Happy Idosos</title>
    <link rel="stylesheet" href="css/stylePerfilVoluntario.css">
</head>

<body>

    <header class="header">
        <div class="logo">
            <img src="img/happyidosos.png" alt="Happy Idosos">
            <span>Happy Idosos</span>
        </div>
        <a href="index.php" class="voltar">Voltar ➝</a>
    </header>

    <section class="hero">
        <h1>Editar Perfil - Voluntário</h1>
        <p>Atualize seus dados de voluntário</p>
    </section>

    <main class="container-center">
        <div class="card">
            <h2 class="titulo-card">Dados do Voluntário</h2>
            <p>Preencha os campos para atualizar.</p>

            <form action="atualizar_voluntario.php" method="POST">
                <label>Nome Completo</label>
                <input type="text" name="nome" value="<?= $voluntario['nome'] ?? '' ?>" required>

                <label>CPF</label>
                <input type="text" name="cpf" value="<?= $voluntario['cpf'] ?? '' ?>" readonly>

                <label>Telefone</label>
                <input type="text" name="telefone" value="<?= $voluntario['telefone'] ?? '' ?>" required>

                <label>Email</label>
                <input type="email" name="email" value="<?= $voluntario['email'] ?? '' ?>" required>

                <label>Confirmar Email</label>
                <input type="email" name="confirmar_email" required>

                <label>CEP</label>
                <input type="text" name="cep" value="<?= $voluntario['cep'] ?? '' ?>">

                <label>Endereço</label>
                <input type="text" name="endereco" value="<?= $voluntario['endereco'] ?? '' ?>">

                <label>Data de Nascimento</label>
                <input type="date" name="nascimento" value="<?= $voluntario['nascimento'] ?? '' ?>">

                <label>Sobre Você</label>
                <textarea name="sobre" rows="4"><?= $voluntario['sobre'] ?? '' ?></textarea>

                <label>Nova Senha (opcional)</label>
                <input type="password" name="senha">

                <label>Confirmar Senha</label>
                <input type="password" name="confirmar_senha">

                <button type="submit">Salvar Alterações</button>
            </form>

        </div>
    </main>

    <footer>
        <div class="logo-footer">
            <img src="img/happyidosos.png" alt="Happy Idosos">
            <span>Happy Idosos</span>
        </div>
        <p>&copy; 2025 Happy Idosos. Todos os direitos reservados.</p>
    </footer>

</body>

</html>