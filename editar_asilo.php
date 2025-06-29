<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil - Asilo | Happy Idosos</title>
    <link rel="stylesheet" href="css/stylePerfilAsilo.css">
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
    <h1>Editar Perfil - Asilo</h1>
    <p>Atualize os dados do seu perfil</p>
</section>

<main class="container-center">
    <div class="card">
        <h2 class="titulo-card">Dados do Asilo</h2>
        <p>Preencha os campos para atualizar.</p>

        <form action="#" method="POST">
            <label>Nome do Asilo</label>
            <input type="text" placeholder="Nome do Asilo">

            <label>CNPJ</label>
            <input type="text" placeholder="CNPJ">

            <label>Telefone</label>
            <input type="text" placeholder="Telefone">

            <label>Email</label>
            <input type="email" placeholder="Email">

            <label>CEP</label>
            <input type="text" placeholder="CEP">

            <label>Endereço</label>
            <input type="text" placeholder="Endereço">

            <label>Descrição</label>
            <textarea rows="4" placeholder="Fale um pouco sobre o asilo"></textarea>

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