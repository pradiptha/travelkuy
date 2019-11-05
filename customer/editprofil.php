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
  <?php include '../nav/navbar.php' ?>
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
            <h3 class="font-weight-bold">Edit Profile</h3>
            <div class="dropdown-divider"></div>
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

            <button type="button" class="btn btn-warning btn-lg rounded-pill mt-2" data-toggle="modal" data-target="#exampleModal">edit profil</button>
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

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin akan mengubah data profile?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-success">Ya</button>
            </div>
            </div>
        </div>
    </div>

    <?php include '../nav/footer.php' ?>

</body>
</html>