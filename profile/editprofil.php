<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>TravelKuy - Liburan Biar Santuy</title>
  <!-- Favicon -->
  <link href="../assets/img/brand/fav.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="../assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="../assets/css/argon.css?v=1.1.0" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css-home.css">
</head>
 
<body style="background-color: #E1F5FF">
  <?php include '../navbar/navbar.php' ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12 profile-page">
        <section class="section pb-0">
          <div class="container">
            <div class="card card-profile shadow mt-4">
              <div class="px-4">
                <div class="row justify-content-center">
                  <div class="col-md-auto">
                    <div class="card-profile-image">
                      <a href="#">
                        <img src="../assets/img/theme/profil1.jpg" class="rounded-circle" alt="image" data-toggle="modal" data-target="#modal-notification">
                      </a>
                    </div>
                  </div>
                </div>
                <div class="text-center mb-4" style="margin-top : 150px;">
                  <h3>Adi Saputro Wibowo</h3>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
  
  <div class="container">
    <div class="row">
      <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
          <div class="text-center m-4">
            <h4>Nama Lengkap</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-pill text-center" id="nama" placeholder="name@example.com" value="Adi Saputro Wibowo" >
                        </div>
                    </div>
                </div>
            </form>
            
            <h4>Nomor telepon</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-pill text-center" id="notelp" placeholder="name@example.com" value="081234567890" >
                        </div>
                    </div>
                </div>
            </form>

            <h4>Email</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-pill text-center" id="email" placeholder="name@example.com" value="Adhisaputra11@gmail.com" >
                        </div>
                    </div>
                </div>
            </form>

            <h4>Alamat</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-pill text-center" id="alamat" placeholder="name@example.com" value="Jl. Gunung SLamet XII No.15 Denpasar Barat" >
                        </div>
                    </div>
                </div>
            </form>

            <h4>Jenis Kelamin</h4>
            <div class="form-check">
                <div class="d-inline mr-5">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Laki-laki</label>
                </div>
                <div class="d-inline mr-3">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">Perempuan</label>
                </div>
            </div>

            <button type="button" class="btn btn-warning btn-lg rounded-pill mt-2">edit profil</button>
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <img src="../assets/img/theme/profil1.jpg" alt="image">
      </div>
    </div>
  </div>

  <footer class="footer">
    <div class="container">
      <div class="row row-grid align-items-center mb-5">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="#" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2019 <a href="https://www.creative-tim.com" target="_blank">TravelKuy</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link" target="_blank">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
<script src="../assets/vendor/jquery/jquery.min.js"></script>
<script src="../assets/vendor/popper/popper.min.js"></script>
<script src="../assets/vendor/bootstrap/bootstrap.min.js"></script>

<!-- Theme JS -->
<script src="../sassets/js/argon.min.js"></script>

</body>
</html>