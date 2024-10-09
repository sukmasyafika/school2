<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- profil -->
<section id="about" class="container mt-5 py-5">
  <div class="mb-5 text-center">
    <h2 class="display-4 pb-3 fw-semibold">Profil <span class="text-info">SMK N 2</span></h2>
    <p class="fst-italic">SMKN 2 merupakan sekolah terbagus dan terluas yang ada di Papua. Ada 5 jurusan yang siap mempersiapkan Anda menjadi orang sukses.</p>
  </div>
  <div class="row justify-content-center">
    <div class=" text-center mb-4">
      <img src="<?= base_url('assets/img/about/ks-1.jpg'); ?>" alt="Kepala Sekolah" class="img-fluid rounded shadow-lg" width="250">
      <h4 class="mt-3 fw-bold">Kepala Sekolah</h4>
    </div>
    <div class="col">
      <div class="card shadow-sm">
        <div class="card-body">
          <p class="card-text">
            SMKN 2 Bisnis dan Manajemen Jayapura merupakan salah satu SMK Pusat Keunggulan yang ada di Provinsi Papua, terletak di Jl. Raya Kotaraja Dalam, Abepura Papua. Sebagaimana sekolah menengah kejuruan lainnya, sekolah ini juga mengelola beberapa Program Keahlian di antaranya Manajemen Perkantoran dan Layanan Bisnis, Akuntansi dan Keuangan Lembaga, Pemasaran, Usaha Layanan Pariwisata, dan Teknik Jaringan Komputer dan Telekomunikasi. SMKN 2 Bisnis dan Manajemen didukung oleh tenaga GTK yang kompeten di bidangnya sehingga berkualitas dan menjadi salah satu SMK terbaik di Kota Jayapura.
          </p>
          <h2 class="card-title mt-4 mb-4 fw-medium">Visi</h2>
          <p class="card-text">Sebagai Lembaga Diklat Kejuruan yang Berstandar Mutu dan Tetap Mengemban Potensi Tanah Papua Menuju Kemandirian.</p>
          <h2 class="card-title mb-4 fw-medium">Misi</h2>
          <ul class="list-unstyled">
            <li class="d-flex align-items-start mb-2">
              <span class="badge bg-info rounded-pill me-3">1</span>
              <span>Menyelenggarakan PBM yang Bermutu, Berakhlak dan Bermoral.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <span class="badge bg-info rounded-pill me-3">2</span>
              <span>Mengembangkan kegiatan Diklat yang Inovatif, Kreatif dan Produktif.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <span class="badge bg-info rounded-pill me-3">3</span>
              <span>Mendorong partisipasi aktif dalam menjaga lingkungan.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <span class="badge bg-info rounded-pill me-3">4</span>
              <span>Mengembangkan keterampilan dan kreativitas siswa.</span>
            </li>
            <li class="d-flex align-items-start mb-2">
              <span class="badge bg-info rounded-pill me-3">5</span>
              <span>Menyediakan layanan Diklat bermutu bagi Lembaga-Lembaga Dinas/Instansi, sesuai dengan bidang keahlian yang ada.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- profil -->

<!-- pendidikan -->
<section id="tenaga" class="container py-5">
  <div class="mb-5 text-center">
    <h2 class="display-4 pb-3 fw-semibold">Tenaga Pendidikan <span class="text-info">Dan Kependudukan</span></h2>
  </div>
  <div class="row justify-content-center">
    <div class="col-12 col-md-4 mb-4">
      <div class="card shadow">
        <img src="<?= base_url('assets/img/tenaga/tenaga1.jpg'); ?>" class="card-img-top" alt="Budi Santoso" height="250">
        <div class="card-body text-center">
          <h5 class="card-title">Budi Santoso</h5>
          <p class="card-text">Jabatan: Guru Kelas<br>
            Mata Pelajaran: Matematika</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mb-4">
      <div class="card shadow">
        <img src="<?= base_url('assets/img/tenaga/tenaga1.jpg'); ?>" class="card-img-top" alt="Budi Santoso" height="250">
        <div class="card-body text-center">
          <h5 class="card-title">Siti Nurjanah</h5>
          <p class="card-text">Jabatan: Guru Bahasa Inggris<br>
            Mata Pelajaran: Bahasa Inggris</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mb-4">
      <div class="card shadow">
        <img src="<?= base_url('assets/img/tenaga/tenaga1.jpg'); ?>" class="card-img-top" alt="Budi Santoso" height="250">
        <div class="card-body text-center">
          <h5 class="card-title">Ahmad Taufik</h5>
          <p class="card-text">Jabatan: Guru Sains<br>
            Mata Pelajaran: Fisika</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- pendidikan -->

<!-- fasitas -->
<section id="fasilitas" class="container py-5">
  <div class="mb-5 text-center">
    <h2 class="display-4 pb-3 fw-semibold">Fasilitas <span class="text-info">Sekolah</span></h2>
  </div>
</section>
<!-- fasitas -->

<?= $this->endSection(); ?>