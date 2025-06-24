<?php include 'header.php'; ?>

<!-- Estilos específicos da página -->
<link rel="stylesheet" href="css/style-eventos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<section class="hero hero-small">
    <div class="container hero-content">
        <div class="hero-text">
            <h2>Crie Seu Próprio Evento</h2>
            <p>Compartilhe sua ideia e organize um evento para nossos idosos e voluntários.</p>
        </div>
    </div>
</section>

<section class="main-content">
    <div class="container">
        <div class="criar-evento-form full-width-form">
            <h3>Detalhes do Evento</h3>
            <form method="POST" action="#">
                <div class="form-group">
                    <label for="nome-evento">Nome do Evento:</label>
                    <input type="text" id="nome-evento" name="nome-evento" placeholder="Ex: Tarde de Bingo Animado" required>
                </div>

                <div class="form-group">
                    <label for="tipo-evento">Tipo de Evento:</label>
                    <select id="tipo-evento" name="tipo-evento" required>
                        <option value="">Selecione o Tipo</option>
                        <option value="Musical">Musical</option>
                        <option value="Artes">Artes e Artesanato</option>
                        <option value="Social">Social e Conversa</option>
                        <option value="Educacional">Educacional</option>
                        <option value="Saude">Saúde e Bem-Estar</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data-evento">Data:</label>
                    <input type="date" id="data-evento" name="data-evento" required>
                </div>

                <div class="form-group">
                    <label for="hora-evento">Hora:</label>
                    <input type="time" id="hora-evento" name="hora-evento" required>
                </div>

                <div class="form-group">
                    <label for="duracao-evento">Duração Estimada (horas):</label>
                    <input type="number" id="duracao-evento" name="duracao-evento" min="0.5" step="0.5" placeholder="Ex: 2.0" required>
                </div>

                <div class="form-group">
                    <label for="local-evento">Local:</label>
                    <input type="text" id="local-evento" name="local-evento" placeholder="Ex: Lar dos Idosos Feliz" required>
                </div>

                <div class="form-group">
                    <label for="capacidade-max">Capacidade Máxima de Participantes (aprox.):</label>
                    <input type="number" id="capacidade-max" name="capacidade-max" min="1" placeholder="Ex: 30">
                </div>

                <div class="form-group">
                    <label for="publico-alvo">Público Alvo:</label>
                    <select id="publico-alvo" name="publico-alvo" required>
                        <option value="">Selecione</option>
                        <option value="Idosos">Apenas Idosos</option>
                        <option value="Voluntarios">Apenas Voluntários</option>
                        <option value="Ambos">Idosos e Voluntários</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="requisitos-voluntarios">Requisitos para Voluntários (opcional):</label>
                    <textarea id="requisitos-voluntarios" name="requisitos-voluntarios" rows="3" placeholder="Ex: Habilidade com instrumentos musicais, paciência."></textarea>
                </div>

                <div class="form-group">
                    <label for="descricao-evento">Descrição Detalhada do Evento:</label>
                    <textarea id="descricao-evento" name="descricao-evento" rows="7" placeholder="Descreva o evento em detalhes, atividades, objetivos, etc." required></textarea>
                </div>

                <div class="form-group">
                    <label for="contato-organizador">Contato do Organizador (Email ou Telefone):</label>
                    <input type="text" id="contato-organizador" name="contato-organizador" placeholder="Ex: seuemail@dominio.com" required>
                </div>

                <button type="submit" class="btn-submit-evento">Enviar Proposta de Evento</button>
            </form>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
