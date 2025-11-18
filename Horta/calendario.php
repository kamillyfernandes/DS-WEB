<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>REviva</title>

  <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg" />
  <link rel="stylesheet" href="style.css" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"/>

  <!-- FullCalendar CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.css"
    rel="stylesheet"/>

  <style>
    body {
      padding-top: 80px;
    }

    /* 🔹 Deixa o calendário menor e centralizado */
    #calendar {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
    /* Cor do título do mês (Janeiro 2025) */
    .fc .fc-toolbar-title {
      color: #0d6b57;
      font-weight: bold;
    }
    /* Botões (Hoje, Próximo, Anterior) */
    .fc .fc-button-primary {
      background-color: #0d6b57;
      border-color: #0d6b57;
    }
    .fc .fc-button-primary:hover {
      background-color: #148807;
      border-color: #148807;
    }

    /* Cabeçalho dos dias (Dom, Seg, Ter...) */
    .fc .fc-col-header-cell-cushion {
      color: #0d6b57;
      font-weight: bold;
    }

    /* Linhas do calendário */
    .fc-theme-standard td,
    .fc-theme-standard th {
      border-color: #0d6b57;
    }

    /* Número dos dias */
    .fc-daygrid-day-number {
      color: #000;
      font-weight: 600;
    }
    /* Hover nos dias */
    .fc-daygrid-day:hover {
      background-color: #eaffea;
    }

    /* Se você adicionar eventos futuramente */
    .fc-event {
      background-color: #0d6b57 !important;
      border-color: #0d6b57 !important;
      color: #fff !important;
      cursor: pointer;
    }
  
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
    .perfil-icone {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
    cursor: pointer;
    transition: 0.2s ease;
}

.perfil-icone:hover {
    transform: scale(1.1);
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
<div class="offcanvas offcanvas-start offcanvas-custom" tabindex="-1" id="menuLateral" aria-labelledby="menuLateralLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title text-white fw-semibold" id="menuLateralLabel">Menu</h5>
        <button type="button" class="btn-close btn-close-white custom-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
    </div>

    <div class="offcanvas-body">
        <a href="home.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">
            <i class="bi bi-house-door-fill me-2"></i>Home
        </a>
        <a href="nossahorta.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">
            <i class="bi bi-tree-fill me-2"></i>Nossa Horta
        </a>
        <a href="calendario.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">
            <i class="bi bi-calendar-check-fill me-2"></i>Calendário
        </a>
        <a href="index.php" class="btn btn-light w-100 mb-3 fw-semibold shadow-sm rounded-3">
            <i class="bi bi-box-arrow-in-right me-2"></i>Página Inicial
        </a>
        <a href="logout.php" class="btn btn-danger w-100 fw-semibold shadow-sm rounded-3">
            <i class="bi bi-box-arrow-left me-2"></i>Logout
        </a>
    </div>
</div>

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


  <!-- 🔹 CALENDÁRIO CORRETO -->
  <div id="calendar"></div>

  <!-- Modal para adicionar/editar tarefa -->
  <div
    class="modal fade"
    id="taskModal"
    tabindex="-1"
    aria-labelledby="taskModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog">
      <form id="taskForm" class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="taskModalLabel">Adicionar tarefa</h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Fechar"
          ></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="taskDate" class="form-label">Data</label>
            <input
              type="text"
              class="form-control"
              id="taskDate"
              name="taskDate"
              readonly
            />
          </div>
          <div class="mb-3">
            <label for="taskTitle" class="form-label">Tarefa</label>
            <input
              type="text"
              class="form-control"
              id="taskTitle"
              name="taskTitle"
              placeholder="Digite a tarefa"
              required
            />
          </div>
        </div>
        <div class="modal-footer">
          <button
            type="button"
            class="btn btn-danger me-auto"
            id="deleteTaskBtn"
            style="display:none;"
          >
            Excluir
          </button>
          <button
            type="button"
            class="btn btn-secondary"
            data-bs-dismiss="modal"
          >
            Cancelar
          </button>
          <button type="submit" class="btn btn-success">Salvar</button>
        </div>
      </form>
    </div>
  </div>
  



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


    





  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.19/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var calendarEl = document.getElementById("calendar");
      var modalEl = document.getElementById("taskModal");
      var modal = new bootstrap.Modal(modalEl);
      var form = document.getElementById("taskForm");
      var taskDateInput = document.getElementById("taskDate");
      var taskTitleInput = document.getElementById("taskTitle");
      var deleteBtn = document.getElementById("deleteTaskBtn");

      // Pega eventos do localStorage
      var savedEvents = JSON.parse(localStorage.getItem("myCalendarEvents")) || [];

      var currentEvent = null; // Para guardar o evento sendo editado

      var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: "dayGridMonth",
        events: savedEvents,
        dateClick: function (info) {
          currentEvent = null; // adicionando novo evento
          taskDateInput.value = info.dateStr;
          taskTitleInput.value = "";
          deleteBtn.style.display = "none";
          document.getElementById("taskModalLabel").textContent = "Adicionar tarefa";
          modal.show();
        },
        eventClick: function (info) {
          currentEvent = info.event;
          taskDateInput.value = info.event.startStr;
          taskTitleInput.value = info.event.title;
          deleteBtn.style.display = "inline-block";
          document.getElementById("taskModalLabel").textContent = "Editar tarefa";
          modal.show();
        },
      });

      calendar.render();

      form.addEventListener("submit", function (e) {
        e.preventDefault();

        var title = taskTitleInput.value.trim();
        var date = taskDateInput.value;

        if (!title) {
          alert("Por favor, insira o nome da tarefa.");
          return;
        }

        if (currentEvent) {
          // Edita evento
          currentEvent.setProp("title", title);

          // Atualiza evento no array e localStorage
          savedEvents = savedEvents.map(function (evt) {
            if (evt.id === currentEvent.id) {
              evt.title = title;
            }
            return evt;
          });
        } else {
          // Novo evento
          var newEvent = {
            id: String(Date.now()),
            title: title,
            start: date,
            allDay: true,
          };
          calendar.addEvent(newEvent);
          savedEvents.push(newEvent);
        }

        localStorage.setItem("myCalendarEvents", JSON.stringify(savedEvents));
        modal.hide();
      });

      deleteBtn.addEventListener("click", function () {
        if (!currentEvent) return;

        if (confirm(`Deseja excluir a tarefa: "${currentEvent.title}"?`)) {
          currentEvent.remove();
          savedEvents = savedEvents.filter((evt) => evt.id !== currentEvent.id);
          localStorage.setItem("myCalendarEvents", JSON.stringify(savedEvents));
          modal.hide();
        }
      });
    });
  </script>

</body>
</html>