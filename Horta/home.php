
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REviva</title>
    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link rel="stylesheet" href="style.css">

  <!-- Link do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
      html, body {
        margin: 0 !important;
        padding: 0 !important;
    }

      body {
        padding-top: 0 !important;
    }


    .topo {
        width: 100%;
        background: #0d6b57;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;  /* <<< separa esquerda e direita */
        align-items: center;
    }

    .menu-esquerda {
        display: flex;
        align-items: center;
        gap: 20px;
    }


    .navbar-toggler-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255,255,255,1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    }

    .logo {
        color: #fff;
        font-size: 2.5rem;
        font-weight: 700;
    }

    /* MENU LATERAL MENOR */
    .offcanvas-custom {
        width: 240px !important;   /* <<< diminui o menu */
        background-color: #0d6b57 !important;
        backdrop-filter: blur(4px);
        border-radius: 0 18px 18px 0;
        box-shadow: 4px 0 12px rgba(0,0,0,0.25);
        padding-top: 10px;
    }

    /* Título menor */
    .offcanvas-title {
        font-size: 1rem;
    }

    /* Botões mais compactos */
    .offcanvas-body .btn {
        padding: 8px 12px;
        font-size: 0.9rem;
        border-radius: 10px;
    }

    .custom-close {
        filter: brightness(0) invert(1);
        opacity: 0.9;
    }

    .custom-close:hover {
        opacity: 1;
        transform: scale(1.1);
        transition: 0.2s;
    }



        /* CONTAINER PRINCIPAL */
    .panelIrri {
        width: 90%;
        max-width: 700px;
        margin: 40px auto;
        padding: 25px;
        background: #ffffff;
        border-radius: 18px;
        box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        text-align: center;
        transition: 0.3s ease;
    }

    .panelIrri:hover {
        transform: translateY(-4px);
    }

    /* TÍTULO */
    .panelIrri h1 {
        font-size: 26px;
        font-weight: 700;
        color: #2a7a4b;
        margin-bottom: 20px;
    }

    /* BOTÃO CONECTAR */
    .conect {
        margin-bottom: 25px;
    }

    .stts {
        background: #2a7a4b;
        color: white;
        padding: 12px 26px;
        border: none;
        font-size: 18px;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .stts:hover {
        background: #1f5c38;
        transform: scale(1.07);
    }

    /* SEÇÕES MANUAL / AUTOMÁTICO */
    .paipai {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .manual, .auto {
        width: 50%;
        padding: 18px;
        border-radius: 14px;
        background: #f5fdf7;
        border: 2px solid #d9f2df;
        transition: 0.3s ease;
    }

    .manual:hover, .auto:hover {
        background: #e6f9ec;
        transform: translateY(-4px);
    }

    .manual h1, .auto h1 {
        font-size: 22px;
        margin-bottom: 15px;
        color: #2a7a4b;
    }

    /* BOTÕES LIGAR/DESLIGAR/AUTOMATICO */
    button.on, button.off {
        width: 100%;
        padding: 10px;
        font-size: 17px;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        margin-bottom: 10px;
        transition: 0.2s ease;
    }

    /* LIGAR / AUTO ON */
    button.on {
        background: #34c759;
        color: white;
    }

    button.on:hover:not(:disabled) {
        background: #28a745;
        transform: scale(1.05);
    }

    /* DESLIGAR / AUTO OFF */
    button.off {
        background: #ff4e42;
        color: white;
    }

    button.off:hover:not(:disabled) {
        background: #e6392f;
        transform: scale(1.05);
    }

    /* DESABILITADO */
    button:disabled {
        opacity: 0.5;
        cursor: not-allowed;
        transform: none !important;
    }

    /* CAIXA DE LOG */
    #output {
        width: 100%;
        background: #111;
        color: #0f0;
        padding: 15px;
        font-size: 14px;
        border-radius: 12px;
        margin-top: 20px;
        height: 180px;
        overflow-y: auto;
        box-shadow: inset 0 0 10px rgba(0,0,0,0.5);
    }


    .perfil-icone {
        width: 40px;              /* tamanho do ícone */
        height: 40px;
        border-radius: 50%;       /* deixa redondo */
        object-fit: cover;        /* encaixa a imagem certinho */
        cursor: pointer;          /* vira "mãozinha" quando passa o mouse */
        transition: 0.2s ease;    /* animação suave */
    }

    .perfil-icone:hover {
        transform: scale(1.1);    /* cresce levemente ao passar o mouse */
    }

    /*RODAPE*/
    .footer-reviva {
        /* CORREÇÃO: Aplica o verde escuro que você especificou */
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

    <a href="perfil.php">
        <img src="assets/img/perfil-de-usuario.png" class="perfil-icone">
    </a>
</header>


<!-- MENU LATERAL -->
<div class="offcanvas offcanvas-start offcanvas-custom" tabindex="-1" id="menuLateral">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white fw-semibold">Menu</h5>
        <button type="button" class="btn-close btn-close-white custom-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">

        <!-- LINKS DO MENU -->
        <a href="home.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">Home</a>
        <a href="nossahorta.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">Nossa Horta</a>
        <a href="calendario.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">Calendário</a>
        <a href="index.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">Pagina Inicial</a>
        <a href="logout.php" class="btn btn-danger w-100 fw-semibold shadow-sm rounded-3">Logout</a>

    </div>
</div>




<div class="panelIrri">
    <h1>Controle de Irrigação - Automático</h1>

    <div class="conect">
    <button class="stts" id="connect1">Conectar</button>
    </div>

    <div class="paipai">
    <div class="manual">
    <h1>Manual</h1>
    <button class="on" id="send1" disabled>Ligar</button>
    <button class="off" id="send0" disabled>Desligar</button>
    </div>

    <div class="auto">
    <h1>Automatico</h1>
    <button class="on" id="sendON" disabled>Automatico ON</button>
    <button class="off" id="sendOFF" disabled>Automatico OFF</button>
    </div>
    </div>
    
    <br>
    <pre id="output"></pre>
    
  </div>
  <form method="POST">
    Início: <input type="datetime-local" name="inicio" required><br>
    Fim: <input type="datetime-local" name="fim" require><br>
    <button type="submit" >Ativar Irrigação</button>
</form>


<!-- Rodape -->


<footer class="footer-reviva text-white py-5">
    <div class="container">
        <div class="row gy-4 justify-content-center"> 

            <div class="col-md-4">
                <h3 class="fw-bold d-flex align-items-center mb-3">
                    <img src="#" width="45" class="me-2" >
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


    

  <script>
    let port;
    let writer;

    // Função para logar mensagens na tela
    function log(msg) {
      output.textContent += msg + '\n';
    }

      document.getElementById('connect1').addEventListener('click', async () => {
      try {
        // Pede a porta serial
        port = await navigator.serial.requestPort();
        await port.open({ baudRate: 9600 });

        // Prepara leitor
        const decoder = new TextDecoderStream();
        port.readable.pipeTo(decoder.writable);
        const reader = decoder.readable.getReader();

        // Prepara escritor
        const encoder = new TextEncoderStream();
        encoder.readable.pipeTo(port.writable);
        writer = encoder.writable.getWriter();

        // Habilita botões de envio
        document.getElementById('send1').disabled = false;
        document.getElementById('send0').disabled = false;
        document.getElementById('sendON').disabled = false;
        document.getElementById('sendOFF').disabled = false;

        log('Conectado!');

        // Leitura contínua
        while (true) {
          const { value, done } = await reader.read();
          if (done) break;
          if (value) log(value.trim());
        }
      } catch (err) {
        log('Erro: ' + err.message);
      }
    });

    // Enviar "1"
    document.getElementById('send1').addEventListener('click', async () => {
      if (writer) {
        await writer.write('l');
        log('Enviado: l');
      }
    });

    // Enviar "0"
    document.getElementById('send0').addEventListener('click', async () => {
      if (writer) {
        await writer.write('d');
        log('Enviado: d');
      }
    });

    // Enviar "autoOn"
    document.getElementById('sendON').addEventListener('click', async () => {
      if (writer) {
        await writer.write('autoON');
        log('Enviado: autoON');
      }
    });

    // Enviar "autoOff"
    document.getElementById('sendOFF').addEventListener('click', async () => {
      if (writer) {
        await writer.write('autoOFF');
        log('Enviado: autoOFF');
      }
    });
  </script>



  <!-- Script do Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
