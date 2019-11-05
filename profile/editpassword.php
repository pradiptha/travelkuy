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
        <div class="card m-3 shadow">
          <div class="text-center m-4">
            <h3 class="font-weight-bold">Ubah Password</h3>
            <div class="dropdown-divider"></div>
            <h4>New Password</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control rounded-pill text-center" id="nama" placeholder="masukkan password baru" >
                        </div>
                    </div>
                </div>
            </form>
            
            <h4>Re-type Password</h4>
            <form>
                <div class="row  justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="password" class="form-control rounded-pill text-center" id="notelp" placeholder="masukkan ulang password" >
                        </div>
                    </div>
                </div>
            </form>

            <button type="button" class="btn btn-danger btn-lg rounded-pill mt-2" data-toggle="modal" data-target="#exampleModal">submit</button>
          </div>
        </div>
      </main>
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
                Apakah anda yakin akan mengubah password?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                <button type="button" class="btn btn-success">Ya</button>
            </div>
            </div>
        </div>
    </div>


    <?php include '../navbar/footer.php' ?>

</body>
</html>