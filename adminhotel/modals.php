<!-- modal edit profil-->
<div class="modal fade" id="editprofil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/<?= $baseurl ?>/php/adminhotel.php?act=edit_profile" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input value="<?= $data['nama_ph'] ?>" name="nama_ph" type="deskripsi" class="form-control" id="inputName" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                        <input value="<?= $data['telp_ph'] ?>" name="telp_ph" class="form-control" id="inputExperience" placeholder="Telp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Foto Identias</label>
                                    <div class="col-sm-10 custom-file">
                                        <input name="foto_ktp_ph" text="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label mx-2" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- modal tambah hotel -->
<div class="modal fade" id="tambahhotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" enctype="multipart/form-data">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/<?= $baseurl ?>/php/adminhotel.php?act=tambah_hotel" method="POST" class="form-horizontal">
                <div class="modal-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-10">
                                        <input name="nama_hotel" type="text" class="form-control" id="inputName" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi" type="deskripsi" class="form-control" id="inputdeskripsi" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKamar" class="col-sm-2 col-form-label">Jumlah Kamar</label>
                                    <div class="col-sm-10">
                                        <input name="jumlah_kamar" type="number" class="form-control" id="inputKamar" placeholder="Jumlah kamar" min="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Biaya/kamar</label>
                                    <div class="col-sm-10">
                                        <input name="biaya_hotel" type="number" class="form-control" id="inputExperience" placeholder="Biaya">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10 custom-file">
                                        <input name="foto" text="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label mx-2" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Lokasi</label>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="provinsi" name="provinsi" required>
                                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                                <option value="<?= $provinsi['id'] ?>"><?= $provinsi['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kota" id="kota" required>
                                            <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Edit Hotel -->
<div class="modal fade" id="edithotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/<?= $baseurl ?>/php/adminhotel.php?act=edit_hotel&id=<?= $hotel['id_hotel'] ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="card-body">
                            <div class="tab-content">
                                <input type="hidden" id="gambar_lama" name="gambar_lama" value="<?= $foto['foto_hotel'] ?>">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-10">
                                        <input value="<?= $hotel['nama_hotel'] ?>" name="nama_hotel" type="text" class="form-control" id="inputName" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputdeskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="deskripsi" type="deskripsi" class="form-control" id="inputdeskripsi" placeholder="Deskripsi"><?= $hotel['deskripsi_hotel'] ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputKamar" class="col-sm-2 col-form-label">Jumlah Kamar</label>
                                    <div class="col-sm-10">
                                        <input value="<?= $hotel['jumlah_kamar'] ?>" name="jumlah_kamar" type="number" class="form-control" id="inputKamar" placeholder="Jumlah kamar" min="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Biaya/kamar</label>
                                    <div class="col-sm-10">
                                        <input value="<?= $hotel['biaya_hotel'] ?>" name="biaya_hotel" type="number" class="form-control" id="inputExperience" placeholder="Biaya">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10 custom-file">
                                        <input name="foto" text="foto" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label mx-2" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <?php //var_dump($foto) 
                                ?>
                                <?php foreach ($foto as $foto_hotel) : ?>
                                    <img src="../assets/img/hotel/<?= $foto_hotel['foto_hotel'] ?>" alt="" style="height: 100%; width: 100%; object-fit: contain">
                                <?php endforeach ?>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Lokasi</label>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Provinsi</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="provinsiEdit" name="provinsi" required>
                                            <?php foreach ($data_provinsi as $provinsi) : ?>
                                                <option value="<?= $provinsi['id'] ?>" <?= ($hotel['provinsi'] == $provinsi['id'] ? 'selected' : ''); ?>><?= $provinsi['name'] ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="kota" id="kotaEdit" required>
                                            <!-- hasil data dari cari_kota.php akan ditampilkan disini -->
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/<?= $baseurl ?>/php/adminhotel.php?act=hapus_hotel&id=<?= $hotel['id_hotel'] ?>" class="btn btn-danger">Delete Hotel</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="gagaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog bg-gradient-warning" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Akun belum aktif</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <h4>Mohon maaf anda belum bisa menambah hotel, akun anda belum aktif</h4>
                <h5>Aktifkan dengan mengupload foto identias anda di menu edit profile</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>