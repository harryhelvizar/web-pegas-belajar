<div class="row">
    <div class="col-12">
        <div class="card">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Asal Sekolah</th>
                        <th scope="col">Nomor Hp</th>
                        <th scope="col">Tempat Lahir</th>
                        <th scope="col">Tanggal_lahir</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php $no = 1 ?>
                <?php foreach ($siswa as $siswa) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><?= $siswa->nama ?></td>
                            <td><?= $siswa->email ?></td>
                            <td><?= $siswa->nis ?></td>
                            <td><?= $siswa->asal_sekolah ?></td>
                            <td><?= $siswa->no_hp ?></td>
                            <td><?= $siswa->tempat_lahir ?></td>
                            <td><?= $siswa->tanggal_lahir ?></td>
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