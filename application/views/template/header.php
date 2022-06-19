<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Abs</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header bg-dark text-white">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">ABS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body bg-dark">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('main') ?>">Data Karyawan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('absensi') ?>">Absensi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('auth/logout') ?>">Keluar</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('absensi') ?>">Absensi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('auth/logout') ?>">Keluar</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>