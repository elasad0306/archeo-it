<header>
    <div id="logo">
        <span>Archeo-It</span>
    </div>
    <div id="navbar">
        <div>

        </div>
        <nav>
            <a href="../index.php">Accueil</a>
            <a href="../discovery.php">Chantiers</a>
            <a href="../contact.php">Contact</a>
        </nav>
        <?php if (!empty($_SESSION['loggedIn'])):?>
        <div id="account-icon">
            <?php if(empty($_SESSION['admin'])):?>
            <a href="includes/logout.php" id="logout"><i class="fa-solid fa-right-from-bracket" style="color: white"></i></a>
            <?php else:?>
            <a href="../admin/admin.php" style="color: white">Admin</a>
            <?php endif;?>
        </div>
        <?php else:?>
        <div>

        </div>
        <?php endif;?>
    </div>
    <nav class="navbar bg-body-tertiary fixed-top" id="nav-mobile">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Archeo-It</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Archeo-It</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="../index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../discovery.php">Chantier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
