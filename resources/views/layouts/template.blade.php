<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('/assets/front/assets/css/style.css') }}">
    <title>Mesa de Ayuda</title>
</head>

<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <a href="#" class="logo">
            <i class='bx bx-check'></i>
            <div class="logo-name"><span>Tes</span>Ltda</div>
        </a>
        <ul class="side-menu">
            <li><a href="#"><i class='bx bxs-dashboard'></i>Panel</a></li>
            <li><a href="#"><i class='bx bx-message-square-dots'></i>Tickets</a></li>
            <li><a href="#"><i class='bx bx-group'></i>Usuarios</a></li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#" class="logout">
                    <i class='bx bx-log-out-circle'></i>
                    Cerrar Sesion
                </a>
            </li>
        </ul>
    </div>
    <!-- End of Sidebar -->

    <!-- Main Content -->
    <div class="content">
        <!-- Navbar -->
        <nav>
            <i class='bx bx-menu'></i>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Buscar...">
                    <button class="search-btn" type="submit"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="theme-toggle" hidden>
            <label for="theme-toggle" class="theme-toggle"></label>
            <a href="#" class="notif">
                <i class='bx bx-bell'></i>
                <span class="count">12</span>
            </a>
            <a href="#" class="profile">
                <img src="{{ asset('/assets/front/assets/img/logo.png') }}">
            </a>
        </nav>

        <!-- End of Navbar -->
        @yield('contenido')

    </div>

    <script src="{{ asset('/assets/front/assets/js/index.js') }}"></script>
</body>

</html>