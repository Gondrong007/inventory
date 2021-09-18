<?php $this->login_admin->cek_login();?>
<!doctype html>
<html lang="en" class="semi-dark">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url();?>assets/template/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?= base_url();?>assets/template/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Datatable-->
    <link href="<?= base_url();?>assets/template/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="<?= base_url();?>assets/template/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/style.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url();?>assets/template/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/template/font-awesome/css/fontawesome.min.css">
    <!-- loader-->
    <link href="<?= base_url();?>assets/template/css/pace.min.css" rel="stylesheet" />
    <!--Theme Styles-->
    <link href="<?= base_url();?>assets/template/css/dark-theme.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/light-theme.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/semi-dark.css" rel="stylesheet" />
    <link href="<?= base_url();?>assets/template/css/header-colors.css" rel="stylesheet" />
    <title><?= $title;?></title>
</head>
<body>
    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="fa fa-list"></i>
                </div>
                <div class="top-navbar-right ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown dropdown-user-setting">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                                data-bs-toggle="dropdown">
                                <div class="user-setting d-flex align-items-center">
                                    <img src="<?= base_url();?>assets/template/images/avatars/avatar-1.png" class="user-img" alt="">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <img src="<?= base_url();?>assets/template/images/avatars/avatar-1.png" alt="" class="rounded-circle"
                                                width="54" height="54">
                                            <div class="ms-3">
                                                <h6 class="mb-0 dropdown-user-name"><?= $username;?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= base_url('admin/login/logout');?>">
                                        <div class="d-flex align-items-center">
                                            <div class=""><i class="fa fa-lock"></i></div>
                                            <div class="ms-3"><span>Logout</span></div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--end top header-->
        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?= base_url();?>assets/template/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Page Admin</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="fa fa-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="menu-label">Menu</li>
                <li>
                    <a href="<?= base_url('admin/dashboard');?>">
                        <div class="parent-icon"><i class="fa fa-home"></i>
                        </div>
                        <div class="menu-title"> Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa fa-user"></i>
                        </div>
                        <div class="menu-title"> Users</div>
                    </a>
                    <ul>
                        <li> 
                            <a href="<?= base_url('admin/users');?>"><i class="fa fa-circle"></i>Users</a>
                        </li>
                        <li> 
                            <a href="#"><i class="fa fa-circle"></i>Log Aktivitas</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->