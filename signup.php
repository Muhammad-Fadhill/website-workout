<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup - Workout Enthusiast</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #000, #2575fc);
      height: 100vh;
    }
    .card {
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }
    .btn-primary {
      background: #000000;
      border: none;
    }
    .btn-primary:hover {
      background: #2575fc;
    }
    .signup-img {
      border-top-left-radius: 15px;
      border-bottom-left-radius: 15px;
      object-fit: cover;
      height: 100%;
    }
  </style>
</head>

<body>
  <div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="row w-100">
      <div class="col-md-6 offset-md-3">
        <div class="card overflow-hidden">
          <div class="row g-0">

            <!-- Gambar -->
            <div class="col-md-5 d-none d-md-block">
              <img src="logo.jpeg" class="img-fluid signup-img" alt="Signup Image">
            </div>

            <!-- Form Signup -->
            <div class="col-md-7">
              <div class="card-body p-4">
                <h3 class="card-title mb-4 text-center">Daftar Akun</h3>

                <!-- FORM TERHUBUNG KE PHP -->
                <form action="register.php" method="POST">

                  <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required>
                  </div>

                  <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Signup</button>
                  </div>

                  <p class="text-center mt-3">
                    Sudah punya akun? <a href="login.html">Login</a>
                  </p>
                </form>

              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
