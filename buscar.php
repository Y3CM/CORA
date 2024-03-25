<style>
        /* Estilos para la barra de navegación vertical */
        .navbar-vertical {
            width: 200px; /* Ancho de la barra de navegación vertical */
            height: 100vh; /* Altura completa de la pantalla */
            position:absolute; /* Fijar la barra de navegación en la ventana */
            background-color: #343a40; /* Color de fondo */
            padding-top: 25px; /* Espaciado superior */
        }
        .navbar-vertical .nav-link {
            color: #fff; /* Color del texto */
        }
        .navbar-vertical .nav-link:hover {
            background-color: #6c757d; /* Color de fondo al pasar el ratón */
        }
        .main-content {
            margin-left: 200px; /* Dejar espacio para la barra de navegación vertical */
            padding-top: 25px; /* Espaciado superior */
        }
        /* Ajustes para que el contenedor principal ocupe toda la altura disponible */
        .main-content {
            height: 100vh;
            overflow-y: auto; /* Permitir desplazamiento vertical si es necesario */
        }
    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">ADMIN CORA</span>
            <a href="../conexiones/cerrarAdmin.php"><button class="btn btn-outline-danger"><i class="fa-solid fa-arrow-right-to-bracket"></i> Cerrar Sesion</button></a>
        </div>
    </nav><nav class="list-group col-2 flex-fill navbar-vertical">
  <a href="home.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-house"></i> Home</a>
  <a href="estadisticas.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-chart-simple"></i> Estadisticas</a>
  <a href="users.php" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-user"></i> Usuarios</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-gear"></i> Ajustes</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-solid fa-list"></i> Categorias</a>
  <a href="#" class="list-group-item list-group-item-action list-group-item-secondary"><i class="fa-regular fa-lemon"></i> Productos</a>
</nav>