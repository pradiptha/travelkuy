<?php if ($view == 'Dashboard') : ?>
    <!-- Small boxes (Stat box) -->
    <?php

    $sql = "SELECT count(*) as jumlah_hotel, sum(jumlah_kamar) as total_kamar  FROM hotel WHERE id_ph = '$id_ph'";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if ($view == 'hotel') : ?>
                        <?php if (isset($_GET['id'])) {
                            $id_hotel = $_GET['id'];
                            $sql = "SELECT * FROM hotel where id_hotel = $id_hotel";
                            $data_hotel = mysqli_fetch_assoc(mysqli_query($conn, $sql));
                            $nama = $data_hotel['nama_hotel'];
                        } ?>
                        <h1 class="m-0 text-dark text-capitalize"><?= $data_hotel['nama_hotel'] ?></h1>
                    <?php else : ?>
                        <h1 class="m-0 text-dark text-capitalize"><?= $view ?></h1>
                    <?php endif ?>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"><?= $view ?></a></li>
                        <li class="breadcrumb-item active"><?= $nama ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $result['jumlah_hotel'] ?></h3>

                            <p>Total Hotels</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <a href="" type="button" class="small-box-footer" data-toggle="modal" data-target="#tambahhotel">Add hotels
                            <i class="fas fa-plus-circle"></i>
                        </a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>67</h3>

                            <p>Total Booking Rooms</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <a href="totalbookingrooms.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $result['total_kamar'] ?></h3>

                            <p>Total Available Rooms</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <a href="/<?= $baseurl ?>/adminhotel/index.php?view=availableroom" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
<?php elseif ($view == 'hotel') : ?>
    <?php
    $id_hotel = $_GET['id'];
    $query = "SELECT * FROM hotel WHERE id_hotel = '$id_hotel'";
    $hotel = queryFetch($query);
    $query1 = "SELECT * FROM foto_hotel WHERE id_hotel = '$id_hotel'";
    $foto = queryMultiple($query1);
    $query2 = "SELECT p.name as provinsi, k.name as kota from hotel INNER JOIN provinces p ON hotel.provinsi = p.id INNER JOIN regencies k ON hotel.kota = k.id";
    $lokasi = queryFetch($query2);
    // var_dump($foto);
    ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <?php if ($view == 'hotel') : ?>
                        <?php if (isset($_GET['id'])) {
                            $nama = $hotel['nama_hotel'];
                        } ?>
                        <h1 class="m-0 text-dark text-capitalize"><?= $hotel['nama_hotel'] ?></h1>
                    <?php else : ?>
                        <h1 class="m-0 text-dark text-capitalize"><?= $view ?></h1>
                    <?php endif ?>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary float-sm-right" data-toggle="modal" data-target="#edithotel">
                        edit
                    </button>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-12" style="max-height: 200px">
                        <?php if (sizeof($foto) > 0) : ?>
                            <img src="/<?= $baseurl ?>/assets/img/hotel/<?= $foto[0]['foto_hotel'] ?>" class="card-img rounded h-100" alt="..." style="height: 100%; width: 100%; object-fit: contain">
                        <?php else : ?>
                            <img src="/<?= $baseurl ?>/assets/img/hotel/nophotohotel.jpg" class="card-img rounded" alt="..." style="height: 100%; width: 100%; object-fit: contain">
                        <?php endif ?>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="card-body">
                            <!-- <h5 class="card-title"></h5> -->
                            <p class="card-text"><strong>Deskripsi:<br></strong><?= $hotel['deskripsi_hotel'] ?></p>
                            <p class="card-text"><strong>Lokasi:<br></strong> <?= ucwords(strtolower($lokasi['kota'])) ?> , <?= ucwords(strtolower($lokasi['provinsi'])) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?= $hotel['jumlah_kamar'] ?></h3>

                            <p>Total Rooms</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-key"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>16</h3>

                            <p>Booking Rooms</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <a href="booking.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>

                            <p>Available Rooms</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-thumbs-up"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
    </section>
<?php elseif ($view == 'availableroom') : ?>
    <?php
    $sql = "SELECT * FROM hotel";
    $hotels = queryMultiple($sql);

    ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Available Room</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">The Royal Satrian</a></li>
                        <li class="breadcrumb-item active">Booking Rooms</li>
                    </ol>
                </div><!-- /.col -->

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Hotel</th>
                                    <th>Jumlah Kamar Tersedia</th>
                                </tr>
                            </thead>
                            <?php foreach ($hotels as $hotel) : ?>
                                <tbody>
                                    <tr>
                                        <td><?= $hotel['nama_hotel'] ?></td>
                                        <td><?= $hotel['jumlah_kamar'] ?></td>
                                    </tr>
                                </tbody>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
<?php endif ?>