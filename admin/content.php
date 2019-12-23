<?php if ($view == 'Dashboard') : ?>
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
              <h3>150</h3>

              <p>Detail Orders</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>
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
          <div class="small-box bg-warning">
            <div class="inner">
              <h3>44</h3>
              <p>Custom Package</p>
            </div>
            <div class="icon">
              <i class="fas fa-cubes"></i>
            </div>
            <a href="../admin/custom_package.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-8">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>44</h3>
              <p>Destination</p>
            </div>
            <div class="icon">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <a href="../admin/destination.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
<?php endif ?>