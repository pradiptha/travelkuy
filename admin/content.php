<?php if ($view == 'Dashboard') : ?>
  <?php

  $partner_hotel = queryFetch("SELECT count(id_ph) as jumlah FROM partner_hotel");
  $default_package = queryFetch("SELECT COUNT(id_mpaket) as jumlah FROM paket_master");
  $destinasi = queryFetch("SELECT COUNT(id_destinasi) as jumlah FROM destinasi");
  $checkout = queryFetch("SELECT COUNT(id_checkout) as jumlah FROM checkout");

  ?>
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <!-- <section class="content"> -->
  <section>
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?= $checkout['jumlah'] ?></h3>
              <p>Order</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?= $partner_hotel['jumlah'] ?></h3>
              <p>Partner Hotel</p>
            </div>
            <div class="icon">
              <i class="ion fa-box"></i>
            </div>
            <a href="../admin/index.php?view=validasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?= $default_package['jumlah'] ?></h3>
              <p>Default Package</p>
            </div>
            <div class="icon">
              <i class="fas fa-box"></i>
            </div>
            <a href="../admin/default_package.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?= $destinasi['jumlah'] ?></h3>
              <p>Destination</p>
            </div>
            <div class="icon">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <a href="../admin/index.php?view=destinasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
<?php elseif ($view == 'slideshow') : ?>
  <?php

  $sql = "SELECT * FROM master_slideshow";
  $slideshows = queryMultiple($sql);

  ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Slideshow</li>
          </ol>
        </div>
        <div class="col-sm-6 ">
          <button type="button" class="btn btn-primary float-sm-right btn-sm" data-toggle="modal" data-target="#modaltambah">Tambah</button>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="width: 40%">URL Foto</th>
                  <th style="width: 40%">Link</th>
                  <th style="width: 5%" class="text-center">Status</th>
                  <th style="width: 15%">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($slideshows as $slideshow) : ?>
                  <tr>
                    <td><?= $slideshow['foto'] ?></td>
                    <td><?= $slideshow['link'] ?></td>
                    <td class="project-state">
                      <div class="dropdown">
                        <?php if ($slideshow['status'] == 0) : ?>
                          <a href="/<?= $baseurl ?>/php/admin.php?act=ganti_status_slideshow&id=<?= $slideshow['id_slideshow'] ?>&s=1" class="badge badge-danger">Not Active</a>
                        <?php elseif ($slideshow['status'] == 1) : ?>
                          <a href="/<?= $baseurl ?>/php/admin.php?act=ganti_status_slideshow&id=<?= $slideshow['id_slideshow'] ?>&s=0" class="badge badge-success">Active</a>
                        <?php endif ?>
                      </div>
                    </td>
                    <td>
                      <div>
                        <div>
                          <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                          </a>
                          <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaldelete">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                          </button>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
<?php elseif ($view == "validasi") : ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Validasi Partner Hotel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Validasi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama Partner</th>
                  <th>Berkas</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "select * from partner_hotel";
                $result = queryMultiple($sql);
                // var_dump($result);
                // $partner_hotel = mysqli_query($conn,"select * from partner_hotel");
                $i = -1;
                foreach ($result as $row) {
                  echo "<tr>
                     <td>" . $row['nama_ph'] . "</td>" ?>
                  <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalberkas">
                      Lihat Berkas
                    </button>
                  </td>
                  <?php if ($row['status'] == 1) { ?>
                    <td>
                      <a href="/<?= $baseurl ?>/php/admin.php?act=ganti_status_ph&<?php echo "id_ph=" . $row['id_ph'] . "&status=" . $row['status']; ?>">
                        <button type="button" class="btn  btn-primary">Active</button>
                      </a>
                    </td>
                  <?php } else {
                  ?>
                    <td>
                      <a href="/<?= $baseurl ?>/php/admin.php?act=ganti_status_ph&<?php echo "id_ph=" . $row['id_ph'] . "&status=" . $row['status']; ?>">
                        <button type="button" class="btn  btn-danger">Tidak Active</button>
                      </a>
                    </td>
                    </tr>
                <?php
                  }
                  $i++;
                }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama Partner</th>
                  <th>Berkas</th>
                  <th>Status</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

<?php elseif ($view == 'destinasi') : ?>
  <?php
  $sql_provinsi = "SELECT * FROM provinces";
  $data_provinsi = queryMultiple($sql_provinsi);
  ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Destinasi Wisata</h1>
        </div>
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Konfigurasi destinasi Wisata oleh admin</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama Destinasi</th>
                  <th>Provinsi Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Durasi Destinasi</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "select destinasi.*, provinces.name from destinasi INNER JOIN provinces ON destinasi.id_provinsi = provinces.id";
                $result = queryMultiple($sql);
                foreach ($result as $row) {
                  echo "<tr>
                     <td>" . $row['nama_destinasi'] . "</td>
                     <td>" . $row['name'] . "</td>
                     <td>" . $row['alamat_destinasi'] . "</td>
                     <td>" . $row['durasi'] . " jam</td>"
                ?>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaledit<?= $row['id_mpaket'] ?>">
                        Edit Data
                      </button>
                    </a>
                    <a href="/<?= $baseurl ?>/php/edestinasi.php?act=hapus&id=<?= $row['id_destinasi'] ?>">
                      <button type="button" class="btn btn-danger">
                        hapus
                      </button>
                    </a>
                  </td>
                <?php
                }

                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama Destinasi</th>
                  <th>Provinsi Destinasi</th>
                  <th>Alamat Destinasi</th>
                  <th>Durasi Destinasi</th>
                  <th> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambahdestinasi">Tambah Data</button> </th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
<?php elseif ($view == 'paket') : ?>
  <?php

  $sql_provinsi = "SELECT * FROM provinces";
  $data_provinsi = queryMultiple($sql_provinsi);

  ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Paket Master</h1>
        </div>
        <div class="col-sm-6">
          <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol> -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Konfigurasi paket default oleh admin</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama Paket</th>
                  <th>Provinsi Paket</th>
                  <th>Harga Paket</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sql = "select paket_master.*, provinces.name from paket_master INNER JOIN provinces ON paket_master.id_provinsi = provinces.id";
                $result = queryMultiple($sql);
                foreach ($result as $row) {
                  echo "<tr>
                     <td>" . $row['nama_mpaket'] . "</td>
                     <td>" . $row['name'] . "</td>
                     <td>" . $row['biaya_mpaket'] . "</td>"
                ?>
                  <td>
                    <a href="#">
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modaleditpaketmaster<?= $row['id_mpaket'] ?>">
                        Edit Data
                      </button>
                    </a>
                    <a href="/<?= $baseurl ?>/php/mpaket.php?act=hapus&id=<?= $row['id_mpaket'] ?>">
                      <button type="button" class="btn btn-danger">
                        hapus
                      </button>
                    </a>
                  </td>
                <?php
                }

                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama Paket</th>
                  <th>Provinsi Paket</th>
                  <th>Harga Paket</th>
                  <th> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambahpaketmaster">Tambah Data</button> </th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
<?php elseif ($view == 'orders') : ?>
  <?php

  $orders = queryMultiple("SELECT * FROM checkout");
  ?>
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Orders</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Id Customer</th>
                  <th>Id Paket</th>
                  <th>Jumlah</th>
                  <th>Total Harga</th>
                  <th>Waktu Berangkat</th>
                  <th>Waktu Transaksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($orders as $order) : ?>
                  <tr>
                    <td><?= $order['id_customer'] ?></td>
                    <td><?= $order['id_paket'] ?></td>
                    <td><?= $order['qty_paket'] ?></td>
                    <td><?= $order['total_harga_paket'] ?></td>
                    <td><?= $order['waktu_brngkt'] ?></td>
                    <td><?= $order['waktu_transaksi'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
<?php endif ?>