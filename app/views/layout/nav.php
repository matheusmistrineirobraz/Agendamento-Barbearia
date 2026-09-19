<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets\style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>


<style>
    /* ================================
       RESET BÁSICO
    ================================= */

    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
        min-height: 100%;
    }


    /* ================================
       SIDEBAR
    ================================= */

    .sidebar {
        position: fixed;

        top: 0;
        left: 0;

        width: 260px;
        height: 100vh;

        background: #111827;
        color: #ffffff;

        padding: 20px;

        display: flex;
        flex-direction: column;

        z-index: 1000;

        overflow-y: auto;
    }


    /* ================================
       LOGO
    ================================= */

    .logo {
        display: flex;
        align-items: center;
        gap: 10px;

        margin-bottom: 20px;
    }

    .logo-icon {
        width: 40px;
        height: 40px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #2563eb;
        border-radius: 10px;

        font-weight: bold;
        font-size: 20px;
    }

    .logo span {
        font-size: 18px;
        font-weight: 600;
    }


    /* ================================
       MENU
    ================================= */

    .sidebar nav {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .menu-item {
        display: flex;
        align-items: center;

        gap: 12px;

        padding: 12px 14px;

        color: #cbd5e1;
        text-decoration: none;

        border-radius: 8px;

        transition:
            background 0.2s ease,
            color 0.2s ease,
            transform 0.2s ease;
    }

    .menu-item:hover {
        background: #1e293b;
        color: #ffffff;

        transform: translateX(3px);
    }

    .menu-item.active {
        background: #2563eb;
        color: #ffffff;
    }


    /* ================================
       USUÁRIO
    ================================= */

    .user {
        margin-top: auto;

        display: flex;
        align-items: center;

        gap: 10px;

        padding-top: 20px;

        border-top: 1px solid #334155;
    }

    .avatar {
        width: 40px;
        height: 40px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #2563eb;

        border-radius: 50%;

        font-weight: bold;
    }

    .user-info {
        display: flex;
        flex-direction: column;

        flex: 1;
    }

    .user-info strong {
        font-size: 14px;
    }

    .user-info small {
        color: #94a3b8;
        font-size: 12px;
    }


    /* ================================
       CONTEÚDO PRINCIPAL
    ================================= */

    .content {
        margin-left: 260px;

        min-height: 100vh;

        padding: 30px;

        background: #f8fafc;
    }


    /* ================================
       MOBILE
    ================================= */

    @media (max-width: 768px) {

        .sidebar {
            width: 220px;
        }

        .content {
            margin-left: 220px;
        }

    }


    /* ================================
       ACESSIBILIDADE
    ================================= */

    @media (prefers-reduced-motion: reduce) {

        .menu-item {
            transition: none;
        }

        .menu-item:hover {
            transform: none;
        }

    }
</style>

<body>

<!-- SideBar Começo -->
<aside class="sidebar" id="sidebar">

    <!-- LOGO -->
     
    <div class="logo">
        <div class="logo-icon">
            A
        </div>
        <span>
            Agendamento
        </span>
    </div>
    <hr>

    <!-- MENU -->

    <nav>

        <a href="#" class="menu-item active">
            <i class="bi bi-speedometer2"></i>
            <span>Dashboard</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-calendar3"></i>
            <span>Agendamentos</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-grid"></i>
            <span>Serviços</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-people"></i>
            <span>Clientes</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-person-badge"></i>
            <span>Profissionais</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-clock"></i>
            <span>Horários</span>
        </a>

        <a href="#" class="menu-item">
            <i class="bi bi-bar-chart"></i>
            <span>Relatórios</span>
        </a>

        <a href="..\app\config\edit.php" class="menu-item">
            <i class="bi bi-gear"></i>
            <span>Configurações</span>
            
        </a>
    </nav>

    <!-- USUÁRIO -->
    <div class="user">
        <div class="avatar">
            M
        </div>
        <div class="user-info">
            <strong>Matheus</strong>
            <small>Administrador</small>
        </div>
        <i class="bi bi-chevron-down"></i>
    </div>
</aside>

<!-- SIDEBAR FIM -->
