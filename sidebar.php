<!-- Sidebar -->
<ul class="navbar-nav 
  <?php if (in_groups('admin')) : ?> 
    bg-gradient-primary 
  <?php else : ?> 
    bg-gradient-info 
  <?php endif; ?> 
  sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-user-shield"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Admin</div>
  </a>
  <!-- Divider -->

  <?php if (in_groups('admin')) : ?>
    <!-- jika yg masuk admin maka tampilkan menu ini -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item <?= (current_url() == base_url('admin/index')) ? 'active' : '' ?>">
      <a class="nav-link" href="<?= base_url('admin/index'); ?>">
        <i class="fas fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <li class="nav-item <?= (current_url() == base_url('admin/pengguna')) ? 'active' : '' ?>">
      <a class="nav-link" href="<?= base_url('admin/pengguna'); ?>">
        <i class="fas fa-users-cog"></i>
        <span>Pengguna & Hak Akses</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Siswa
    </div>
    <li class="nav-item <?= (current_url() == base_url('siswa')) ? 'active' : '' ?>">
      <a class="nav-link" href="<?= base_url('siswa'); ?>">
        <i class="fa fa-user"></i>
        <span>Data Siswa</span>
      </a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Guru
    </div>
    <li class="nav-item <?= (current_url() == base_url('tenaga')) ? 'active' : '' ?>">
      <a class="nav-link" href="<?= base_url('tenaga'); ?>">
        <i class="fas fa-chalkboard-teacher"></i>
        <span>Data Guru</span>
      </a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Upload
    </div>

    <li class="nav-item <?= (current_url() == base_url('berita') || current_url() == base_url('galeri') || current_url() == base_url('pesan')) ? 'active' : '' ?>">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-file-alt"></i>
        <span>Pages</span>
      </a>
      <div id="collapsePages" class="collapse <?= (current_url() == base_url('berita') || current_url() == base_url('galeri') || current_url() == base_url('pesan')) ? 'show' : '' ?>" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item <?= (current_url() == base_url('berita')) ? 'active' : '' ?>" href="<?= base_url('berita'); ?>">Berita</a>
          <a class="collapse-item <?= (current_url() == base_url('galeri')) ? 'active' : '' ?>" href="<?= base_url('galeri'); ?>">Galeri</a>
          <a class="collapse-item <?= (current_url() == base_url('pesan')) ? 'active' : '' ?>" href="<?= base_url('pesan'); ?>">Pesan</a>
        </div>
      </div>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= (current_url() == base_url('grafik')) ? 'active' : '' ?>">
      <a class="nav-link" href="<?= base_url('grafik'); ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>
  <?php endif; ?>

  <!-- Menu untuk user / guru -->
  <?php if (in_groups('user')) : ?>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-home"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="fas fa-user"></i>
        <span>My profil</span></a>
    </li>
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
      Data
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-school"></i>
        <span>Kelas</span>
      </a>
      <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="#">Mata Pelajaran</a>
          <a class="collapse-item" href="#">Siswa</a>
        </div>
      </div>
    </li>
  <?php endif; ?>

  <hr class="sidebar-divider my-0">
  <li class="nav-item">
    <a class="nav-link" href="<?= base_url('logout'); ?>">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span>
    </a>
  </li>
  <hr class="sidebar-divider d-none d-md-block">
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->