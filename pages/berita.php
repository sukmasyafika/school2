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
              <img src="<?= base_url('assets/img/berita/ppdb.png'); ?>" class="img-fluid" alt="Top Story Image">
              <h4 class="mt-3 fw-bold">Penerimaan Siswa Baru Tahun Ajaran 2024/2025</h4>
              <p>SMK N 2 Jayapura membuka pendaftaran siswa baru untuk tahun ajaran 2024/2025. Segera daftarkan diri Anda melalui portal resmi sekolah.</p>
              <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>
          </div>

          <div class="col-12 col-md-6 mb-5">
            <article>
              <img src="<?= base_url('assets/img/berita/sains.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 1">
              <h4 class="mt-3 fw-bold">Kegiatan Lomba Sains Tingkat Provinsi</h4>
              <p>Siswa SMK N 2 Jayapura berhasil meraih juara 1 dalam lomba sains tingkat provinsi yang diadakan di Kota Jayapura.</p>
              <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>
          </div>

          <div class="col-12 col-md-6 mb-5">
            <article>
              <img src="<?= base_url('assets/img/berita/b-2.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 2">
              <h4 class="mt-3 fw-bold">Workshop Teknologi Informasi untuk Guru</h4>
              <p>Guru-guru SMK N 2 Jayapura mengikuti workshop tentang teknologi informasi untuk meningkatkan keterampilan dalam pengajaran.</p>
              <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>
          </div>

          <div class="col-12 col-md-6 mb-5">
            <article>
              <img src="<?= base_url('assets/img/berita/sains.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 1">
              <h4 class="mt-3 fw-bold">Kegiatan Lomba Sains Tingkat Provinsi</h4>
              <p>Siswa SMK N 2 Jayapura berhasil meraih juara 1 dalam lomba sains tingkat provinsi yang diadakan di Kota Jayapura.</p>
              <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>
          </div>

          <div class="col-12 col-md-6 mb-5">
            <article>
              <img src="<?= base_url('assets/img/berita/b-2.jpg'); ?>" class="img-fluid same-size" alt="Bottom Left Image 2">
              <h4 class="mt-3 fw-bold">Workshop Teknologi Informasi untuk Guru</h4>
              <p>Guru-guru SMK N 2 Jayapura mengikuti workshop tentang teknologi informasi untuk meningkatkan keterampilan dalam pengajaran.</p>
              <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
            </article>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <h3 class="fw-bold mb-5 text-info">Berita Terbaru</h3>
        <article class="d-flex mb-4">
          <div class="me-3">
            <h4 class="fw-bold">Pembagian Rapor Semester Ganjil 2024/2025</h4>
            <p class="text-small">Pembagian rapor semester ganjil akan dilaksanakan pada tanggal 20 Desember 2024 di ruang kelas masing-masing.</p>
            <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
          </div>
          <img src="<?= base_url('assets/img/berita/b-5.jpg'); ?>" class="img-fluid" alt="Right Image 1" style="width: 120px; height: auto;">
        </article>
        <hr class="border border-info border-1 opacity-50">
        <article class="d-flex mb-4">
          <div class="me-3">
            <h4 class="fw-bold">Persiapan Ujian Praktik Kejuruan 2024</h4>
            <p class="text-small">Ujian praktik kejuruan bagi kelas XII akan dilaksanakan mulai Januari 2024. Pastikan semua perlengkapan dan materi ujian telah disiapkan.</p>
            <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
          </div>
          <img src="<?= base_url('assets/img/berita/b-5.jpg'); ?>" class="img-fluid" alt="Right Image 2" style="width: 120px; height: auto;">
        </article>
        <hr class="border border-info border-1 opacity-50">
        <article class="d-flex mb-4">
          <div class="me-3">
            <h4 class="fw-bold">Kegiatan Perkemahan Pramuka di SMK N 2 Jayapura</h4>
            <p class="text-small">Pramuka SMK N 2 Jayapura akan mengadakan kegiatan perkemahan tahunan pada bulan Oktober 2024. Kegiatan ini diikuti oleh seluruh siswa kelas X dan XI.</p>
            <a href="#" class="text-decoration-none">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
          </div>
          <img src="<?= base_url('assets/img/berita/b-5.jpg'); ?>" class="img-fluid" alt="Right Image 3" style="width: 120px; height: auto;">
        </article>
        <hr class="border border-info border-1 opacity-50">
      </div>
    </div>
  </section>

</main>

<!-- artikel -->

<?= $this->endSection(); ?>
