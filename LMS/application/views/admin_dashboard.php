<?php $this->load->view('header_admin'); ?>


<div class="container" id="container">
  <div class="header clearfix">
    <nav>
      <ul class="nav nav-pills float-right mt-3">
        <li class="nav-item">
          <a class='nav-link active' href="<?= base_url('Index/index'); ?>">BERANDA</a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="<?= base_url('Admin/halamanGuru'); ?>">GURU</a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="<?= base_url('Admin/halamanSiswa'); ?>">SISWA</a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="<?= base_url('Admin/halamanKontrak'); ?>">KONTRAK</a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="<?= base_url('Admin/halamanAkun'); ?>">AKUN</a>
        </li>
        <li class="nav-item logout">
          <a class="nav-link btn btn-danger" href="<?= base_url('Login/prosesLogout"'); ?>">LOGOUT</a>
        </li>
      </ul>
    </nav>
    <div class="logo">
    <img src="http://localhost/Push/LMS/asset/img/header.png">
    </div>
  </div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card text-center">
        <div class="card-header">
          &nbsp;
        </div>
        <div class="card-body">
          <h5 class="card-title">Selamat datang, <?php echo $username; ?></h5>

        </div>
        <div class="card-footer text-muted">
          2018 &copy; SPOT. All rights reserved
        </div>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>
