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
            <div class="modal-body">
                <div class="row">
                    <div class="card-body">
                        <div class="tab-content">
                            <form class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Nama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Telp</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" id="inputExperience" placeholder="Telp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Foto KTP</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal tambah hotel -->
<div class="modal fade" id="tambahhotel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hotel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="card-body">
                        <div class="tab-content">
                            <form action="adminhotel.php?act=tambah_hotel" method="POST" class="form-horizontal">
                                <div class="form-group row">
                                    <label for="inputName" class="col-sm-2 col-form-label">Nama Hotel</label>
                                    <div class="col-sm-10">
                                        <input name="nama_hotel" type="text" class="form-control" id="inputName" placeholder="Nama" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea type="email" class="form-control" id="inputEmail" placeholder="Deskripsi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Jumlah Kamar</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputExperience" placeholder="Jumlah kamar" min="1">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Biaya/kamar</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputExperience" placeholder="Biaya">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputName2" class="col-sm-2 col-form-label">Foto</label>
                                    <div class="col-sm-10 custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
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
                                        <select class="form-control" id="provinsi" name="provinsi" required onchange="kategoriKabupaten()">
                                            <?php foreach ($data_provinsi as $provinsi => $value) : ?>
                                                <option value="<?= $provinsi ?>"><?= $provinsi ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputExperience" class="col-sm-2 col-form-label">Kabupaten/Kota</label>
                                    <div class="col-sm-10">
                                        <select id="kabupaten" class="form-control">
                                            <option>option 1</option>
                                            <option>option 2</option>
                                            <option>option 3</option>
                                            <option>option 4</option>
                                            <option>option 5</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<script>
    function kategoriKabupaten() {
        var id_provinsi = $('#provinsi').val()
        // enter(event);
        if (id_provinsi != null) {
            $('#kabupaten').html('<option value="" disabled selected>Loading...</option>')
            $.post("/travelkuy/php/provinsikota.php", {
                    option_value: id_provinsi
                },
                function(data) {
                    console.log(data)
                    $('#kabupaten').html('<option value="'+data+'" disabled selected>'+data+'</option>')
                }
            )
        }
    }
</script>