<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reviva - Irrigação Automática</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Ícone do hambúrguer sempre branco */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .offcanvas-custom {
            background-color: #0d6b57 !important;
            /* mesma cor do topo */
            backdrop-filter: blur(4px);
            border-radius: 0 20px 20px 0;
            box-shadow: 4px 0 12px rgba(0, 0, 0, 0.25);
        }

        /* Botão fechar branco */
        .custom-close {
            filter: brightness(0) invert(1);
            opacity: 0.9;
        }

        .custom-close:hover {
            opacity: 1;
            transform: scale(1.1);
            transition: 0.2s;
        }

        /* Título mais bonito */
        .offcanvas-title {
            font-size: 1.2rem;
            letter-spacing: 0.5px;
        }

        /* Botão interno */
        .offcanvas-body .btn {
            padding: 10px;
            font-size: 1rem;
        }

        /*TOPO*/
        .topo {
            width: 100%;
            background: #0d6b57;
            padding: 15px 30px;
        }

        .menu-esquerda {
            display: flex;
            align-items: center;
            gap: 40px;
            /* espaço entre hambúrguer e logo */
        }

        .hamburguer {
            background: none;
            border: none;
            font-size: 26px;
            cursor: pointer;
            color: #fff;
        }

        .logo {
            color: #fff;
            font-size: 2.5rem;
            font-weight: 700;
        }

        .icon-box {
            background: linear-gradient(135deg, #f8f7e2, #e4f3d4);
            /* verde + amarelado suave igual ao exemplo */
            padding: 12px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 65px;
            height: 65px;
        }



        /* CONTAINER VERDE DA SEÇÃO */
        .section-publico {
            background-color: #0a6b57;
            /* verde escuro */
            padding: 60px 0;
            margin-top: 50px;
        }

        /* TÍTULOS */
        .section-title {
            color: #d8f3dc;
            font-size: 0.9rem;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .section-subtitle {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffffff;
        }

        /* CARDS */
        .card-publico {
            width: 180px;
            text-align: center;
            background: none;
            border: none;
        }

        .card-publico img {
            width: 100%;
            height: 150px;
            border-radius: 18px;
            object-fit: cover;
            box-shadow: 0px 4px 0px #ffe58b;
        }

        .card-publico p {
            margin-top: 10px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
        }


        .hero-simples {
            height: 90vh;
            display: flex;
            align-items: center;
            padding: 0;
        }

        .hero-container {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 40px;
            padding: 0 60px;
        }


        .hero-texto {
            flex: 1;
            max-width: 550px;
        }

        .titulo-hero {
            font-size: 3.3rem;
            font-weight: 800;
            color: #0d6b57;
            line-height: 1.1;
        }

        .subtitulo-hero {
            font-size: 1.4rem;
            font-weight: 600;
            margin-top: 20px;
            color: #333;
        }

        .descricao-hero {
            color: #555;
            margin-top: 15px;
            font-size: 1.1rem;
        }

        .btn-cta {
            margin-top: 25px;
            background: #f7a400;
            color: #fff;
            padding: 14px 28px;
            border: none;
            font-size: 1.1rem;
            border-radius: 40px;
            font-weight: 600;
            transition: 0.2s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
        }

        .btn-cta:hover {
            background: #ffb733;
            transform: translateY(-3px);
        }

        /* Imagem maior */
        .hero-imagem {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .hero-imagem img {
            width: 100%;
            max-width: 620px;
            border-radius: 12px;
        }

        /* Responsivo */
        @media (max-width: 800px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
                padding: 20px;
            }

            .hero-imagem img {
                max-width: 380px;
                margin-top: 30px;
            }
        }

        /*RODAPE*/
        .footer-reviva {
            background-color: #094c3c !important;
        }

        .footer-link {
            color: #d9f3e8;
            text-decoration: none;
            font-size: 0.95rem;
        }

        .footer-link:hover {
            color: #ffffff;
            text-decoration: underline;
        }



        /* Estilo do Card Verde (Compacto) */
        .card-verde-compacto {
            background-color: #0d6b57;
            color: #ffffff;
            /* Texto branco */
            padding: 15px 20px;
            /* Preenchimento menor para ser compacto */
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 25px;
            /* Aumenta a distância entre os cards */
            /* ALTERAÇÕES AQUI para o layout desalinhado */
            width: 60%;
            /* Define uma largura menor que 100% para permitir o deslocamento */
            position: relative;
            left: 10%;
        }



        .col-lg-6 .mt-4 .card-verde-compacto:nth-child(1) {
            left: 0%;
            /* Fica mais à esquerda */
            width: 60%;
            /* Ocupa um pouco mais de espaço */
        }

        /* Desloca o SEGUNDO card (o do meio) para a direita */
        .col-lg-6 .mt-4 .card-verde-compacto:nth-child(2) {
            left: 45%;
            /* Desloca um pouco para a direita */
            width: 60%;
        }

        /* Desloca o TERCEIRO card (o de baixo) mais ainda para a direita */
        .col-lg-6 .mt-4 .card-verde-compacto:nth-child(3) {
            left: 10%;
            /* Desloca mais para a direita */
            width: 60%;
            /* Ocupa menos espaço */
        }

        /* Regra para telas grandes, onde o layout lado a lado está ativo */
        @media (min-width: 992px) {
            .col-lg-6 .mt-4 {
                width: 100%;
                padding-left: 0 !important;
                padding-right: 0 !important;
            }
        }

        /* Reduz o espaço acima do título "Nossa plataforma oferece" na seção de funcionalidades */
        .col-lg-6 h2.display-5 {
            margin-top: -60px !important; /* Move para cima */
        }

        /* Garante que o espaçamento do parágrafo abaixo do título também seja reduzido, se necessário */
        .col-lg-6 p.lead {
            margin-top: 65px !important; /* Garante que o parágrafo não fique muito grudado no título */
        }
        

    </style>
</head>
<body>


    <header class="topo">
        <div class="menu-esquerda">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>
            <span class="logo">Reviva</span>
        </div>
    </header>


    <div class="offcanvas offcanvas-start offcanvas-custom" tabindex="-1" id="menuLateral">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white fw-semibold">Menu</h5>
            <button type="button" class="btn-close btn-close-white custom-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <a href="loginInicial.php" class="btn btn-light w-100 mb-2 fw-semibold shadow-sm rounded-3">Login</a>
        </div>
    </div>




    <section class="hero-simples">
        <div class="container hero-container">
            <div class="hero-texto">
                <h1 class="titulo-hero">
                    Software para <br> Irrigação Automática
                </h1>

                <p class="subtitulo-hero">
                    Um software parceiro de quem produz na agricultura.
                </p>

                <p class="descricao-hero">
                    Nossa plataforma foi criada para otimizar a rotina de produtores rurais e facilitar
                    toda a gestão de irrigação, trazendo tecnologia de forma
                    simples e eficiente.
                </p>

                <br>

                <a href="loginInicial.php" class="btn-cta">Acessar Site</a>
            </div>

            <div class="hero-imagem">
                <img src="https://grupolenotre.com/q-admin/uploads/3Nova%20pasta/irrigacao-automatica-florianopolis.jpg" alt="Produtor rural">
            </div>
        </div>
    </section>

    </section>

    <hr class="container my-2 text-secondary opacity-100">
    <section class="py-5">




    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="text-success fw-bold display-5">Nossa plataforma oferece: </h2>
                    <br><br><br><br><br>
                    <img src="https://i0.wp.com/masterplanti.com.br/wp-content/uploads/2024/12/Irrigacao-Inteligente.png?fit=1090%2C660&ssl=1" class="img-fluid rounded shadow-lg" alt="Diagrama de funcionamento do software REVIVA, mostrando o fluxo de dados e irrigação.">
                </div>

                <div class="col-lg-6">

                    <div class="mt-4">


                        <div class="card-verde-compacto">
                            <h5>
                                <i class="bi bi-cloud-download me-2"></i>Automação Programada e Calendário de Agendamento
                            </h5>
                            <p>O sistema executa o controle automático da irrigação nos horários definidos.</p>
                        </div>


                        <div class="card-verde-compacto">
                            <h5>
                                <i class="bi bi-cloud-download me-2"></i>Análise e Decisão
                            </h5>
                            <p>Nosso algoritmo processa dados de umidade do solo, clima e tipo de cultura para calcular, em tempo real, a quantidade e o tempo ideais de irrigação.</p>
                        </div>


                        <div class="card-verde-compacto">
                            <h5>
                                <i class="bi bi-cloud-download me-2"></i>Irrigação de Precisão
                            </h5>
                            <p>O software envia o comando inteligente para o sistema, garantindo que a água seja aplicada apenas onde e quando necessário, eliminando desperdício e otimizando o recurso.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>









    <!-- SEÇÃO OBJETIVO -->
    <section id="objetivo" class="py-5" style="background-color:#c7e6d6;">
        <div class="container text-center">

            <p class="text-uppercase fw-semibold mb-1" style="letter-spacing:2px; color:#104536;">
                OBJETIVO
            </p>

            <h2 class="fw-bold mb-5" style="color:#104536;">
                O que a <span style="color:#0c3c2d;">Plataforma Reviva</span> pode fazer:
            </h2>

            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0d6b57/sprinkler.png" width="45">
                        </div>
                        <p class="mb-0 text-start">
                            Controle automático da irrigação com economia de água.
                        </p>
                    </div>
                </div>


                <!-- CARD 2 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0c3c2d/wifi.png" width="45">
                        </div>
                        <p class="mb-0 text-start">
                            Centralização do controle da irrigação da horta.
                        </p>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0c3c2d/plant-under-sun.png" width="45">
                        </div>
                        <p class="mb-0 text-start">
                            Acervo das informações de plantio.
                        </p>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0c3c2d/graph.png" width="45">
                        </div>
                        <p class="mb-0 text-start">
                            Histórico e agendamentos para relatórios inteligentes.
                        </p>
                    </div>
                </div>

                <!-- CARD 5 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0c3c2d/alarm.png" width="45">
                        </div>
                        <p class="mb-0 text-start">
                            Alertas em tempo real sobre condições da horta.
                        </p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="col-md-6">
                    <div class="feature-card p-4 d-flex align-items-center shadow-sm rounded-4 bg-white">
                        <div class="icon-box me-3">
                            <img src="https://img.icons8.com/ios-filled/50/0c3c2d/smartphone-tablet.png" width="45">
                        </div>
                        <p class="mb-0 text-start">Acesso online na plataforma.</p>
                    </div>
                </div>

            </div>

        </div>
    </section>





    <!-- SEÇÃO COM FUNDO VERDE -->
    <div class="section-publico">

        <div class="text-center">
            <p class="section-title">Público alvo</p>
            <h2 class="section-subtitle">Para quem a Plataforma é indicada?</h2>
        </div>

        <div class="d-flex justify-content-center gap-5 flex-wrap mt-4">

            <div class="card-publico">
                <img src="https://nutricaodesafras.com.br/wp-content/uploads/2024/09/agricultura-no-brasil-produtor-trabalhando-na-lavoura.jpg" alt="Agrônomos">
                <p>Agricultores</p>
            </div>

            <div class="card-publico">
                <img src="https://cultivarjardinagem.com.br/wp-content/uploads/2025/09/horta-comunitaria-beneficios-educacionais-1024x559.png.webp" alt="Produtores">
                <p>Produtores autônomos</p>
            </div>

        </div>
    </div>




    <!-- Rodape -->


    <footer class="footer-reviva text-white py-5">
        <div class="container">
            <div class="row gy-4 justify-content-center">

                <div class="col-md-4">
                    <h3 class="fw-bold d-flex align-items-center mb-3">
                        <img src="#" width="45" class="me-2">
                        REVIVA
                    </h3>

                    <p class="mb-1">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        Boituva - SP
                    </p>

                    <p class="mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        (15) 99101-7333
                    </p>

                    <p class="mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        Equipe Reviva
                    </p>

                    <p class="mb-3">
                        <i class="bi bi-telephone-fill me-2"></i>
                        2025
                    </p>

                    <div class="d-flex gap-3 fs-4">
                        <a href="#" class="text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="text-white" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>

                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">INSTITUCIONAL</h5>

                    <p class="mb-2"><a href="#" class="footer-link">Sobre o projeto</a></p>
                    <p class="mb-2"><a href="#objetivo" class="footer-link">Objetivos</a></p>
                    <p class="mb-2"><a href="loginInicial.php" class="footer-link">Login</a></p>

                    <p class="mb-2">
                        <a href="#" class="footer-link" data-bs-toggle="modal" data-bs-target="#contatoModal">Contato</a>
                    </p>

                </div>

                <div class="col-md-3">
                    <h5 class="fw-bold mb-3">DESENVOLVIMENTO</h5>

                    <p class="mb-2">Criado por:</p>
                    <p class="footer-link">
                        Ana Carolina <br>
                        Gustavo Candito <br>
                        Kamily Fernandes <br>
                        Rafaella Lage
                    </p>
                </div>

            </div>

            <hr class="mt-4 mb-3 text-white">

            <p class="text-center opacity-75">© 2025 Reviva — Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Contato -->

    <div class="modal fade" id="contatoModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Formulário de Contato</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">E-mail</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mensagem</label>
                            <textarea class="form-control" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>
    </main>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>