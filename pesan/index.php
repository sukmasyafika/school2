<?= $this->extend('layoutAdmin/index'); ?>

<?= $this->section('admin-content'); ?>
<div class="container-fluid">
  <h1 class="h3 mb-4 text-gray-800 fw-bold">Pesan Masuk</h1>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Pesan</h6>
    </div>
    <div class="card-body">
      <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif; ?>
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="text-center align-middle table-primary">
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Subjek</th>
            <th>Pesan</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($pesan as $p): ?>
            <tr class="text-center align-middle">
              <td><?= $no++ ?></td>
              <td><?= esc($p['nama']); ?></td>
              <td><?= esc($p['email']); ?></td>
              <td><?= esc($p['subjek']); ?></td>
              <td><?= esc($p['pesan']); ?></td>
              <td>
                <form action="<?= base_url('/pesan/' . $p['id']); ?>" method="post" class="d-inline">
                  <?= csrf_field(); ?>
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apa Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>