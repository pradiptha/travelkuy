<body>
    <header class="header-global">
        <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
            <div class="container">
                <a class="navbar-brand" href="/travelkuy/">
                    <img src="/travelkuy/assets/img/icons/logo1.png" style="height: 50px;" alt="" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header">
                        <div class="row">
                            <div class="col-6 collapse-brand">
                                <a class="navbar-brand" href="/travelkuy/">
                                    <img src="/travelkuy/assets/img/icons/logo.png" height="50" alt="" alt="">
                                </a>
                            </div>
                            <div class="col-6 collapse-close">
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <li class="nav-item">
                                <a class="nav-link nav-link-icon" href="#">
                                    <i class="ni ni-spaceship"></i>
                                    <span class="nav-link-inner--text d-lg-none">Discover</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-link-icon" href="#" id="navbar-default_dropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ni ni-circle-08 mr-2"></i>
                                    <?= $_SESSION['username'] ?>
                                    <span class="nav-link-inner--text d-lg-none">Settings</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                                    <a class="dropdown-item" href="/travelkuy/customer/profile.php"><img src="/travelKuy/assets/img/theme/kucing.jpg" class="rounded-circle mr-2" alt="image" style="width : 30px; height :30px;"><?= $_SESSION['username'] ?></a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/travelkuy/customer/histori.php"><i class="ni ni-calendar-grid-58"></i>Histori</a>
                                    <a class="dropdown-item" href="/travelkuy/customer/editprofil.php"><i class="ni ni-badge"></i>Edit Profil</a>
                                    <a class="dropdown-item" href="/travelkuy/customer/editemail.php"><i class="ni ni-ui-04"></i>Ubah Email</a>
                                    <a class="dropdown-item" href="/travelkuy/customer/editpassword.php"><i class="ni ni-key-25"></i>Ubah Password</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="/travelkuy/php/login.php?act=logout"><i class="ni ni-button-power"></i>Logout</a>
                                </div>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/travelkuy/home/register.php">
                                    REGISTER
                                </a>
                            </li>
                            <li class="nav-item d-lg-block ml-lg-4">
                                <a href="/travelkuy/home/login.php" class="btn btn-neutral btn-icon">
                                    <span class="nav-link-inner--text">LOGIN</span>
                                </a>
                            </li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>