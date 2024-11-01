<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Awal Contact -->
<section id="contact" class="container py-5">
  <div class="col-12 p-5">
    <h2 class="display-4 text-center  fw-semibold">Contact<span class="text-info"> Us</span> </h2>
  </div>

  <!-- maps -->
  <div class="mb-5">
    <div class="maps" style="display: flex; flex-direction: column; align-items: center;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3793.698986650214!2d140.66990017474564!3d-2.5973909384642364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x686cf5f3a9c2874b%3A0xf907f890c4c4453d!2sState%20Professional%20School%202%20of%20Jayapura!5e1!3m2!1sen!2sid!4v1728876437553!5m2!1sen!2sid"
        width="800" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-6 mb-4 mb-lg-0">
      <div class="contact-info bg-white p-4">
        <h5>Alamat Kantor</h5>
        <p><i class="bi bi-geo-alt"></i> Jl. Perkutut, Kotaraja Dalam, Jayapura, Papua</p>
        <h5>Email</h5>
        <p><i class="bi bi-envelope"></i> SmkN2Jpr@gmail.com</p>
        <h5>Telepon</h5>
        <p><i class="bi bi-telephone"></i> (021) 123-4567-891</p>
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
        <form action="<?= base_url('/kontak/kirim'); ?>" method="post">
          <div class="row g-3">
            <div class="col-md-6">
              <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="subjek" placeholder="Subjek" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="pesan" rows="5" placeholder="Pesan Anda" required></textarea>
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