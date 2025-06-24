<?php include 'header.php'; ?>

<!-- Estilo personalizado -->
<link rel="stylesheet" href="css/style-cadastro.css">


<section class="hero">
  <h1>Faça seu cadastro</h1>
  <p>Esteja diretamente conectado conosco!</p>
</section>

<main>
  <div class="login-card">
    <h2>Cadastro de Asilo</h2>
    <p class="sub">Preencha todos os campos abaixo.</p>

    <form class="form-grid" method="POST" action="#">
      <div class="form-group">
        <label for="cep">CEP</label>
        <input type="text" id="cep" name="cep" placeholder="Seu CEP" required>
      </div>

      <div class="form-group">
        <label for="cnpj">CNPJ</label>
        <input type="text" id="cnpj" name="cnpj" placeholder="Seu CNPJ" required>
      </div>

      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" placeholder="Seu telefone" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Seu email" required>
      </div>

      <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" placeholder="Sua senha" required>
      </div>

      <div class="form-group">
        <label for="confirmar_senha">Confirme sua senha</label>
        <input type="password" id="confirmar_senha" name="confirmar_senha" placeholder="Confirme sua senha" required>
      </div>

      <div class="form-full">
        <button type="submit" class="btn">Fazer cadastro</button>
      </div>
    </form>
  </div>
</main>

<?php include 'footer.php'; ?>