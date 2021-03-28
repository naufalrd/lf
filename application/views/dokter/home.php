<div class="container mb-container">
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center mb-5">Tabel Cek Diagnosa</h1>
        <div class="container text-center overflow-auto">
        
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Obat</th>
                        <th scope="col">Tensi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($rekam_medis)) : ?>
                    <?php 
                        $no = 1;
                        foreach ($rekam_medis as $data) : ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $data['nama_pasien'] ?></td>
                        <td><?= $data['diagnosis'] ?></td>
                        <td><?= $data['obat'] ?></td>
                        <td><?= $data['tensi'] ?></td>
                        <td><?= $pasien['tanggal'] ?></td>
                        <td><a href="<?= base_url() ?>Dokter/diagnosa/<?= $data['id_rekammedis'] ?>" class="btn btn-success">edit</a> <a href="<?= base_url() ?>Dokter/DeletePost/<?= $data['id_pasien'] ?>" class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center mb-5">Tabel Diagnosa</h1>
        <div class="container text-center overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Diagnosa</th>
                        <th scope="col">Obat</th>
                        <th scope="col">Tensi</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($data_pasien)) : ?>
                    <?php 
                        $no = 1;
                        foreach ($data_pasien as $pasien) : ?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $pasien['nama_pasien'] ?></td>
                        <td><?= $pasien['diagnosis'] ?></td>
                        <td><?= $pasien['obat'] ?></td>
                        <td><?= $pasien['tensi'] ?></td>
                        <td><?= $pasien['tanggal'] ?></td>
                        <td><a href="<?= base_url() ?>Dokter/data_pasien/<?= $pasien['id_pasien'] ?>" class="btn btn-success">edit</a> <a href="<?= base_url() ?>Dokter/DeletePost/<?= $data['id_pasien'] ?>" class="btn btn-danger">delete</a></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
</div>