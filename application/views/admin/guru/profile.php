<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="<?= base_url('assets/admin/') ?>dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center"><?= $guru['nama_guru'] ?></h3>

                        <p class="text-muted text-center"><?= $guru['email'] ?></p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <b>Kelas</b> <a class="float-right">1,322</a>
                            </li>
                            <li class="list-group-item">
                                <b>Siswa</b> <a class="float-right">543</a>
                            </li>

                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4>Biodata Guru</h4>
                    </div>
                    <div class="card-body">
                        <h5><b>Asal Sekolah :</b> <?= $guru['asal_sekolah'] ?></h5>
                        <h5><b>Nomor Hp :</b> <?= $guru['no_hp'] ?></h5>
                        <h5><b>Tempat Lahir :</b> <?= $guru['tempat_lahir'] ?></h5>
                    </div>
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>