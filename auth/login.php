<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=" d-flex justify-content-center align-items-center mt-5" style="height: 100vh;">
  <div class="cardd shadow-lg p-4 border border-primary rounded-3" style="max-width: 400px; width: 100%;">
    <h1 class="text-center text-primary mb-4 fw-bold">Login</h1>
    <form>
      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
      </div>
      <div class="custom-control custom-checkbox small">
        <input type="checkbox" class="custom-control-input" id="customCheck">
        <label class="custom-control-label" for="customCheck">Remember Me</label>
      </div>
      <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
    </form>
    <div class="text-center mt-4">
      <p>Don't have an account? <a href="/pages/regis" class="text-primary text-decoration-none">Register here</a></p>
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