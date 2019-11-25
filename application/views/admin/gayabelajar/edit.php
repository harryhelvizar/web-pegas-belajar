<div class="row">
    <div class="col-12">
        <div class="card">
            <?php foreach ($gaya as $gaya_belajar) : ?>
                <form method="post" action="<?= base_url('admin/gayabelajar/update/')?>">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_gaya_belajar" id="id_gaya_belajar" value="<?= $gaya_belajar->id_gaya_belajar ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_gaya_belajar" id="nama_gaya_belajar" placeholder="Nama Gaya Belajar" value="<?= $gaya_belajar->nama_gaya_belajar ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="<?= $gaya_belajar->title ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon" value="<?= $gaya_belajar->icon ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="karakteristik" id="karakteristik" cols="30" rows="3" placeholder="Karakteristik"><?= $gaya_belajar->karakteristik ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="tipe_kepribadian" id="tipe_kepribadian" cols="30" rows="3" placeholder="Tipe Kepribadian"><?= $gaya_belajar->tipe_kepribadian ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="tugas_yg_sesuai" id="tugas_yg_sesuai" cols="30" rows="3" placeholder="Tugas Yang Sesuai"><?= $gaya_belajar->tugas_yg_sesuai ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="kemampuan_adaptif" id="kemampuan_adaptif" cols="30" rows="3" placeholder="Kemampuan Adaptif"><?= $gaya_belajar->kemampuan_adaptif ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="kekuatan" id="kekuatan" cols="30" rows="3" placeholder="kekuatan"><?= $gaya_belajar->kekuatan ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="kelemahan" id="kelemahan" cols="30" rows="3" placeholder="Kelemahan"><?= $gaya_belajar->kelemahan ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="cara_belajar" id="cara_belajar" cols="30" rows="3" placeholder="Cara Belajar"><?= $gaya_belajar->cara_belajar ?></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="metode_guru" id="metode_guru" cols="30" rows="3" placeholder="Metode Mengajar Guru Yang Sesuai"><?= $gaya_belajar->metode_guru ?></textarea>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
        </div>

        </form>

    <?php endforeach; ?>
    </div>

</div>
</div>

<!-- Button trigger modal -->
<script>
    CKEDITOR.replace('karakteristik');
</script>