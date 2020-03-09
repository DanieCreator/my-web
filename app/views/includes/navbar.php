<!--   -->
<div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white mb-5" style="background-color: #0E0B16;">
        <div class="container">
            <a class="navbar-brand" href="<?= URLROOT; ?>"><?= SITENAME; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-5 ">
                    <li class="nav-item ">
                        <a class="nav-link pr-5" id="home" href="<?= URLROOT ?>/pages">Home </span></a>
                    </li>
                    <li class="nav-item pr-5">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item dropdown pr-5">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= URLROOT . '/reports/index' ?>">Reports</a>
                            <a class="dropdown-item" href="#counselling">counselling</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#reunion">reunion</a>
                            <a class="dropdown-item" href="#reunion">partners</a>
                            <a class="dropdown-item" href="#reunion">sponsors</a>

                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  pr-5" id="platform" href="#persons" tabindex="-1" aria-disabled="true">platform</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link pr-5" id="admin" href="<?= URLROOT; ?>/admin">admin </span></a>
                    </li>

                    <?php if (isset($_SESSION['user_id'])) : ?>
                        <li class="nav-item ">
                            <a class="nav-link pr-5" id="login" href="<?= URLROOT; ?>/users/logOut">Logout</span></a>
                        </li>
                    <?php else : ?>

                        <li class="nav-item ">
                            <a class="nav-link pr-5" id="register" href="<?= URLROOT; ?>/users/register">Register</span></a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link pr-5" id="login" href="<?= URLROOT; ?>/users/login">Login</span></a>
                        </li>
                    <?php endif; ?>

                </ul>

            </div>
        </div>
    </nav>

</div>