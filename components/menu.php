<nav class="navbar bg-transparent mt-4">
    <div class="container-fluid">

        <button class="navbar-toggler bg-light me-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start tema2" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title text-white" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-start flex-grow-1 pe-3 ms-3">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="inicio.php"><i class="bi bi-house"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="usuario.php"><i class="bi bi-person-gear"></i> Contas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="produtos.php"><i class="bi bi-prescription2"></i> Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold text-white" href="estoque.php"><i class="bi bi-boxes"></i> Estoque</a>
                    </li>
                </ul>
            </div>
            <div class="container-fluid mb-5">
                <ul class="navbar-nav ms-3">
                    <li class="nav-item">
                        <a href="" class="nav-link fw-semibold text-white"><i class="bi bi-gear-fill"></i> Configurações</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link fw-semibold text-white"><i class="bi bi-info-square"></i> Ajuda</a>
                    </li>
                    <li class="nav-item">
                        <a href="actions/sair.php" class="nav-link fw-semibold text-white"><i class="bi bi-box-arrow-right"></i> Sair</a>
                    </li>
                </ul>
            </div>
        </div>
        <logo class="ms-5">
            <a href="inicio.php"><img src="img/MicrosoftTeams-image.png" alt="PharmaLogo" style="max-width: 180px;"></a>
        </logo>
    </div>
</nav>