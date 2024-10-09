<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- artikel -->
<section id="artikel" x-data="{ aktifArtikel: null }" class="pt-5 my-5">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="display-4 pb-3 fw-semibold">Berita <span class="text-info">Terbaru</span></h2>
      <p class="lead fst-italic">Berita terbaru dan artikel menarik dari sekolah kami.</p>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card article-card h-100 shadow border borde-secondary">
          <img src="<?= base_url('assets/img/berita/b-3.jpg'); ?>" class="card-img-top article-image" alt="Artikel 1" height="300">
          <div class="card-body">
            <div class="article-meta pb-3 text-secondary">20 September 2024</div>
            <h5 class="card-title">Prestasi Siswa dalam Olimpiade Sains Nasional</h5>
            <p class="card-text">
              Siswa kami berhasil meraih medali emas dalam Olimpiade Sains Nasional.
            </p>
            <!-- mengembalikan undefined, memastikan tidak ada nilai atau aksi yang dikembalikan atau diproses. -->
            <!-- jika 'baca selengkap' nya di klik maka aktifArtikel maka akan menjalnkan kondisi -->
            <!-- apakah artikel (baca selengkapnya) akan ditampilkan atau disembunyikan -->
            <!-- Mengecek aktifArtikel sama dengan 1. jika iya maka menjadi null, artikel tersebut akan disembunyikan. -->
            <!-- Jika aktifArtikel tidak sama dengan 1, maka akan di-set menjadi 1, yang artinya artikel tersebut akan ditampilkan. -->
            <!-- Jika nilainya 1, maka artikel tersebut dianggap aktif (ditampilkan). Jika nilainya null, maka artikel tersebut tidak aktif (disembunyikan). -->
            <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 1 ? null : 1">Baca
              Selengkapnya</a>
            <div x-show="aktifArtikel === 1" x-cloak class="mt-3">
              <p>Siswa kami berhasil meraih medali emas dalam Olimpiade Sains Nasional. Baca selengkapnya tentang
                perjalanan mereka dan bagaimana mereka menghadapi tantangan selama kompetisi.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card article-card h-100 shadow border borde-secondary">
          <img src="<?= base_url('assets/img/berita/b-2.jpg'); ?>" class="card-img-top article-image" alt="Artikel 2" height="300">
          <div class="card-body">
            <div class="article-meta pb-3 text-secondary">18 September 2024</div>
            <h5 class="card-title">Kunjungan Industri ke Perusahaan Teknologi Terdepan</h5>
            <p class="card-text">
              Siswa kelas 12 jurusan Teknik Informatika berkesempatan mengunjungi perusahaan teknologi terkemuka.
            </p>
            <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 2 ? null : 2">Baca
              Selengkapnya</a>
            <div x-show="aktifArtikel === 2" x-cloak class="mt-3">
              <p>Simak pengalaman mereka dalam memahami teknologi terbaru di perusahaan tersebut dan bagaimana
                kunjungan ini memotivasi siswa untuk berkarir di bidang teknologi.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mb-4">
        <div class="card article-card h-100 shadow border borde-secondary">
          <img src="<?= base_url('assets/img/berita/b-1.jpg'); ?>" class="card-img-top article-image" alt="Artikel 3" height="300">
          <div class="card-body">
            <div class="article-meta pb-3 text-secondary">15 September 2024</div>
            <h5 class="card-title">Pengabdian Masyarakat oleh Siswa di Desa Terpencil</h5>
            <p class="card-text">
              Siswa kami terlibat dalam program pengabdian masyarakat di desa terpencil.
            </p>
            <a href="javascript:void(0)" class="read-more" @click="aktifArtikel = aktifArtikel === 3 ? null : 3">Baca
              Selengkapnya</a>
            <div x-show="aktifArtikel === 3" x-cloak class="mt-3">
              <p>Pelajari lebih lanjut tentang kegiatan ini, termasuk bagaimana siswa membantu masyarakat dalam bidang
                pendidikan, kesehatan, dan teknologi.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- artikel -->

<?= $this->endSection(); ?>