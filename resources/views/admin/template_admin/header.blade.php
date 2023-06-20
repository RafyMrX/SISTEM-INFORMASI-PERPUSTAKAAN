<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- SWEET ALERT -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- DATA TABLES -->
  <!-- DataTables -->
<link rel="stylesheet" href="assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="/assets_admin/css/style.css">
  <link rel="stylesheet" href="/assets_admin/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>

        </form>
        <ul class="navbar-nav navbar-right">
   
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets_admin/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Rafy</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              
    
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>

        </ul>
      </nav>

      <!-- SIDE BAR -->
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Admin Panel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SBY</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/dashboard')}}">Dashboard Katalog</a></li>
                </ul>
              </li>
              <li class="menu-header">Master Katalog</li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Katalog</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="{{url('/katalog')}}">Data Buku</a></li>
                  <li><a class="nav-link" href="{{url('/kategori')}}">Data Kategori</a></li>
                  <li><a class="nav-link" href="{{url('/rak')}}">Data Rak</a></li>
                </ul>
              </li>

               <li class="menu-header">Transaksi</li>
              <li><a class="nav-link" href="{{url('/peminjaman')}}"><i class="fas fa-th-large"></i>  <span>Peminjaman</span></a></li>

               <li class="menu-header">Notofikasi</li>
              <li><a class="nav-link" href="{{url('/usulan')}}"><i class="fas fa-envelope"></i> <span>Usulan Koleksi</span></a></li>

              <li class="menu-header">Master User</li>
              <li><a class="nav-link" href="{{url('/anggota')}}"><i class="fas fa-user"></i> <span>Master Anggota</span></a></li>
              <li><a class="nav-link" href="{{url('/petugas')}}"><i class="fas fa-user"></i> <span>Master Petugas</span></a></li>
            </ul>
        </aside>
      </div>

