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
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $no = 1 ?>
                <?php foreach ($admin as $admin) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $admin->nama ?></td>
                            <td><?= $admin->username ?></td>
                            <td><?= $admin->email ?></td>
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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open_multipart('user/tambah') ?>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap">
                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                </div>

                <div class="form-group">
                    <input type="file" class="form-control-file" id="foto" name="foto">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>

            <?= form_close() ?>
        </div>
    </div>
</div>