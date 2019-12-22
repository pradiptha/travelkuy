<?php

include "../php/config.php";

if (isset($_GET['view'])) {
  $view = $_GET['view'];
} else {
  $view = 'profile';
}

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $sql = "SELECT * FROM user INNER JOIN customer USING(id_user) WHERE id_user='$id'";
  $data = mysqli_fetch_assoc(mysqli_query($conn, $sql));
  $nama_lengkap = $data['nama_customer'];
  $no_telp = $data['telp_customer'];
  $email = $data['email'];
  $alamat = $data['alamat'];
  $jenis_kelamin = $data['jk_customer'];
  $foto_profil = $data['foto_profil'];
} else {
  header("location: ../index.php");
}

?>

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

<body>
  <?php include '../nav/navbar.php' ?>
  <section class="section section-lg section-shaped pb-250">
    <div class="shape shape-style-1 bg-gradient-info shape-default">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
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
                          <img src="/<?= $baseurl ?>/assets/img/profile_user/<?= $foto_profil ?>" class="rounded-circle" alt="image" data-toggle="modal" data-target="#modal-notification">
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="text-center mb-4" style="margin-top : 150px;">
                    <a href="profile.php">
                      <h3><?= $_SESSION['username'] ?></h3>
                    </a>
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
        <?php include 'content.php' ?>
      </div>
    </div>
  </section>



  <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <img style="	max-width: 500px; max-height: 500px;" src="/<?= $baseurl ?>/assets/img/profile_user/<?= $foto_profil ?>" alt="image">
      </div>
    </div>
  </div>

  <?php include '../nav/footer.php' ?>

</body>

</html>