<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <style>
        /* reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ---------- SIDEBAR ---------- */
        .sidebar {
            background: #3771C8;
            color: #fff;
            display: flex;
            flex-direction: column;
            padding: 1.25rem 1rem;
            position: fixed;
            inset: 0 auto 0 0;
            width: 60px;
            z-index: 1000;
            align-items: center;
        }

        .logout-btn {
            background: none;
            border: none;
            color: #fff;
            cursor: pointer;
            padding: 0.75rem;
            border-radius: 0.375rem;
            transition: background 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
        }

        .logout-btn:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .settings-btn {
            background: none;
            border: none;
            color: #d1d5db;
            cursor: pointer;
            margin-top: auto;
            padding: 0.75rem;
            border-radius: 0.375rem;
            transition: background 0.2s, color 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
        }

        .settings-btn:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        /* ---------- HEADER ---------- */
        .main-wrapper {
            display: flex;
            flex-direction: column;
            flex: 1;
            margin-left: 60px;
        }

        .top-bar {
            background: #EF8DD1;
            border-bottom: 1px solid #e5e7eb;
            height: 60px;
            padding: 0 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
            z-index: 999;
            width: 100%;
        }

        .page-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 1);
        }

        .top-bar-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .icon-btn {
            background: none;
            border: none;
            cursor: pointer;
            color: #fff;
            display: flex;
            align-items: center;
            gap: .5rem;
            padding: 0.5rem;
            border-radius: 0.375rem;
            transition: background 0.2s;
            height: 40px;
        }

        .icon-btn:hover {
            background: rgba(255, 255, 255, 1);
        }

        .icon-btn.profile {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            padding: 0.5rem 1rem;
        }

        .icon-btn.profile span {
            font-weight: 500;
            margin-left: 0.5rem;
            color: #rgba(255, 255, 255, 1);
        }

        .notification-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>

    <aside class="sidebar">
        <button class="logout-btn" title="Cerrar sesión">
            <img src="/EstHGP/Mantenimiento/public/img/icons/cerrar-sesion.png" alt="Cerrar Sesion" width="20" height="20">
        </button>

        <button class="settings-btn" title="Configuración">
            <img src="/EstHGP/Mantenimiento/public/img/icons/configuracion.png" alt="Configuracion" width="20" height="20">
        </button>
    </aside>

    <div class="main-wrapper">
        <header class="top-bar">
            <h1 class="page-title">Mantenimiento</h1>

            <div class="top-bar-actions">
                <button class="icon-btn notification-btn" title="Notificaciones">
                    <img src="/EstHGP/Mantenimiento/public/img/icons/notificacion.png" alt="Notificaciones" width="20" height="20">
                </button>

                <button class="icon-btn profile">
                    <span>Hola Usuario</span>
                </button>
            </div>
        </header>
    </div>

</body>

</html>