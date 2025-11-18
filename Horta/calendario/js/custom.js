// Executar quando o documento HTML for completamente carregado
document.addEventListener('DOMContentLoaded', function () {

    // Receber o SELETOR calendar do atributo id
    var calendarEl = document.getElementById('calendar');

    // Instanciar FullCalendar.Calendar e atribuir a variável calendar
    var calendar = new FullCalendar.Calendar(calendarEl, {

        // Incluir o bootstrap 5
        themeSystem: 'bootstrap5',

        // Criar o cabeçalho do calendário
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },

        // Definir o idioma
        locale: 'pt-br',

        // Permitir clicar nos nomes dos dias
        navLinks: true,

        // Permitir seleção de datas
        selectable: true,
        selectMirror: true,

        // Permitir arrastar eventos
        editable: true,

        // Número máximo de eventos por dia
        dayMaxEvents: true,

        // Buscar eventos no servidor
        events: 'listar_evento.php',

        // Evento de clique do usuario sobre o evento 
        eventClick: function (info) {

            //Receber  o SELETOR da janela MODAL visualizar
            const visualizarModal = new bootstrap.Modal(document.getElementById("visualizarModal"));

            //Enviar o SELETOR da janela modal 
            document.getElementById("visualizar_id").innerText = info.event.id;
            document.getElementById("visualizar_title").innerText = info.event.title;
            document.getElementById("visualizar_start").innerText = info.event.start.toLocaleString();
            document.getElementById("visualizar_end").innerText = info.event.end ? info.event.end.toLocaleString() : "—";

            // ================================
            // ADIÇÃO NECESSÁRIA PARA EDITAR
            // ================================

            // Enviar valores para o formulário editar evento
            document.getElementById("edit_id").value = info.event.id;
            document.getElementById("edit_title").value = info.event.title;
            document.getElementById("edit_color").value = info.event.backgroundColor ?? info.event.color;
            document.getElementById("edit_start").value = converterData(info.event.start);
            document.getElementById("edit_end").value = info.event.end ? converterData(info.event.end) : converterData(info.event.start);

            //Abrir janela modal visualizar
            visualizarModal.show();
        },

        // Abrir a janela modal cadastrar quando clicar sobre o dia no calendário
        select: function (info) {

            // Chamar a função para converter a data selecionada para ISO8601 e enviar para o formulário
            document.getElementById("cad_start").value = converterData(info.start);
            document.getElementById("cad_end").value = converterData(info.start);

            // Abrir a janela modal cadastrar
            cadastrarModal.show();
        }
    });

    // Renderizar o calendário
    calendar.render();

    // Converter a data
    function converterData(data) {

        // Converter a string em um objeto Date
        const dataObj = new Date(data);

        // Extrair o ano da data
        const ano = dataObj.getFullYear();

        // Obter o mês, mês começa de 0, padStart adiciona zeros à esquerda
        const mes = String(dataObj.getMonth() + 1).padStart(2, '0');

        // Obter o dia do mês
        const dia = String(dataObj.getDate()).padStart(2, '0');

        // Obter a hora
        const hora = String(dataObj.getHours()).padStart(2, '0');

        // Obter minuto
        const minuto = String(dataObj.getMinutes()).padStart(2, '0');

        // Retornar a data
        return `${ano}-${mes}-${dia}T${hora}:${minuto}`;
    }

    // Receber o SELETOR do formulário cadastrar evento
    const formCadEvento = document.getElementById("formCadEvento");

    // Receber o SELETOR da mensagem genérica
    const msg = document.getElementById("msg");

    // Receber o SELETOR da mensagem cadastrar evento
    const msgCadEvento = document.getElementById("msgCadEvento");

    // Receber o SELETOR do botão da janela modal cadastrar evento
    const btnCadEvento = document.getElementById("btnCadEvento");

    // Instanciar modal cadastrar
    const cadastrarModal = new bootstrap.Modal(document.getElementById("cadastrarModal"));

    // Somente acessa o IF quando existir o SELETOR "formCadEvento"
    if (formCadEvento) {

        // Aguardar o usuario clicar no botao cadastrar
        formCadEvento.addEventListener("submit", async (e) => {

            // Não permitir a atualização da pagina
            e.preventDefault();

            // Apresentar no botão o texto salvando
            btnCadEvento.innerText = "Salvando...";

            // Receber os dados do formulário
            const dadosForm = new FormData(formCadEvento);

            // Chamar o arquivo PHP responsável em salvar o evento
            const dados = await fetch("cadastrar_evento.php", {
                method: "POST",
                body: dadosForm
            });

            // Realizar a leitura dos dados retornados pelo PHP
            const resposta = await dados.json();

            // Acessa o IF quando não cadastrar com sucesso
            if (!resposta['status']) {

                // Enviar a mensagem para o HTML
                msgCadEvento.innerHTML =
                    `<div class="alert alert-danger" role="alert">${resposta['msg']}</div>`;

            } else {

                // Enviar a mensagem para o HTML
                msg.innerHTML =
                    `<div class="alert alert-success" role="alert">${resposta['msg']}</div>`;

                // Limpar o formulário
                formCadEvento.reset();

                // Criar o objeto com os dados do evento
                const novoEvento = {
                    id: resposta['id'],
                    title: resposta['title'],
                    color: resposta['color'],
                    start: resposta['start'],
                    end: resposta['end']
                };

                // Adicionar o evento ao calendário
                calendar.addEvent(novoEvento);

                // Remover mensagem depois de 3s
                removerMsg();

                // Fechar modal
                cadastrarModal.hide();
            }

            // Apresentar no botão o texto Cadastrar
            btnCadEvento.innerText = "Cadastrar";
        });
    }

    // Função para remover a mensagem após 3 segundo
    function removerMsg() {
        setTimeout(() => {
            document.getElementById('msg').innerHTML = "";
        }, 3000)
    }

    // Receber o SELETOR ocultar detalhes do evento e apresentar o formulário editar evento
    const btnViewEditEvento = document.getElementById("btnViewEditEvento");

    // Somente acessa o IF quando existir o SELETOR "btnViewEditEvento"
    if (btnViewEditEvento) {

        // Aguardar o usuario clicar no botao editar
        btnViewEditEvento.addEventListener("click", () => {

            // Ocultar os detalhes do evento
            document.getElementById("visualizarEvento").style.display = "none";
            document.getElementById("visualizarModalLabel").style.display = "none";

            // Apresentar o formulário editar do evento
            document.getElementById("editarEvento").style.display = "block";
            document.getElementById("editarModalLabel").style.display = "block";
        });
    }

    // Receber o SELETOR ocultar formulário editar evento e apresentar o detalhes do evento
    const btnViewEvento = document.getElementById("btnViewEvento");

    // Somente acessa o IF quando existir o SELETOR "btnViewEvento"
    if (btnViewEvento) {

        // Aguardar o usuario clicar no botao editar
        btnViewEvento.addEventListener("click", () => {

            // Apresentar os detalhes do evento
            document.getElementById("visualizarEvento").style.display = "block";
            document.getElementById("visualizarModalLabel").style.display = "block";

            // Ocultar o formulário editar do evento
            document.getElementById("editarEvento").style.display = "none";
            document.getElementById("editarModalLabel").style.display = "none";
        });
    }

    // Receber o SELETOR do formulário editar evento
    const formEditEvento = document.getElementById("formEditEvento");

    // Receber o SELETOR da mensagem editar evento 
    const msgEditEvento = document.getElementById("msgEditEvento");

    // Receber o SELETOR do botão editar evento
    const btnEditEvento = document.getElementById("btnEditEvento");

    // Somente acessa o IF quando existir o SELETOR "formEditEvento"
    if (formEditEvento) {

        // Aguardar o usuario clicar no botao editar
        formEditEvento.addEventListener("submit", async (e) => {

            // Não permitir a atualização da pagina
            e.preventDefault();

            // Apresentar mensagem no botão
            btnEditEvento.innerText = "Salvando...";

            // Receber os dados do formulário
            const dadosForm = new FormData(formEditEvento);

            // Chamar o arquivo PHP responsável em editar o evento
            const dados = await fetch("editar_evento.php", {
                method: "POST",
                body: dadosForm
            });

            // Realizar a leitura dos dados retornados pelo PHP
            const resposta = await dados.json();

            if (!resposta['status']) {

                msgEditEvento.innerHTML =
                    `<div class="alert alert-danger" role="alert">${resposta['msg']}</div>`;

            } else {

                msg.innerHTML =
                    `<div class="alert alert-success" role="alert">${resposta['msg']}</div>`;

                msgEditEvento.innerHTML = "";

                formEditEvento.reset();

                // Recuperar o evento no FullCalendar pelo id 
                const eventoExiste = calendar.getEventById(resposta['id']);

                if (eventoExiste) {

                    eventoExiste.setProp('title', resposta['title']);
                    eventoExiste.setProp('color', resposta['color']);
                    eventoExiste.setStart(resposta['start']);
                    eventoExiste.setEnd(resposta['end']);
                }

                removerMsg();

                visualizarModal.hide();
            }

            btnEditEvento.innerText = "Salvar";
        });

    }

     // Receber o SELETOR apagar evento
     const btnApagarEvento = document.getElementById("btnApagarEvento");

     // Somente acessa o IF quando existir o SELETOR "formEditEvento"
     if (btnApagarEvento) {
 
         // Aguardar o usuario clicar no botao apagar
         btnApagarEvento.addEventListener("click", async () => {
 
             // Exibir uma caixa de diálogo de confirmação
             const confirmacao = window.confirm("Tem certeza de que deseja apagar este evento?");
 
             // Verificar se o usuário confirmou
             if (confirmacao) {
 
                 // Receber o id do evento
                 var idEvento = document.getElementById("visualizar_id").textContent;
 
                 // Chamar o arquivo PHP responsável apagar o evento
                 const dados = await fetch("apagar_evento.php?id=" + idEvento);
 
                 // Realizar a leitura dos dados retornados pelo PHP
                 const resposta = await dados.json();
 
                 // Acessa o IF quando não cadastrar com sucesso
                 if(!resposta['status']){
 
                     // Enviar a mensagem para o HTML
                     msgViewEvento.innerHTML = `<div class="alert alert-danger" role="alert">${resposta['msg']}</div>`;
                 } else {
 
                     // Enviar a mensagem para o HTML
                     msg.innerHTML = `<div class="alert alert-success" role="alert">${resposta['msg']}</div>`;
 
                     // Enviar a mensagem para o HTML
                     msgViewEvento.innerHTML = "";
 
                     // Recuperar o evento no FullCalendar
                     const eventoExisteRemover = calendar.getEventById(idEvento);
 
                     // Verificar se encontrou o evento no FullCalendar
                     if(eventoExisteRemover){
 
                         // Remover o evento do calendário
                         eventoExisteRemover.remove();
                     }
 
                     // Chamar a função para remover a mensagem após 3 segundo
                     removerMsg();
 
                     // Fechar a janela modal
                     visualizarModal.hide();
 
                 }
             }
         });
 
     }
     
});
