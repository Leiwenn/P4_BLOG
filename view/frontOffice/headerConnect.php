<header>

    <nav>
        <ul class="nav d-flex justify-content-between">
            <li class="nav-item m-3">
                <a href="index.php"><h1>JEAN FORTEROCHE</h1></a>
            </li>
            <li class="nav-item m-3">
                <a class="nav-link btn btn-outline-light" href="index.php?action=unregistration"><i class="fas fa-sign-in-alt"></i> Desinscription</a>
            </li>
        </ul>
    </nav>

    <div class="heroConnect h-75 d-flex flex-column align-items-center justify-content-center">
        <p>Heureux de vous revoir <?= $_SESSION['pseudo'] ?> !</p>
        <a class="btn mt-4" href="index.php?action=disconnect"><i class="fas fa-sign-in-alt"></i> DECONNEXION</a>
    </div>

</header>

