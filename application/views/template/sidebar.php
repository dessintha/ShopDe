<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">ONLINE SHOP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Title -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <h4 class="font-weight-bold" style="color: white"></h4>
    </form>


    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-white-600 small ">
            <?php 
            $keranjang = 'Keranjang Belanja: '.$this->cart->total_items(). 'items' 
            ?>
            <?php echo anchor('Dashboard/detail_keranjang', $keranjang) ?>
          </span>
        </a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-white-600 small"></span>
          <img class="img-profile rounded-circle" src="">
          <!-- <i class="fas fa-user-circle fa-fw"></i> -->
        </a>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('Dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Kategori/elektronik')?>">
          <i class="fas fa-fw fa-tv"></i>
          <span>Elektronik</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Kategori/pakaian_wanita')?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Wanita</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Kategori/pakaian_pria')?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Pria</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Kategori/pakaian_anak')?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Anak</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('Kategori/olahraga')?>">
          <i class="fas fa-fw fa-futbol"></i>
          <span>Olahraga</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      