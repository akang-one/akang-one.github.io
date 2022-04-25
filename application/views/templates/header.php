<?php defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>CATSHOP 069 | <?= $header; ?></title>
    <link rel="icon" href="<?= base_url('assets/templatesadmin/'); ?>dist/img/logotitle.jpg" type="image/icon type">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/fontawesome-free-6.1.1-web/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/jqvmap/jqvmap.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="../../plugins/toastr/toastr.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/summernote/summernote-bs4.min.css">
    <!-- pace-progress -->
    <link rel="stylesheet" href="<?= base_url('assets/templatesadmin/'); ?>plugins/pace-progress/themes/black/pace-theme-flat-top.css">

</head>
<style>
    table {
        border-collapse: collapse;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed pace-primary">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url() ?>" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- user navbar -->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url('uploads/users/' . $this->session->userdata('photo')) ?>" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline"><?= $this->session->userdata('fullname') ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-fuchsia">
                            <img src="<?= base_url('uploads/users/' . $this->session->userdata('photo')) ?>" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <?= $this->session->userdata('fullname') ?> - <?= $this->session->userdata('usertype') ?>
                                <small>Hello!!!</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="text-center">
                                <a href="<?= site_url('auth069/changephoto') ?>">
                                    <i class="fa-solid fa-image-portrait"></i>
                                    <small>Change Photo</small>
                                </a>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="<?= site_url('auth069/changepass') ?>" class="btn btn-default btn-flat">Change Password</a>
                            <a href="<?= site_url('auth069/logout') ?>" class="btn btn-default btn-flat float-right" data-toggle="tooltip" title="Log Out"><i class="fa-solid fa-right-from-bracket"></i></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button" data-toggle="tooltip" title="Full Screen">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-light-fuchsia elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>" class="brand-link bg-fuchsia">
                <img src="<?= base_url('assets/templatesadmin/') ?>dist/img/logocatshop.jpg" alt="Catshop Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">CATSHOP 069</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url() ?>" class="nav-link <?= $side_active == 'dashboard' ? 'active' : '' ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item <?= $side_active == 'cat' ? 'menu-open' : '' ?> <?= $side_active == 'category' ? 'menu-open' : '' ?>">
                            <a href="#" class="nav-link <?= $side_active == 'cat' ? 'active' : '' ?> <?= $side_active == 'category' ? 'active' : '' ?>">
                                <i class="nav-icon fa-solid fa-cat"></i>
                                <p>
                                    Cats & Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('cats069') ?>" class="nav-link <?= $side_active == 'cat' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cats List</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('categories069') ?>" class="nav-link <?= $side_active == 'category' ? 'active' : '' ?>">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories List</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <?php if ($this->session->userdata('usertype') == 'Manager') { ?>
                            <li class="nav-item <?= $side_active == 'sales' ? 'menu-open' : '' ?>">
                                <a href="#" class="nav-link <?= $side_active == 'sales' ? 'active' : '' ?>">
                                    <i class="nav-icon fa-solid fa-chart-pie"></i>
                                    <p>
                                        Report
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('cats069/sales') ?>" class="nav-link <?= $side_active == 'sales' ? 'active' : '' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Sales Report</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item <?= $side_active == 'user' ? 'menu-open' : '' ?>">
                                <a href="#" class="nav-link <?= $side_active == 'user' ? 'active' : '' ?>">
                                    <i class="nav-icon fa-solid fa-user"></i>
                                    <p>
                                        User
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?= site_url('users069') ?>" class="nav-link <?= $side_active == 'user' ? 'active' : '' ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage User</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        <?php } ?>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">