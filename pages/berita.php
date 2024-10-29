<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- artikel -->
<main>
  <section class="container py-5">
    <h2 class="p-5 display-4 text-center fw-semibold">Berita</h2>
    <div class="row">
      <!-- Bagian Kiri -->
      <div class="col-lg-6">
        <h3 class="fw-bold mb-5 text-info">Berita Utama</h3>
        <div class="row">
          <div class="col-12 mb-5">
            <article>
              <!-- Carousel -->
              <div id="newsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?= base_url('assets/img/berita/ppdb.png'); ?>" class="d-block w-100 img-fluid" alt="Top Story Image 1">
                    <h4 class="mt-3 fw-bold">Penerimaan Siswa Baru Tahun Ajaran 2024/2025</h4>
                    <p>SMK N 2 Jayapura membuka pendaftaran siswa baru untuk tahun ajaran 2024/2025. Segera daftarkan diri Anda melalui portal resmi sekolah.</p>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/img/berita/ppd.jpg'); ?>" class="d-block w-100 img-fluid" alt="Top Story Image 2">
                    <h4 class="mt-3 fw-bold">Pengumuman Pendaftaran Tahun ajaran 2024/2025</h4>
                    <p>PPDB mulai dari persiapan (pra pendaftaran), pengumuman pendaftaran, pendaftaran dan penyerahan dokumen persyaratan, seleksi hingga batas kuota daya tampung, pengumuman hasil seleksi secara terbuka, hingga daftar ulang.PPDB dilaksanakan secara objektif, transparan,dilaksanakan pada setiap tahun, dimulai pada awal bulan Juni.</p>
                  </div>
                  <div class="carousel-item">
                    <img src="<?= base_url('assets/img/berita/info.png'); ?>" class="d-block w-100 img-fluid" alt="Top Story Image 3">
                    <h4 class="mt-3 fw-bold">Pengumuman Hasil Seleksi & Daftar ulang Tahun 2024/2025</h4>
                    <p>Pengumuman Hasil Seleksi Tahap 1 dan Tahap 2 SMK N 2 Jayapura tahun ajaran 2024/2025 telah diumumkan silahkan cek melalui portal resmi sekolah kami.</p>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <div class="col-12 col-md-6 mb-4">
            <article>
              <img src="<?= base_url('assets/img/berita/b-2.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 2">
              <h4 class="mt-3 fw-bold">Workshop Teknologi Informasi untuk Guru</h4>
              <p>Guru-guru SMK N 2 Jayapura mengikuti workshop tentang teknologi informasi untuk meningkatkan keterampilan dalam pengajaran.</p>
              <!-- <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a> -->
            </article>
          </div>

          <div class="col-12 col-md-6 mb-4">
            <article>
              <img src="<?= base_url('assets/img/berita/sains.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 1">
              <h4 class="mt-3 fw-bold">Kegiatan Lomba Sains Tingkat Provinsi</h4>
              <p>Siswa SMK N 2 Jayapura berhasil meraih juara 1 dalam lomba sains tingkat provinsi yang diadakan di Kota Jayapura.</p>
              <!-- <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a> -->
            </article>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <h3 class="fw-bold mb-5 text-info">Berita Terbaru</h3>
        <?php foreach ($berita as $b) : ?>
          <article class="d-flex mb-4">
            <div class="me-3">
              <h4 class="fw-bold"><?= esc($b['judul']); ?></h4>
              <p class="text-small"><?= esc($b['desk']); ?></p>
              <p class="text-small"><span>Di buat Tanggal : </span><?= date('d M Y', strtotime($b['tgl'])); ?></p>
            </div>
            <img src="<?= base_url('assets/img/berita/' . $b['foto']); ?>" class="img-fluid" alt="Right Image 1" style="width: 120px; height: auto;">
          </article>
          <hr class="border border-info border-1 opacity-50">
        <?php endforeach; ?>
      </div>
    </div>
    </div>
  </section>

</main>

<!-- artikel -->

<?= $this->endSection(); ?>
