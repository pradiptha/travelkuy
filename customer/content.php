<?php if ($view == 'profile') : ?>
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="m-4">
                <h3 class="font-weight-bold d-inline-block">Profile</h3>
                <a href="profile.php?view=edit_profile" class="btn btn-neutral pull-right text-capitalize">Edit Profile</a>
                <div class="dropdown-divider "></div>
                <div class="text-center">
                    <h4>Nama Lengkap</h4>
                    <h5 class="font-weight-light text-capitalize"><?= $nama_lengkap ?></h5>
                    <h4>Nomor telepon</h4>
                    <h5 class="font-weight-light"><?php echo ($no_telp != '' ? $no_telp : 'Empty'); ?></h5>
                    <h4>Email</h4>
                    <h5 class="font-weight-light"><?= $email ?></h5>
                    <h4>Alamat</h4>
                    <h5 class="font-weight-light"><?php echo ($alamat != '' ? $alamat : 'Empty'); ?></h5>
                    <h4>Jenis Kelamin</h4>
                    <h5 class="font-weight-light"><?php echo ($jenis_kelamin != '' ? $jenis_kelamin : 'Empty'); ?></h5>
                </div>
            </div>
        </div>
    </main>
<?php elseif ($view == 'edit_profile') : ?>

    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Edit Profile</h3>
                <div class="dropdown-divider"></div>
                <form class="col-lg-6 col-sm-12 mx-auto" method="post" action="/travelkuy/php/customer.php?act=edit_profile">

                    <div class="form-group">
                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Full Name" name="user_full_name" id="user_full_name" value="<?= $nama_lengkap ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-mobile-button"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Phone Number" name="user_phone" id="user_phone" value="<?= $no_telp ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-map-big"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Address" name="user_address" id="user_address" value="<?= $alamat ?>" required>
                        </div>
                    </div>
                    <div class="text-left">
                        <!-- Radio buttons -->
                        <div class="mb-2">
                            <small class="text-uppercase font-weight-bold">Jenis Kelamin</small>
                        </div>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <div class="custom-control custom-radio mb-3">
                                    <input name="jenis_kelamin" class="custom-control-input" id="customRadio1" type="radio" value="Laki-laki" <?= ($jenis_kelamin == "laki-laki" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="customRadio1"><span>Laki-laki</span></label>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="custom-control custom-radio mb-3">
                                    <input name="jenis_kelamin" class="custom-control-input" id="customRadio2" type="radio" value="Perempuan" <?= ($jenis_kelamin == "perempuan" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="customRadio2"><span>Perempuan</span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-primary">edit profil</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php elseif ($view == 'history') : ?>
    <?php
    $orders = queryMultiple("SELECT * FROM checkout WHERE id_customer = '$id'");
    ?>
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Riwayat Pesanan</h3>
                <div class="dropdown-divider"></div>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
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
                                <td><a href="paket.php?id=<?= $order['id_paket'] ?>"><?= $order['id_paket'] ?></a></td>
                                <td><?= $order['qty_paket'] ?></td>
                                <td><?= $order['total_harga_paket'] ?></td>
                                <td><?= $order['waktu_brngkt'] ?></td>
                                <td><?= $order['waktu_transaksi'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php elseif ($view == 'edit_email') : ?>
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Edit Email</h3>
                <div class="dropdown-divider"></div>
                <form class="col-lg-6 col-sm-12 mx-auto" method="post" action="/travelkuy/php/customer.php?act=edit_email">

                    <?php
                    if (isset($_SESSION['error'])) {
                        if ($_SESSION['error'] == 0) {
                            echo '<div class="alert alert-success">' . $_SESSION['error_data'] . ' !</div>';
                        } elseif ($_SESSION['error'] == 1) {
                            echo '<div class="alert alert-danger">' . $_SESSION['error_data'] . ' !</div>';
                        }
                    }
                    unset($_SESSION['error']);
                    unset($_SESSION['error_data']);

                    ?>

                    <div class="form-group">
                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="masukkan email baru" name="email" id="email" value="<?= $email ?>" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="button" name="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#edit_confirm">edit email</button>
                    </div>
                    <div class="modal fade" id="edit_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body font-weight-bold">
                                    Apakah anda yakin akan mengubah Email?
                                </div>
                                <div class="modal-footer">
                                    <a href="" data-dismiss="modal" class="text-danger note-style">Batalkan</a>
                                    <button type="submit" name="submit" class="btn btn-success">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Modal Edit Email -->
<?php elseif ($view == 'edit_password') : ?>
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Edit Password</h3>
                <div class="dropdown-divider"></div>
                <form class="col-lg-6 col-sm-12 mx-auto" method="post" action="/travelkuy/php/customer.php?act=edit_password">
                    <div id="error">
                        <?php
                        if (isset($_SESSION['error'])) {
                            if ($_SESSION['error'] == 0) {
                                echo '<div class="alert alert-success">' . $_SESSION['error_data'] . ' !</div>';
                            } elseif ($_SESSION['error'] == 1) {
                                echo '<div class="alert alert-danger">' . $_SESSION['error_data'] . ' !</div>';
                            }
                        }
                        unset($_SESSION['error']);
                        unset($_SESSION['error_data']);

                        ?>
                    </div>

                    <div class="form-group">
                        <div class="input-group mb-3 mt-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="New Password" name="new_password" id="new_password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Old Password" name="old_password" id="old_password" required>
                        </div>
                    </div>

                    <div class="form-group text-center">
                        <button type="button" name="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#edit_confirm">edit password</button>
                    </div>

                    <div class="modal fade" id="edit_confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Peringatan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body font-weight-bold">
                                    Apakah anda yakin akan mengubah Password?
                                </div>
                                <div class="modal-footer">
                                    <a href="" data-dismiss="modal" class="text-danger note-style">Batalkan</a>
                                    <button type="submit" name="submit" class="btn btn-success">Ya</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Modal Edit Password -->
<?php endif ?>