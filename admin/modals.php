<!-- modal tambah -->
<div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Slideshow</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/<?= $baseurl ?>/php/admin.php?act=tambah_slideshow" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group mb-6">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-6">
                        <input name="link" type="text" class="form-control" placeholder="Link">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-link"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal tambah -->
<!-- modal delete -->
<div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <p>Do you really want to delete these picture?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancel</button>
                <a href="/<?= $baseurl ?>/php/admin.php?act=hapus_slideshow&id=<?= $slideshow['id_slideshow'] ?>" type="button" class="btn btn-danger text-white">Delete</a>
            </div>
        </div>
    </div>
</div>
<!-- modal berkas -->
<div class="modal fade" id="modalberkas">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Berkas Dilampirkan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Partner Hotel: <?= $row['nama_ph']; ?></p>
                <img class="img-fluid pad" src="/travelkuy/assets/img/partner_hotel/<?= $result[$i]['foto_ktp_ph'] ?>" alt="">
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal tambah destinasi -->
<div class="modal fade" id="modaltambahdestinasi">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Destinasi Wisata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/edestinasi.php?act=tambah" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Tempat Wisata</label>
                        <input type="text" name="nama_destinasi" class="form-control" placeholder="Nama Destinasi Wisata">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Destinasi"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Alamat Wisata</label>
                        <input type="text" name="alamat_destinasi" class="form-control" placeholder="Alamat Destinasi Wisata">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Destinasi</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto[]" multiple="multiple" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Provinsi</label>
                        <select class="form-control" data-id="provinsi" name="provinsi">
                            <option value="#" selected>Pilih Provinsi</option>
                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" id="harga_destinasi" name="harga_destinasi" class="form-control" placeholder="Harga Destinasi Wisata">
                    </div>
                    <div class="form-group">
                        <label>Waktu</label>
                        <input type="number" id="waktu_destinasi" name="waktu_destinasi" class="form-control" placeholder="Waktu Destinasi">
                    </div>
                    <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Tambah data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal edit destinasi -->
<div class="modal fade" id="modaledit<?= $row['id_mpaket'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Paket Master></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/mpaket.php?act=edit&id=<?= $row['id_mpaket'] ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" id="nama_paket" name="nama_paket" class="form-control" value="<?= $row['nama_mpaket'] ?>" placeholder="Nama Paket">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Paket"><?= $row['deskripsim'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Paket</label>
                        <img src="/<?= $baseurl ?>/assets/img/masterpaket/<?= $row['foto_mpaket'] ?>" alt="">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pilih Provinsi</label>
                        <select class="form-control" data-id="provinsi" name="provinsi">
                            <option value="<? $row['id_provinsi'] ?>" selected><?= $row['name'] ?></option>
                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tambah Tempat Wisata</label>
                        <select class="selectpicker form-control" multiple="multiple" name="wisata[]" data-id="wisata" multiple data-live-search="true" required>
                            <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" id="harga_paket" name="harga_paket" class="form-control" placeholder="Harga Paket" value="<?= $row['biaya_mpaket'] ?>">
                    </div>
                    <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Edit data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal tambah paket master  -->
<div class="modal fade" id="modaltambahpaketmaster">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Paket Master</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/mpaket.php?act=tambah" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" id="nama_paket" name="nama_paket" class="form-control" placeholder="Nama Paket">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Paket"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Paket</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Pilih Provinsi</label>
                        <select class="form-control" data-id="provinsi" name="provinsi">
                            <option value="#" selected>Pilih Provinsi</option>
                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div id="t_tempat">
                        <div class="form-group">
                            <label>Tambah Tempat Wisata</label>
                            <select class="form-control" name="wisata" id="wisata" required>
                                <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
                            </select>
                        </div>
                        <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button>
                    </div>
                    <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Tambah data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- modal edit paket master -->
<div class="modal fade" id="modaleditpaketmaster<?= $row['id_mpaket'] ?>">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Paket Master></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="/<?= $baseurl ?>/php/mpaket.php?act=edit&id=<?= $row['id_mpaket'] ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" id="nama_paket" name="nama_paket" class="form-control" value="<?= $row['nama_mpaket'] ?>" placeholder="Nama Paket">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" rows="3" placeholder="Deskripsi Paket"><?= $row['deskripsim'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Foto Paket</label>
                        <img src="travelkuy/assets/img/masterpaket/<?= $row['foto_mpaket'] ?>" alt="">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="foto" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Pilih Provinsi</label>
                        <select class="form-control" data-id="provinsi" name="provinsi">
                            <option value="<? $row['id_provinsi'] ?>" selected><?= $row['name'] ?></option>
                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tambah Tempat Wisata</label>
                        <select class="selectpicker form-control" multiple="multiple" name="wisata[]" data-id="wisata" multiple data-live-search="true" required>
                            <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" id="harga_paket" name="harga_paket" class="form-control" placeholder="Harga Paket" value="<?= $row['biaya_mpaket'] ?>">
                    </div>
                    <!-- <button type="button" class="btn btn-default" onclick="tambah()">Tambah</button> -->
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="Submit" class="btn btn-primary">Edit data</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>