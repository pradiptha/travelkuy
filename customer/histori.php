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
            <h3 class="font-weight-bold">Riwayat Pesanan</h3>
            <div class="dropdown-divider"></div>
          </div>
        </div>
      </main>
    </div>
  </div>

  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <img src="../assets/img/theme/kucing.jpg" alt="image">
      </div>
    </div>
  </div>

  <?php include '../nav/footer.php' ?>

</body>
</html>