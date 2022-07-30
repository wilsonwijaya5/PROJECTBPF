<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PT. CAHAYA TOHA ABADI</title>
    <link href="<?= base_url('assets/dist/') ?>css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <h6 class="navbar-brand ps-2" href="">PT. CAHAYA TOHA ABADI</h6>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-6 me-lg-2 ps-4 " id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="<?= site_url('Auth/Logout') ?>">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Akses Halaman</div>
                        <?php
                        if ($user['role'] == 'SuperAdmin') { ?>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('User/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> User</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Alatberat/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Alat Berat</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Customer/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Customer</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Merk/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Merk</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Transaksi/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Transaksi</span>
                                </a>

                            </li>


                        <?php } else {
                        ?>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Alatberat/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Alat Berat</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Customer/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Customer</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Merk/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Merk</span>
                                </a>

                            </li>

                            <li class="nav-item">
                                <a class="nav-link collapsed" href="<?= site_url('Transaksi/') ?>">
                                    <i class="fas fa-fw fa-users"></i>
                                    <span> Transaksi</span>
                                </a>

                            </li>
                        <?php } ?>

                        </ul>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as: <?php echo $user['role']; ?></div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>