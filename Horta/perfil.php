<?php
require 'usuario.php';
$usuario = new Usuario;
$dados = $usuario->queryOne([':id' => 1]);
extract($dados);
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REviva</title>

    <link rel="shortcut icon" type="imagex/png" href="./assets/img/ico.svg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* HEADER */
        .topo {
            width: 100%;
            background: #0d6b57;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .menu-esquerda {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            color: #fff;
            font-size: 2rem;
            font-weight: 700;
        }

        .navbar-toggler {
            border: none !important;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }


        /* MENU LATERAL */
        .offcanvas-custom {
            width: 240px !important;
            /* <<< diminui o menu */
            background-color: #0d6b57 !important;
            backdrop-filter: blur(4px);
            border-radius: 0 18px 18px 0;
            box-shadow: 4px 0 12px rgba(0, 0, 0, 0.25);
            padding-top: 10px;
        }

        /* Botões mais compactos */
        .offcanvas-body .btn {
            padding: 8px 12px;
            font-size: 0.9rem;
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <header class="topo">
        <div class="menu-esquerda">
            <button class="navbar-toggler border-0" type="button"
                data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>

            <span class="logo">Reviva</span>
        </div>

    </header>

    <!-- MENU LATERAL -->
    <div class="offcanvas offcanvas-start offcanvas-custom" tabindex="-1" id="menuLateral">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white fw-semibold">Menu</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <a href="home.php" class="btn btn-light w-100 mb-3 fw-semibold">Home</a>
            <a href="nossahorta.php" class="btn btn-light w-100 mb-3 fw-semibold">Nossa Horta</a>
            <a href="calendario.php" class="btn btn-light w-100 mb-3 fw-semibold">Calendário</a>
            <a href="index.php" class="btn btn-light w-100 mb-3 fw-semibold">Página Inicial</a>
            <a href="logout.php" class="btn btn-danger w-100 fw-semibold">Logout</a>
        </div>
    </div>

    <!-- CORPO -->
    <div class="d-flex justify-content-center align-items-start"
        style="min-height: 100vh; padding-top: 120px;">

        <div class="container" style="max-width: 750px;">

            <div class="row g-3 bg-white p-3 shadow rounded">

                <!-- FOTO -->
                <div class="col-12 col-md-4 text-center">
                    <img id="previewImagem"
                        src="<?= !empty($fotoUsuario) ? "./assets/img/$fotoUsuario" : "./assets/img/user.png"; ?>"
                        class="img-fluid rounded-circle border"
                        style="width:150px; height:150px; object-fit:cover;">
                    <p class="mt-2 text-muted small">Recomendado 150x150</p>
                </div>

                <!-- FORM -->
                <div class="col-12 col-md-8">
                    <form action="atuPerfil.php" method="POST" enctype="multipart/form-data">

                        <div class="mb-2">
                            <label class="form-label">Nome:</label>
                            <input type="text" class="form-control form-control-sm"
                                name="nomeUsuario" value="<?= $nome ?? ""; ?>" disabled>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">E-mail:</label>
                            <input type="text" class="form-control form-control-sm"
                                name="emailUsuario" value="<?= $email ?? ""; ?>" disabled>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Senha:</label>
                            <input type="password" class="form-control form-control-sm"
                                name="senhaUsuario" value="<?= $senha ?? ""; ?>" disabled>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Foto de Perfil:</label>
                            <input type="file" class="form-control form-control-sm"
                                name="fotoUsuario" disabled onchange="alteraImagem(this)">
                        </div>

                        <button type="submit" class="btn btn-primary btn-sm w-100">Salvar Alterações</button>

                    </form>
                </div>
            </div>

            <div class="text-center mt-3">
                <button class="btn btn-secondary btn-sm" id="editButton" onclick="habilitarEdicao()">
                    Habilitar Edição
                </button>
            </div>

        </div>
    </div>

    <script>
        let verificador = 1;

        function habilitarEdicao() {
            const campos = document.querySelectorAll("input");
            const botao = document.getElementById("editButton");

            verificador = verificador === 1 ? 0 : 1;
            botao.innerHTML = verificador === 1 ? "Habilitar Edição" : "Desabilitar Edição";

            campos.forEach(campo => campo.disabled = verificador);
        }

        function alteraImagem(imagem) {
            const img = document.getElementById('previewImagem');
            if (imagem.files[0]) img.src = URL.createObjectURL(imagem.files[0]);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>