<?php include 'proses/koneksi.php'; ?>
<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login Page</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  <script src="assets/vendor/js/helpers.js"></script>
  <script src="assets/js/config.js"></script>
</head>

<body>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <?php
  if (isset($_GET['status']) && $_GET['status'] == "gagal") { ?>

    <script>
      Swal.fire({
        title: "Gagal",
        text: "Email atau Password salah",
        icon: "error"
      }).then((result) => {
        window.location.href = 'register.php';
      });

    </script>

  <?php } else if (isset($_GET['status']) && $_GET['status'] == "nohp_used") { ?>

      <script>
        Swal.fire({
          title: "Gagal",
          text: "No HP telah digunakan",
          icon: "warning"
        }).then((result) => {
          window.location.href = 'register.php';
        });

      </script>

  <?php } else if (isset($_GET['status']) && $_GET['status'] == "email_used") { ?>

        <script>
          Swal.fire({
            title: "Gagal",
            text: "Email telah digunakan",
            icon: "warning"
          }).then((result) => {
            window.location.href = 'register.php';
          });

        </script>

  <?php } else if (isset($_GET['status']) && $_GET['status'] == "pass_notsame") { ?>

          <script>
            Swal.fire({
              title: "Gagal",
              text: "Password tidak sama",
              icon: "warning"
            }).then((result) => {
              window.location.href = 'register.php';
            });

          </script>

  <?php }
  ?>


  <!-- Content -->
  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">

                </span>
                <span class="app-brand-text demo text-body fw-bolder">Register</span>
              </a>
            </div>
            <!-- /Logo -->


            <form id="formRegister" class="mb-3" action="proses/proses_register.php" method="POST">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your Username"
                  autofocus required />
              </div>
              <div class="mb-3">
                <label for="namalengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap"
                  placeholder="Enter your Fullname" autofocus required />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email" autofocus
                  required />
              </div>
              <div class="mb-3">
                <label for="nohp" class="form-label">No HP/Whatsapp</label>
                <input type="number" class="form-control" id="nohp" name="nohp" placeholder="0852 1234 5678" autofocus
                  required />
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password1">Password</label>

                </div>
                <div class="input-group input-group-merge">
                  <input onkeypress="samakan_password()" type="password" id="password1" class="form-control"
                    name="password1"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password1" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>

              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password2">Ulangi Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password2" class="form-control" name="password2"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password2" required />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>


              <div class="mb-3">
                <button type="submit" class="btn btn-primary d-grid w-100">Register</button>
              </div>
            </form>



            <p class="text-center">
              <span>Sudah punya akun?</span>
              <a href="login.php">
                <span>Login sekarang</span>
              </a>
            </p>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->



  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/dashboards-analytics.js"></script>
</body>

</html>