<?php include 'header.php'; ?>

<link rel="stylesheet" href="css/style-buscarasilo.css">

<div class="page-wrapper">

    <!-- HERO -->
    <section class="hero">
        <h1>Encontre Asilos e Centros de Atividades</h1>
        <p>Busque por instituições próximas a você e descubra como pode ajudar.</p>
        <div class="search-bar">
            <input type="text" placeholder="Digite o nome ou cidade da instituição" />
            <button>Buscar</button>
        </div>
    </section>

    <!-- LISTAGEM DE ASILOS -->
    <section class="asilos-section">
        <div class="container">
            <div class="asilos-container" id="asilos-container">
                <!-- Card de exemplo -->
                <div class="asilo-card">
                    <h3>Lar dos Idosos Felizes</h3>
                    <p>Um espaço acolhedor para idosos com diversas atividades recreativas e culturais.</p>
                    <p>📍 São Paulo, SP</p>
                    <p>🎉 2 eventos próximos</p>
                    <div class="btn-group">
                        <button class="ver-detalhes">Ver Detalhes</button>
                        <button class="ver-eventos">Ver Eventos</button>
                    </div>
                </div>
                <!-- Outros cards serão adicionados via JS/API futuramente -->
            </div>

            <!-- BOTÃO CARREGAR MAIS -->
            <button class="btn-carregar">Carregar Mais</button>
        </div>
    </section>

</div>

<?php include 'footer.php'; ?>