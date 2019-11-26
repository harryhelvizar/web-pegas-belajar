<div class="row">
    <div class="col-12">
        <div class="card">
            <?php foreach ($testimoni as $testimoni) : ?>
                <form method="post" action="<?= base_url('admin/testimoni/update/') ?>">
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id_testimoni" id="id_testimoni" value="<?= $testimoni->id_testimoni ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $testimoni->nama ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?= $testimoni->jabatan ?>">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="testimoni" id="testimoni" cols="30" rows="10" value="<?= $testimoni->testimoni?>"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="foto" id="foto" cols="30" rows="3"><?= $testimoni->foto ?></textarea>
                    </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">update</button>
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