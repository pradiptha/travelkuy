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
<!-- modal delete -->