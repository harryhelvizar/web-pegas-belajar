<div class="row">
    <div class="col-12">
        <div class="card">
            <form method="post" action="<?= base_url('admin/gayabelajar/tambah') ?>">

                <div class="form-group">
                    <input type="text" class="form-control" name="nama_gaya_belajar" id="nama_gaya_belajar" placeholder="Nama Gaya Belajar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="karakteristik" id="karakteristik" cols="30" rows="3" placeholder="Karakteristik"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="tipe_kepribadian" id="tipe_kepribadian" cols="30" rows="3" placeholder="Tipe Kepribadian"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="tugas_yg_sesuai" id="tugas_yg_sesuai" cols="30" rows="3" placeholder="Tugas Yang Sesuai"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="kemampuan_adaptif" id="kemampuan_adaptif" cols="30" rows="3" placeholder="Kemampuan Adaptif"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="kekuatan" id="kekuatan" cols="30" rows="3" placeholder="kekuatan"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="kelemahan" id="kelemahan" cols="30" rows="3" placeholder="Kelemahan"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="cara_belajar" id="cara_belajar" cols="30" rows="3" placeholder="Cara Belajar"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="metode_guru" id="metode_guru" cols="30" rows="3" placeholder="Metode Mengajar Guru Yang Sesuai"></textarea>
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

<!-- Button trigger modal -->
<script>
    CKEDITOR.replace('karakteristik');
</script>