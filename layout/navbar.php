<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-lg">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="<?= base_url('assets/img/logo/1.png'); ?>" alt="Bootstrap" width="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav m-auto fs-5 ">
        <li class="nav-item mx-3 ">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="/pages/profil">Profil</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="/pages/galeri">Galeri</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="/pages/berita">Berita</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="/pages/contact">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto fs-5 shadow-sm">
        <li class="nav-item fw-bold btn btn-sm btn-outline-info">
          <a class="nav-link" href="/pages/login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>