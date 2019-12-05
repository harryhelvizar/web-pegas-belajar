<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->session->flashdata('message'); ?>
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Testimoni</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($testimoni as $testimoni) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $testimoni->nama ?></td>

                            <td><?= $testimoni->jabatan ?></td>

                            <td><?= $testimoni->foto ?></td>
                            <td><?= $testimoni->testimoni ?></td>
                            <td>
                                <a href="<?= base_url('admin/testimoni/edit/'). $testimoni->id_testimoni?>" class="badge badge-success">edit</a>
                                <a href="" class="badge badge-danger">hapus</a>
                            </td>
                        </tr>

                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>

    </div>
</div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">

                <?= form_open_multipart(base_url('admin/testimoni/tambahtestimoni')) ?>    


                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="testimoni" id="testimoni" cols="30" rows="3" placeholder="Penjelasan"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date_created" id="date_created" placeholder="tanggal update">
                    </div> 


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            <?= form_close() ?>
                <!-- </form> -->
        </div>
    </div>
</div>

<script>
    //***********************************//
    // For select 2
    //***********************************//
    $(".select2").select2();

    /*colorpicker*/
    $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
            control: $(this).attr('data-control') || 'hue',
            position: $(this).attr('data-position') || 'bottom left',

            change: function(value, opacity) {
                if (!value) return;
                if (opacity) value += ', ' + opacity;
                if (typeof console === 'object') {
                    console.log(value);
                }
            },
            theme: 'bootstrap'
        });

    });
    /*datwpicker*/
    jQuery('.mydatepicker').datepicker();
    jQuery('#datepicker-autoclose').datepicker({
        autoclose: true,
        todayHighlight: true
    });
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>