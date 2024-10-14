<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="galeri" class="py-5 mt-5">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="display-4 pb-3 fw-semibold">
        <span class="text-info">Galeri</span>
      </h2>
      <p class="lead">Lihat dokumentasi foto dan video dari berbagai kegiatan yang telah diselenggarakan.</p>
    </div>

    <h3 class="fw-bold">Foto Kegiatan</h3>
    <hr class="mb-4" style="border-top: 2px solid #333; width: 150px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/s-6.jpg'); ?>" class="card-img-top" alt="Rapat Komite">
          <div class="card-body">
            <h5 class="card-title fw-bold">Rapat Komite</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/s-7.jpg'); ?>" class="card-img-top" alt="Workshop">
          <div class="card-body">
            <h5 class="card-title fw-bold">Workshop</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/s-8.jpg'); ?>" class="card-img-top" alt="Lomba Bersih & Hias Kelas">
          <div class="card-body">
            <h5 class="card-title fw-bold">Lomba Bersih & Hias Kelas</h5>
          </div>
        </div>
      </div>
    </div>

    <h3 class="fw-bold mt-5">Video Kegiatan</h3>
    <hr class="mb-4" style="border-top: 2px solid #333; width: 150px;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/lt-IB88Al7Q" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/vBSshSvQt2Y" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/Fyv6xOvEB5k" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>
