<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Awal Contact -->
<section id="contact" class="container py-5">
  <div class="col-12 p-5">
    <h2 class="display-4 text-center  fw-semibold">Contact<span class="text-info"> Us</span> </h2>
  </div>
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <div class="contact-info bg-white p-4">
        <h5>Alamat Kantor</h5>
        <p><i class="bi bi-geo-alt"></i> Jl. Padang Bulan No. 123, Jayapura, Papua</p>
        <h5>Email</h5>
        <p><i class="bi bi-envelope"></i> SmkN2@gmail.com</p>
        <h5>Telepon</h5>
        <p><i class="bi bi-telephone"></i> (021) 123-4567</p>
        <div class="social-media mt-4 text-center">
          <h5>Ikuti Kami di Sosial Media</h5>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-twitter"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
          <a href="#"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="col-lg-6">
      <div class="contact-form bg-white p-4">
        <h5>Kirim Pesan</h5>
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Nama Lengkap" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" placeholder="Subjek" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" rows="5" placeholder="Pesan Anda" required></textarea>
          </div>
          <div class="text-center mt-4">
            <button type="submit" class="btn btn-info text-light">Kirim Pesan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- Akhir Contact -->

<?= $this->endSection(); ?>