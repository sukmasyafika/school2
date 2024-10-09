<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section id="ekskul" class="py-5 mt-5">
  <div class="container">
    <div class="mb-5 text-center">
      <h2 class="display-4 pb-3 fw-semibold"> <span class="text-info">Galery</span></h2>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto 1">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto 2">
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Foto 3">
        </div>
      </div>

      <!-- Video 1 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <!-- Video 2 -->
      <div class="col">
        <div class="card h-100">
          <div class="ratio ratio-16x9">
            <iframe src="https://www.youtube.com/embed/VIDEO_ID" title="YouTube video" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>