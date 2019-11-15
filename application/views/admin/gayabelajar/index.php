<div class="row">
    <div class="col-12">
        <div class="card">
            <?= $this->session->flashdata('message'); ?>
            <div class="card-body">
                <a href="<?= base_url('admin/gayabelajar/tambah') ?>" type="button" class="btn btn-primary">Tambah Data</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Gaya Belajar</th>

                        <th scope="col">Karakteristik</th>

                        <th scope="col">Tipe Kepribadian</th>
                        <th scope="col">Tugas Yang Sesuai</th>
                        <th scope="col">Kemampuan Adaptif</th>
                        <th scope="col">Kekuatan</th>
                        <th scope="col">Kelemahan</th>
                        <th scope="col">Cara Belajar</th>
                        <th scope="col">Metode Mengajar Guru</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php foreach ($gaya_belajar as $gaya_belajar) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $gaya_belajar->nama_gaya_belajar ?></td>
                            <td><?= $gaya_belajar->karakteristik ?></td>
                            <td><?= $gaya_belajar->tipe_kepribadian ?></td>
                            <td><?= $gaya_belajar->tugas_yg_sesuai ?></td>
                            <td><?= $gaya_belajar->kemampuan_adaptif ?></td>
                            <td><?= $gaya_belajar->kekuatan ?></td>
                            <td><?= $gaya_belajar->kelemahan ?></td>
                            <td><?= $gaya_belajar->cara_belajar ?></td>
                            <td><?= $gaya_belajar->metode_guru ?></td>
                            <td>
                                <a href="" class="badge badge-success">edit</a>
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
<!-- <div class="modal fade bd-example-modal-xl" id="gayaBelajarModal" tabindex="-1" role="dialog" aria-labelledby="gayaBelajarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">

        <div class="modal-content ">
            <div class="modal-header">
                <h5 class="modal-title" id="gayaBelajarModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container">

                <form method="post" action="<?= base_url('admin/gayabelajar/tambah') ?>">

                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_gaya_belajar" id="nama_gaya_belajar" placeholder="Nama Gaya Belajar">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="title" id="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="karakteristik" id="karakteristik" cols="30" rows="3" placeholder="Karakteristik"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="icon" id="icon" placeholder="Icon">
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
</div> -->

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