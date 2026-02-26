<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frota - WL Motors</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="visual.css">
    <link rel="stylesheet" href="/css/frota.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
   
</head>

<body>
    <!-- Navbar Premium -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/home">
                <span class="logo-text">WL <span class="logo-highlight">MOTORS</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/frota">Frota</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contato">Contato</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-reserva" href="/reserva">Reserve Agora</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Banner da Frota -->
    <section class="frota-hero">
        <div class="container">
            <div class="frota-hero-content">
                <h1>Nossa Frota</h1>
                <p>As marcas mais exclusivas do mundo em um só lugar</p>
            </div>
        </div>
    </section>

    <!-- ===== SEÇÃO DE MARCAS EM CARROSSEL COM LOGOS ONLINE ===== -->
    <section class="marcas-section">
        <div class="container">
            <div class="section-title">
                <h2>Escolha sua marca</h2>
                <p>Clique em uma das marcas abaixo para ver todos os modelos disponíveis</p>
            </div>

            <div class="marcas-carousel">
                <div class="carrossel-container">
                    <!-- Setas de Navegação -->
                    <button class="carrossel-control prev" id="prevBtn">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="carrossel-control next" id="nextBtn">
                        <i class="fas fa-chevron-right"></i>
                    </button>

                    <!-- Wrapper do Carrossel -->
                    <div class="carrossel-wrapper">
                        <div class="carrossel-slides" id="carrosselSlides">
                            <!-- Lamborghini -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('lamborghini')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.JwVz7LgRBeLNfCI3vVi-hgHaE8?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Lamborghini">
                                    </div>
                                    <h3>Lamborghini</h3>
                                    <span>8 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Ferrari -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('ferrari')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.rtcNqcprfCXgtbJ1bFb7IAHaFS?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Ferrari">
                                    </div>
                                    <h3>Ferrari</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Porsche -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('porsche')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://s1.cdn.autoevolution.com/images/news/porsche-macan-hd-wallpapers-81724_6.jpg" alt="Porsche">
                                    </div>
                                    <h3>Porsche</h3>
                                    <span>10 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Mercedes-Benz -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('mercedes')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.iHY0auMnKdqR90ZhZmrSfgHaEX?w=312&h=183&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" alt="Mercedes-Benz">
                                    </div>
                                    <h3>Mercedes-Benz</h3>
                                    <span>12 modelos</span>
                                </a>
                            </div>
                            
                            <!-- BMW -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('bmw')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse2.mm.bing.net/th/id/OIP.DkUOwy5OvcWTJ3WuyAGUQQHaFb?rs=1&pid=ImgDetMain&o=7&rm=3" alt="BMW">
                                    </div>
                                    <h3>BMW</h3>
                                    <span>9 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Audi -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('audi')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://images.unsplash.com/photo-1638073732451-530d995ddd0e?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8czV8ZW58MHwwfDB8fHwwg" alt="Audi">
                                    </div>
                                    <h3>Audi</h3>
                                    <span>7 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Rolls Royce -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('royce')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse3.mm.bing.net/th/id/OIP.deCWpueudGuv_iR5iwtYVgHaE-?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="Rolls Royce">
                                    </div>
                                    <h3>Rolls Royce</h3>
                                    <span>4 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Bentley -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('bentley')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.aFKct7YUqyTn1VYevlUSyQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bentley">
                                    </div>
                                    <h3>Bentley</h3>
                                    <span>5 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Maserati -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('maserati')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse1.mm.bing.net/th/id/OIP.-T4TDHVJLaMNHvvSzf6_-wHaEK?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="Maserati">
                                    </div>
                                    <h3>Maserati</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- McLaren -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('mclaren')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.CYbgvjq4BBKkcjXulr0mzQHaEK?pid=ImgDet&w=60&h=60&c=7&dpr=1,3&rs=1&o=7&rm=3" alt="McLaren">
                                    </div>
                                    <h3>McLaren</h3>
                                    <span>4 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Aston Martin -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('martin')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse2.mm.bing.net/th/id/OIP.L06MJ0x5AT4nUC_9LaRXCwHaFj?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Aston Martin">
                                    </div>
                                    <h3>Aston Martin</h3>
                                    <span>5 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Jaguar -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('Jaguar')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://wallpapercave.com/wp/wp1854093.jpg" alt="Jaguar">
                                    </div>
                                    <h3>Jaguar</h3>
                                    <span>6 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Land Rover -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('Rover')"  class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.YjQk2IVCs0T6RLgLimcE2wHaE7?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Land Rover">
                                    </div>
                                    <h3>Land Rover</h3>
                                    <span>7 modelos</span>
                                </a>
                            </div>
                            
                            <!-- Bugatti -->
                            <div class="carrossel-slide">
                                <a onclick="abrirModal('buggati')" class="marca-card">
                                    <div class="marca-avatar">
                                        <img src="https://tse4.mm.bing.net/th/id/OIP.9HiyUxiARpqGvEh3f3xYdwHaE8?w=1024&h=683&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Bugatti">
                                    </div>
                                    <h3>Bugatti</h3>
                                    <span>3 modelos</span>
                                </a>
                            </div>
                            
                           
                        </div>
                    </div>
                </div>

                <!-- Indicadores (bolinhas) -->
                <div class="carrossel-indicators" id="indicators"></div>
            </div>
        </div>
    </section>


<!-- CSS da Modal com Cards -->
<style>
/* Estilos para a modal */
/* Estilos para a modal - Amarelo e Preto */
.modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    animation: fadeIn 0.3s ease;
    overflow-y: auto;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.modal-content {
    background: #1a1a1a;
    margin: 3% auto;
    padding: 0;
    border-radius: 20px;
    width: 95%;
    max-width: 1200px;
    box-shadow: 0 25px 50px rgba(255, 215, 0, 0.15);
    animation: slideIn 0.4s ease;
    border: 2px solid #eacc24;
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    padding: 20px 30px;
    background: #000000;
    color: #ffd700;
    border-radius: 18px 18px 0 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 2px solid #ffd700;
}

.modal-header h2 {
    margin: 0;
    font-size: 2rem;
    font-weight: 600;
    font-family: 'Playfair Display', serif;
    color: #ffd700;
}

.modal-header h2 i {
    margin-right: 10px;
    color: #ffd700;
}

.close {
    color: #ffd700;
    font-size: 32px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #333;
}

.close:hover {
    color: #000000;
    background: #ffd700;
    transform: rotate(90deg);
}

.modal-body {
    padding: 30px;
    max-height: 70vh;
    overflow-y: auto;
    background: #1a1a1a;
}

/* Container dos Cards */
.carros-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 25px;
    padding: 10px;
}

/* Card do Carro - Cinza Escuro */
.carro-card {
    background: #2d2d2d;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
    transition: all 0.3s ease;
    position: relative;
    border: 1px solid #404040;
}

.carro-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(255, 215, 0, 0.2);
    border-color: #ffd700;
}

.carro-imagem {
    width: 100%;
    height: 200px;
    overflow: hidden;
    position: relative;
}

.carro-imagem img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.carro-card:hover .carro-imagem img {
    transform: scale(1.1);
}

.carro-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: #ffd700;
    color: #000000;
    padding: 5px 15px;
    border-radius: 20px;
    font-weight: 600;
    font-size: 0.9rem;
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.3);
    z-index: 2;
}

.carro-info {
    padding: 20px;
}

.carro-nome {
    font-size: 1.3rem;
    font-weight: 700;
    margin-bottom: 10px;
    color: #ffd700;
    font-family: 'Playfair Display', serif;
}

.carro-detalhes {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
    margin-bottom: 15px;
}

.detalhe-item {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.9rem;
    color: #cccccc;
}

.detalhe-item i {
    width: 20px;
    color: #ffd700;
    font-size: 1rem;
}

.carro-preco {
    font-size: 1.4rem;
    font-weight: 700;
    color: #ffd700;
    margin: 15px 0;
    display: flex;
    align-items: center;
    gap: 5px;
}

.carro-preco small {
    font-size: 0.8rem;
    color: #999999;
    font-weight: normal;
}

.carro-descricao {
    font-size: 0.9rem;
    color: #b0b0b0;
    line-height: 1.5;
    margin-bottom: 20px;
    padding-top: 15px;
    border-top: 1px solid #404040;
}

.carro-acoes {
    display: flex;
    gap: 10px;
}

.btn-reservar {
    flex: 1;
    background: #ffd700;
    color: #000000;
    border: none;
    padding: 10px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-reservar:hover {
    background: #ffed4a;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
}

.btn-detalhes {
    flex: 1;
    background: #404040;
    color: #ffd700;
    border: 2px solid #ffd700;
    padding: 8px;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-detalhes:hover {
    background: #ffd700;
    color: #000000;
}

/* Loading Spinner */
.loading-spinner {
    text-align: center;
    padding: 50px;
    color: #ffd700;
}

.spinner {
    border: 4px solid #333;
    border-radius: 50%;
    border-top: 4px solid #ffd700;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
    margin: 0 auto 20px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Mensagem quando não há carros */
.sem-carros {
    text-align: center;
    padding: 60px 20px;
    color: #ffd700;
    background: #2d2d2d;
    border-radius: 15px;
    border: 1px solid #404040;
}

.sem-carros i {
    font-size: 5rem;
    color: #ffd700;
    margin-bottom: 20px;
}

.sem-carros h3 {
    font-size: 1.8rem;
    margin-bottom: 10px;
    color: #ffd700;
}

.sem-carros p {
    font-size: 1.1rem;
    color: #cccccc;
}

/* Scrollbar personalizada */
.modal-body::-webkit-scrollbar {
    width: 8px;
}

.modal-body::-webkit-scrollbar-track {
    background: #333;
    border-radius: 10px;
}

.modal-body::-webkit-scrollbar-thumb {
    background: #ffd700;
    border-radius: 10px;
}

.modal-body::-webkit-scrollbar-thumb:hover {
    background: #ffed4a;
}

/* Responsividade */
@media screen and (max-width: 768px) {
    .modal-content {
        width: 98%;
        margin: 2% auto;
    }
    
    .modal-header h2 {
        font-size: 1.5rem;
    }
    
    .modal-body {
        padding: 15px;
    }
    
    .carros-container {
        grid-template-columns: 1fr;
    }
    
    .carro-imagem {
        height: 180px;
    }
}
</style>

<!-- HTML da Modal Atualizada -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2><i class="fas fa-car"></i> <span id="modal-titulo">Veículos Disponíveis</span></h2>
            <span class="close" onclick="fecharModal()">&times;</span>
        </div>
        <div class="modal-body" id="modal-body-content">
            <!-- Loading spinner (aparece enquanto carrega) -->
            <div id="loading-spinner" class="loading-spinner">
                <div class="spinner"></div>
                <p>Carregando veículos...</p>
            </div>
            
            <!-- Container dos cards (inicialmente vazio) -->
            <div id="carros-container" class="carros-container" style="display: none;"></div>
        </div>
    </div>
</div>

<!-- JavaScript da Modal Atualizado -->
<script>
// Função para formatar valor em reais
function formatarValor(valor) {
    return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
    }).format(valor);
}

// Função para criar o HTML do card do carro
function criarCardCarro(carro) {
    // Mapeamento de ícones para cada campo
    const icones = {
        ano: 'fa-calendar',
        cor: 'fa-palette',
        placa: 'fa-id-card',
        potencia: 'fa-horse-head',
        gasolina: 'fa-gas-pump',
        fabricante: 'fa-industry'
    };

    return `
        <div class="carro-card">
            <div class="carro-imagem">
                <img src="${carro.imagem || 'N/I'}" 
                     alt="${carro.modelo}"
                     onerror="this.src='https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60'">
                <div class="carro-badge">${carro.fabricante || 'Premium'}</div>
            </div>
            <div class="carro-info">
                <h3 class="carro-nome">${carro.modelo || 'Modelo não disponível'}</h3>
                
                <div class="carro-detalhes">
                    <div class="detalhe-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>${carro.ano || 'N/I'}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-palette"></i>
                        <span>${carro.cor || 'N/I'}</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>${carro.potencia || 'N/I'} cv</span>
                    </div>
                    <div class="detalhe-item">
                        <i class="fas fa-gas-pump"></i>
                        <span>${carro.tipo_gasolina || 'N/I'}</span>
                    </div>
                </div>
                
                <div class="carro-preco">
                    ${formatarValor(carro.valor || 0)}
                    <small>/dia</small>
                </div>
                
                <div class="carro-descricao">
                    ${carro.sobre || 'Veículo de luxo com acabamento premium e tecnologia de ponta.'}
                </div>
                
                <div class="carro-acoes">
                    <button class="btn-reservar" onclick="reservarCarro(${carro.id})">
                        <i class="fas fa-calendar-check"></i> Reservar
                    </button>
                    <button class="btn-detalhes" onclick="verDetalhes(${carro.id})">
                        <i class="fas fa-info-circle"></i> Detalhes
                    </button>
                </div>
            </div>
        </div>
    `;
}

// Função para abrir a modal e carregar os carros
function abrirModal(fabricante) {
    const modal = document.getElementById("myModal");
    const loadingSpinner = document.getElementById("loading-spinner");
    const carrosContainer = document.getElementById("carros-container");
    const modalTitulo = document.getElementById("modal-titulo");
    
    // Atualiza o título da modal com o fabricante selecionado
    if (fabricante) {
        modalTitulo.textContent = fabricante.charAt(0).toUpperCase() + fabricante.slice(1);
    } else {
        modalTitulo.textContent = "Todos os Veículos";
    }
    
    // Mostra a modal e o loading
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
    
    // Mostra loading e esconde container
    loadingSpinner.style.display = "block";
    carrosContainer.style.display = "none";
    carrosContainer.innerHTML = ""; // Limpa cards anteriores
    
    // Faz a requisição AJAX
    $.ajax({
        url: "../api/vem_carros",
        method: "GET",
        data: { fabricante: fabricante },
        success: function(res) {
            console.log("Dados recebidos:", res.data);
            
            // Esconde o loading
            loadingSpinner.style.display = "none";
            
            // Verifica se tem dados
            if (res.data && res.data.length > 0) {
                let carrosHTML = '';
                
                // Para cada carro, cria um card
                res.data.forEach(carro => {
                    carrosHTML += criarCardCarro(carro);
                });
                
                // Adiciona os cards ao container
                carrosContainer.innerHTML = carrosHTML;
                carrosContainer.style.display = "grid";
            } else {
                // Mostra mensagem de nenhum carro encontrado
                carrosContainer.innerHTML = `
                    <div class="sem-carros">
                        <i class="fas fa-car-side"></i>
                        <h3>Nenhum veículo encontrado</h3>
                        <p>Não há veículos disponíveis para esta marca no momento.</p>
                    </div>
                `;
                carrosContainer.style.display = "block";
            }
        },
        error: function(xhr, status, error) {
            console.error("Erro na requisição:", error);
            
            // Esconde o loading
            loadingSpinner.style.display = "none";
            
            // Mostra mensagem de erro
            carrosContainer.innerHTML = `
                <div class="sem-carros">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h3>Erro ao carregar</h3>
                    <p>Não foi possível carregar os veículos. Tente novamente.</p>
                    <button onclick="abrirModal('${fabricante}')" style="margin-top:15px; padding:10px 20px; background:#ffd700; border:none; border-radius:5px; cursor:pointer;">
                        <i class="fas fa-sync-alt"></i> Tentar novamente
                    </button>
                </div>
            `;
            carrosContainer.style.display = "block";
        }
    });
}

// Função para fechar a modal
function fecharModal() {
    document.getElementById("myModal").style.display = "none";
    document.body.style.overflow = "auto";
}

// Função para reservar carro
function reservarCarro(id) {
    // Aqui você pode redirecionar para a página de reserva
    window.location.href = `/reserva?carro=${id}`;
}

// Função para ver detalhes do carro
function verDetalhes(id) {
    // Aqui você pode abrir uma modal com mais detalhes ou redirecionar
    alert(`Abrindo detalhes do carro ID: ${id}`);
    // window.location.href = `/carro/${id}`;
}

// Fechar modal clicando fora dela
window.onclick = function(event) {
    const modal = document.getElementById("myModal");
    if (event.target == modal) {
        fecharModal();
    }
}

// Fechar modal com tecla ESC
document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        const modal = document.getElementById("myModal");
        if (modal.style.display === "block") {
            fecharModal();
        }
    }
});
</script>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 footer-col">
                    <h4>WL Motors</h4>
                    <p>Especialistas em aluguel de veículos de luxo, oferecendo uma experiência premium e personalizada para clientes exigentes.</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 footer-col">
                    <h5>Links Rápidos</h5>
                    <ul>
                        <li><a href="/home">Início</a></li>
                        <li><a href="/frota">Frota</a></li>
                        <li><a href="/servicos">Serviços</a></li>
                        <li><a href="/sobre">Sobre</a></li>
                        <li><a href="/contato">Contato</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Contato</h5>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Av. Faria Lima, 1500 - São Paulo</li>
                        <li><i class="fas fa-phone"></i> (11) 3000-4000</li>
                        <li><i class="fas fa-envelope"></i> contato@wlmotors.com.br</li>
                    </ul>
                </div>
                <div class="col-lg-3 footer-col">
                    <h5>Horário de Funcionamento</h5>
                    <ul>
                        <li>Segunda a Sexta: 8h às 20h</li>
                        <li>Sábado: 9h às 18h</li>
                        <li>Domingo: 10h às 16h</li>
                        <li>Atendimento 24h para emergências</li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <p>&copy; 2026 WL Motors. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Botão do WhatsApp -->
    <a href="https://wa.me/5511999999999?text=Olá,%20gostaria%20de%20saber%20mais%20sobre%20a%20frota%20da%20WL%20Motors" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>










    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // ===== CARROSSEL DE MARCAS COM ROTAÇÃO INFINITA =====
            const slides = document.getElementById('carrosselSlides');
            const slidesCount = document.querySelectorAll('.carrossel-slide').length;
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const indicatorsContainer = document.getElementById('indicators');
            
            let currentIndex = 0;
            let slidesPerView = 6;
            let maxIndex = 0;
            let autoPlayInterval;
            let isPlaying = true;

            // Função para atualizar slides por view baseado no tamanho da tela
            function updateSlidesPerView() {
                if (window.innerWidth <= 576) {
                    slidesPerView = 2;
                } else if (window.innerWidth <= 768) {
                    slidesPerView = 3;
                } else if (window.innerWidth <= 992) {
                    slidesPerView = 4;
                } else if (window.innerWidth <= 1200) {
                    slidesPerView = 5;
                } else {
                    slidesPerView = 6;
                }
                
                maxIndex = Math.max(0, Math.ceil(slidesCount / slidesPerView) - 1);
                if (currentIndex > maxIndex) currentIndex = maxIndex;
                
                createIndicators();
                updateCarousel();
            }

            // Criar indicadores (bolinhas)
            function createIndicators() {
                if (!indicatorsContainer) return;
                
                const totalIndicators = Math.ceil(slidesCount / slidesPerView);
                let indicatorsHTML = '';
                
                for (let i = 0; i < totalIndicators; i++) {
                    indicatorsHTML += `<button class="indicator ${i === currentIndex ? 'active' : ''}" data-index="${i}"></button>`;
                }
                
                indicatorsContainer.innerHTML = indicatorsHTML;
                
                // Adicionar evento aos indicadores
                document.querySelectorAll('.indicator').forEach(indicator => {
                    indicator.addEventListener('click', function() {
                        currentIndex = parseInt(this.dataset.index);
                        updateCarousel();
                        updateIndicators();
                        resetAutoPlay();
                    });
                });
            }

            // Atualizar indicadores
            function updateIndicators() {
                document.querySelectorAll('.indicator').forEach((indicator, index) => {
                    if (index === currentIndex) {
                        indicator.classList.add('active');
                    } else {
                        indicator.classList.remove('active');
                    }
                });
            }

            // Atualizar posição do carrossel
            function updateCarousel() {
                if (slides) {
                    const slideWidth = 100 / slidesPerView;
                    slides.style.transform = `translateX(-${currentIndex * 100}%)`;
                }
            }

            // Função para próximo slide (com loop infinito)
            function nextSlide() {
                if (currentIndex < maxIndex) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Volta para o primeiro
                }
                updateCarousel();
                updateIndicators();
            }

            // Função para slide anterior (com loop infinito)
            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = maxIndex; // Vai para o último
                }
                updateCarousel();
                updateIndicators();
            }

            // Iniciar autoplay
            function startAutoPlay() {
                if (autoPlayInterval) clearInterval(autoPlayInterval);
                autoPlayInterval = setInterval(nextSlide, 3000); // Muda a cada 3 segundos
                isPlaying = true;
            }

            // Parar autoplay
            function stopAutoPlay() {
                if (autoPlayInterval) {
                    clearInterval(autoPlayInterval);
                    autoPlayInterval = null;
                    isPlaying = false;
                }
            }

            // Resetar autoplay (quando o usuário interage)
            function resetAutoPlay() {
                stopAutoPlay();
                startAutoPlay();
            }

            // Evento do botão próximo
            if (nextBtn) {
                nextBtn.addEventListener('click', function() {
                    nextSlide();
                    resetAutoPlay();
                });
            }

            // Evento do botão anterior
            if (prevBtn) {
                prevBtn.addEventListener('click', function() {
                    prevSlide();
                    resetAutoPlay();
                });
            }

            // Pausar autoplay quando o mouse está sobre o carrossel
            const carrossel = document.querySelector('.carrossel-container');
            if (carrossel) {
                carrossel.addEventListener('mouseenter', stopAutoPlay);
                carrossel.addEventListener('mouseleave', startAutoPlay);
            }

            // Atualizar quando a janela for redimensionada
            window.addEventListener('resize', function() {
                updateSlidesPerView();
                resetAutoPlay();
            });

            // Inicializar
            updateSlidesPerView();
            startAutoPlay(); // Inicia a rotação automática

            // ===== ATUALIZAR ANO NO FOOTER =====
            const footerYear = document.querySelector('.footer-bottom p');
            if(footerYear) {
                const currentYear = new Date().getFullYear();
                footerYear.innerHTML = `&copy; ${currentYear} WL Motors. Todos os direitos reservados.`;
            }
        });
    </script>
</body>
</html>