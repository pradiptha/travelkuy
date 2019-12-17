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
                                    <input name="jenis_kelamin" class="custom-control-input" id="customRadio1" type="radio" value="Laki-laki" <?= ($jenis_kelamin == "Laki-laki" ? 'checked' : ''); ?>>
                                    <label class="custom-control-label" for="customRadio1"><span>Laki-laki</span></label>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="custom-control custom-radio mb-3">
                                    <input name="jenis_kelamin" class="custom-control-input" id="customRadio2" type="radio" value="Perempuan" <?= ($jenis_kelamin == "Perempuan" ? 'checked' : ''); ?>>
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
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Riwayat Pesanan</h3>
                <div class="dropdown-divider"></div>
            </div>
        </div>
    </main>
<?php elseif ($view == 'edit_email') : ?>
    <main class="col-md-12 profile-page">
        <div class="card m-3 shadow">
            <div class="text-center m-4">
                <h3 class="font-weight-bold">Ubah Email</h3>
                <div class="dropdown-divider"></div>
                <h4>New Email</h4>
                <form>
                    <div class="row  justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-pill text-center" id="nama" placeholder="masukkan email baru">
                            </div>
                        </div>
                    </div>
                </form>

                <h4>Password</h4>
                <form>
                    <div class="row  justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control rounded-pill text-center" id="notelp" placeholder="masukkan password anda saat ini">
                            </div>
                        </div>
                    </div>
                </form>

                <button type="button" class="btn btn-danger btn-lg rounded-pill mt-2" data-toggle="modal" data-target="#exampleModal">submit</button>
            </div>
        </div>
    </main>
    <!-- Modal Edit Email -->
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
                    Apakah anda yakin akan mengubah Email?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                    <button type="button" class="btn btn-success">Ya</button>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($view == 'edit_password') : ?>
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
                                <input type="password" class="form-control rounded-pill text-center" id="nama" placeholder="masukkan password baru">
                            </div>
                        </div>
                    </div>
                </form>

                <h4>Re-type Password</h4>
                <form>
                    <div class="row  justify-content-center">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" class="form-control rounded-pill text-center" id="notelp" placeholder="masukkan ulang password">
                            </div>
                        </div>
                    </div>
                </form>

                <button type="button" class="btn btn-danger btn-lg rounded-pill mt-2" data-toggle="modal" data-target="#exampleModal">submit</button>
            </div>
        </div>
    </main>
    <!-- Modal Edit Password -->
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
<?php endif ?>