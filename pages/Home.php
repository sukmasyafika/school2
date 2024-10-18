<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- hero -->
<section id="hero">
  <div class="container-fluid mt-5 pt-5">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('assets/img/bg/g-1.jpg'); ?> " class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fs-1 text-light fw-semibold">Tempat Belajar, Berkembang, dan Berprestasi</h5>
            <p class="text-light">SMK N 2 adalah rumah bagi siswa yang ingin berkembang dalam keterampilan dan
              pengetahuan. Kami mempersiapkan Anda menjadi pemimpin masa depan.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?= base_url('assets/img/bg/g-2.jpg'); ?> " class="d-block w-100" alt="">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="fs-1 text-light fw-semibold">Membangun Karakter, Mengasah Keterampilan</h5>
            <p class="text-light">Dengan fasilitas lengkap dan tenaga pengajar profesional, SMK N 2 mendorong siswa
              untuk terus berkembang, baik secara akademis maupun non-akademis.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- hero -->

<!-- keterangan -->
<section id="ket" class="my-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center">
        <div>
          <h2 class="mb-3">Tentang SMKN 2 Jayapura</h2>
          <p class="mb-4">
            SMKN 2 Jayapura adalah sekolah kejuruan unggulan yang berfokus pada pengembangan keterampilan praktis dan profesionalisme siswa. Kami menyediakan berbagai program keahlian yang siap membekali siswa dengan kompetensi yang relevan di dunia industri.
          </p>
          <p class="mb-4">
            Dengan fasilitas lengkap dan tenaga pengajar berpengalaman, kami terus berupaya menjadi sekolah yang menghasilkan lulusan yang siap bersaing secara global.
          </p>
        </div>
      </div>
      <div class="col-md-6 text-center">
        <img src="<?= base_url('assets/img/about/sekolah.jpg'); ?>" class=" img-thumbnail rounded shadow" alt="Gambar Sekolah">
      </div>
    </div>
  </div>
</section>
<!-- keterangan -->

<!-- seleksi -->
<section id="seleksi" class="my-5">
  <div class="container-fluid bg-info text-white py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-3">
          <img src="<?= base_url('assets/img/about/ppdb.jpg'); ?>" alt="PPDB Image" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
          <button class="btn btn-light fw-bold rounded-pill mb-3 p-3">Pengumuman dan Informasi PPDB</button>
          <h2 class="fw-bold">Penerimaan Peserta Didik Baru Tahun Ajaran 2024/2025</h2> <br>
          <p class="fw-semibold">PENGISIAN DATA SECARA MANUAL DI SEKOLAH UNTUK PROSES PENDAFTARAN, INFORMASI LEBIH LANJUT DAPAT DIKETAHUI MELALUI SITUS
            <a href="#" class="text-white fw-bold" target="_blank">HTTPS://PPDB.SMKN2JPR.GO.ID</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- seleksi -->

<!-- pendaftar -->
<section id="daftar" class="py-5">
  <div class="mb-5 text-center">
    <h2 class="display-4 pb-3 fw-semibold">Persyaratan <span class="text-info">Pendaftaran</span></h2>
  </div>
  <div class="container">
    <ul class="list-group list-group-flush">
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Buku Raport SMP/Sederajat (Asli dan Fotokopi)
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Surat Keterangan Nilai Raport Semester I s.d V
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Ijazah SMP/Sederajat (Asli dan Fotokopi)
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Kartu Keluarga dan Akte Kelahiran (Asli dan Fotokopi)
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Piagam Kejuaraan bagi yang memiliki
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        KIP/Tanda bukti peserta DTKS bagi yang tidak mampu dan keterangan tidak sekolah (ATS) untuk jalur Afirmasi
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Surat Keterangan Sehat dan Tidak Buta Warna dari Dinas Berwenang
      </li>
      <li class="list-group-item d-flex align-items-center">
        <i class="bi bi-file-earmark-text-fill me-2 text-danger"></i>
        Fotokopi SK Penugasan dari Dinas Bagi Anak Guru/Tenaga Kependidikan
      </li>
    </ul>
  </div>
</section>
<!-- pendaftar -->

<!-- kouta seleksi -->
<section id="kouta" class="my-5">
  <div class="container-fluid bg-info text-white py-5">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <h5 class="text-bg-light p-sm-2 rounded-4  text-center mb-3">Seleksi Prestasi
            <span class="badge rounded-pill text-bg-info text-light p-sm-2">Kuota 75%</span>
          </h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Nilai Raport Semester I s.d V</li>
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Piagam Penghargaan</li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <h5 class="text-bg-light p-sm-2 rounded-4  text-center mb-3">Seleksi Afirmasi
            <span class="badge rounded-pill text-bg-info text-light p-sm-2">Kuota 15%</span>
          </h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent text-light fw-semibold bg-gradient-danger"><i class="bi bi-info-circle me-2 text-danger"></i>Keluarga Kurang Mampu (PIP/DTKS)</li>
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Anak Yatim Piatu</li>
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Anak Panti</li>
          </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
          <h5 class="text-bg-light p-sm-2 rounded-4  text-center mb-3">Seleksi Domisili
            <span class="badge rounded-pill text-bg-info text-light p-sm-2">Kuota 10%</span>
          </h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Domisili Terdekat</li>
            <li class="list-group-item bg-transparent text-light fw-semibold"><i class="bi bi-info-circle me-2 text-danger"></i>Anak Guru/Tenaga Kependidikan</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- kouta seleksi -->

<!-- jurusan -->
<section id="jurusan" class="py-5" x-data="card()">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4 text-center pb-3 fw-semibold">Program <span class="text-info">Keahlian</span></h2>
      <p class="lead">Pilih jurusan yang sesuai dengan minat dan bakat Anda.</p>
    </div>

    <div class="row">
      <template x-for="(item, index) in cardJurusan" :key="index">
        <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="card h-100 shadow border-info">
            <img :src="item.gambar" class="card-img-top object-fit-cover" alt="Jurusan Image" height="200">
            <div class="card-body">
              <h5 class="card-title" x-text="item.judul"></h5>
              <!-- Tampilkan deskripsi singkat di kartu -->
              <p class="card-text" x-text="item.shortText"></p>
            </div>
            <div class="card-footer bg-transparent border-0 text-center pb-4">
              <button @click="openModal(item)" class="btn btn-info text-light" data-bs-toggle="modal" data-bs-target="#jurusanModal">Selengkapnya</button>
            </div>
          </div>
        </div>
      </template>
    </div>

    <!-- Pagination -->
    <div class="d-flex justify-content-center my-4">
      <button @click="prevPage()" :disabled="currentPage === 1" class="btn btn-outline-info me-2">
        <i class="bi bi-chevron-left"></i> Previous
      </button>

      <template x-for="page in totalPage" :key="page">
        <button @click="changePage(page)" class="btn mx-2" :class="{'btn-info': currentPage === page, 'btn-outline-info': currentPage !== page}">
          <span x-text="page"></span>
        </button>
      </template>

      <button @click="nextPage()" :disabled="currentPage === totalPage" class="btn btn-outline-info ms-2">
        Next <i class="bi bi-chevron-right"></i>
      </button>
    </div>
  </div>

  <!-- Modal untuk Detail Jurusan -->
  <div class="modal fade" id="jurusanModal" tabindex="-1" aria-labelledby="jurusanModalLabel" aria-hidden="true" x-ref="jurusanModal">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jurusanModalLabel" x-text="selectedJurusan.judul"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-6">
              <img :src="selectedJurusan.gambar" class="img-fluid" alt="Jurusan Image">
            </div>
            <div class="col-md-6 ">
              <h3 x-text="selectedJurusan.judul"></h3>
              <p><strong>Deskripsi:</strong> <span x-text="selectedJurusan.text"></span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- jurusan -->

<!-- Ekstrakurikuler -->
<section id="ekskul" class="py-5">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="display-4 pb-3 fw-semibold">Pilihan <span class="text-info">Ekstrakurikuler</span></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/pramuka.jpg'); ?>" class=" card-img-top" alt="Pramuka">
          <div class="card-body text-center">
            <h5 class="card-title">Pramuka</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/paskib.jpg'); ?>" class=" card-img-top" alt="Paskibra">
          <div class="card-body text-center">
            <h5 class="card-title">Paskibra</h5>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="<?= base_url('assets/img/about/pmr.jpg'); ?>" class=" card-img-top" alt="PMR">
          <div class="card-body text-center">
            <h5 class="card-title">PMR</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Ekstrakurikuler -->

<!-- Q&A -->
<section id="qa" class="py-5">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="display-4 pb-3 fw-semibold">Tanya & Jawab <span class="text-info">Sekolah</span></h2>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="accordion" id="kiri">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                Apa saja persyaratan untuk mendaftar ke sekolah ini?
              </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#kiri">
              <div class="accordion-body">
                Persyaratan untuk mendaftar antara lain: fotokopi ijazah terakhir, surat keterangan sehat, fotokopi kartu keluarga, dan pas foto ukuran 3x4.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Apakah SMKN 2 Jayapura menyediakan beasiswa?
              </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#kiri">
              <div class="accordion-body">
                Ya, kami menyediakan beasiswa untuk siswa berprestasi dan siswa yang kurang mampu melalui program pemerintah dan kerja sama dengan pihak swasta.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bagaimana proses penerimaan siswa baru di SMKN 2 Jayapura?
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#kiri">
              <div class="accordion-body">
                Proses penerimaan siswa baru dilakukan melalui seleksi administrasi dan tes masuk. Informasi lengkap dapat diakses melalui website sekolah.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="accordion" id="kanan">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Fasilitas apa saja yang disediakan oleh SMKN 2 Jayapura?
              </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#kanan">
              <div class="accordion-body">
                SMKN 2 Jayapura menyediakan berbagai fasilitas, seperti laboratorium komputer, bengkel praktik otomotif, perpustakaan, lapangan olahraga, dan ruang multimedia.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Kegiatan ekstrakurikuler apa yang ada di SMKN 2 Jayapura?
              </button>
            </h2>
            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#kanan">
              <div class="accordion-body">
                Kami menyediakan berbagai kegiatan ekstrakurikuler, seperti pramuka, futsal, paduan suara, seni tari, dan klub robotik untuk mendukung pengembangan minat dan bakat siswa.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Apakah SMKN 2 Jayapura menyediakan layanan bimbingan konseling?
              </button>
            </h2>
            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#kanan">
              <div class="accordion-body">
                Ya, kami menyediakan layanan bimbingan konseling untuk membantu siswa mengatasi masalah akademis, sosial, dan pribadi serta memberikan arahan mengenai masa depan mereka.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Q&A -->

<?= $this->endSection(); ?>
