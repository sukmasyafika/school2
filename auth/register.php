<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid d-flex justify-content-center align-items-center mt-5 pt-5">
  <div class="cardd shadow-lg p-4 border border-primary rounded-3" style="max-width: 600px; width: 100%;">
    <h1 class="text-center text-primary mb-4 fw-bold">Register</h1>
    <form>
      <div class="form-group row">
        <div class="col-sm-6 mb-3">
          <label for="name" class="form-label">First Name</label>
          <input type="text" class="form-control" id="name" placeholder="First name" required>
        </div>
        <div class="col-sm-6 mb-3">
          <label for="name" class="form-label">Last Name</label>
          <input type="text" class="form-control" id="name" placeholder="Last name" required>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>
      <div class="form-group row">
        <div class="col-sm-6 mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>
        <div class="col-sm-6 mb-3">
          <label for="confirm-password" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
      </div>
    </form>
    <div class="text-center mt-4">
      <p>Already have an account? <a href="/pages/login" class="text-primary text-decoration-none">Login here</a></p>
    </div>
    <div class="text-center mt-4">
      <p>Follow us on</p>
      <a href="#" class="social-iconn" title="Instagram">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="#" class="social-iconn" title="Facebook">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="#" class="social-iconn" title="Twitter">
        <i class="bi bi-twitter"></i>
      </a>
      <a href="#" class="social-iconn" title="GitHub">
        <i class="bi bi-github"></i>
      </a>
    </div>

  </div>
</div>

<?= $this->endSection(); ?>