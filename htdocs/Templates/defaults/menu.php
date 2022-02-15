<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="../home.php">
            Sportcenter
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">home</a>
                </li>
                <?php if (isset($loggedInUser)) { ?>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin">Admin home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/admin/products">Beheer producten</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">sportapparaat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="#">registreren</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">contact</a>
                    </li>
                <?php } ?>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <?php if (isset($loggedInUser)) { ?>
                        <a class="nav-link" href="/login">Uitloggen</a>
                    <?php } else { ?>
                        <a class="nav-link" href="/login">inloggen</a>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>