<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <a class="navbar-brand" href="#">
    <img src="<?= base_url('assets/img/logo/1.png'); ?>" alt="Bootstrap" width="70">
  </a>

  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
  </button>

  <ul class="navbar-nav ml-auto">

    <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>
        <span class="badge badge-danger badge-counter"><?= isset($pesan) ? count($pesan) : 0 ?></span>
      </a>
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="alertsDropdown">
        <h6 class="dropdown-header">Notifikasi Pesan Masuk</h6>

        <?php if (!empty($pesan)): ?>
          <?php foreach ($pesan as $p): ?>
            <div class="dropdown-item d-flex align-items-center">
              <div class="mr-3">
                <div class="icon-circle bg-info">
                  <i class="fas fa-envelope text-white"></i>
                </div>
              </div>
              <div>
                <div class="small text-gray-500"><?= date('F j, Y', strtotime($p['created_at'])); ?></div>
                <span class="font-weight-bold"><?= esc($p['nama']); ?>: <?= esc($p['pesan']); ?></span>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else: ?>
          <a class="dropdown-item text-center small text-gray-500" href="#">Tidak ada pesan baru</a>
        <?php endif; ?>

        <a class="dropdown-item text-center small text-gray-500" href="<?= base_url('pesan'); ?>">Tampilkan Semua Pesan</a>
      </div>
    </li>

    <div class="topbar-divider d-none d-sm-block"></div>
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->username; ?></span>
        <img class="img-profile rounded-circle"
          src="<?= base_url(); ?>/img/<?= user()->user_img; ?>">
      </a>
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
        aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Profile
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Settings
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>
  </ul>
</nav>