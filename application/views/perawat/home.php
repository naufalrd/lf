<<<<<<< HEAD
<div class="container mb-container">
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Cek Tensi</h1>
        <div class="container text-center overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor Antrian</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tensi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php foreach ($rekam_medis as $data) : ?>
                    <tr class="align-middle">
                        <td><?= $data['no_antri'] ?></td>
                        <td><?= $data['nama_pasien'] ?></td>
                        <td><?= $data['tensi'] ?></td>
                        <td><a href="<?= base_url() ?>Perawat/tensi/<?= $data['id_pasien'] ?>" class="btn btn-success">Panggil</a></td>
                        
                    </tr>
                    <?php endforeach ?>
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
                        <th scope="col">Tensi</th>
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
                        <td><?= $pasien['tensi'] ?></td>
                        <td><a href="<?= base_url() ?>Perawat/data_pasien/<?= $pasien['id_pasien'] ?>" class="btn btn-success">edit</a></td>
                    </tr>
                    <?php endforeach ?>
                    <?php endif ?>
                </tbody>
            </table>
        </div>
    </div>
=======
<div class="container mb-container">
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Cek Tensi</h1>
        <div class="container text-center overflow-auto">
            <a href="" class="btn btn-outline-dark mb-5">Panggil</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nomor Antrian</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tensi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-middle">
                        <td>2</td>
                        <td>Alicia</td>
                        <td></td>
                        <td><a href="" class="btn btn-success">tambah data</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
>>>>>>> ef48e530a1fdae27d3745207c021d10046d4c322
</div>