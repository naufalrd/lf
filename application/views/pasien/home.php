<div class="container mb-container">
<div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
    <h1 class="text-center">Tabel Antrian</h1>
    <div class="container text-center overflow-auto">
        <a href="<?= site_url('pasien/antri') ?>" class="btn btn-outline-dark mb-5">daftar</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Poli Tujuan</th>
                    <th scope="col">Nama Dokter</th>
                    <th scope="col">Nomor Antrian</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;foreach ($antrian as $pasien) :?>
                <tr class="align-middle">
                <td><?= $no ?></td>
                    <td><?= $pasien['nama_poli'] ?></td>
                    <td><?= $pasien['nama_dokter'] ?> </td>
                    <td><?= $pasien['no_antri'] ?></td>
                    <td><a href="pasien/detail_antrian/<?= $pasien['no_antri'] ?>" class="btn btn-success">lihat detail</a></td>
                </tr>
                <?php $no++;endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<div class="row mt-5 mb-3 mx-5 p-5 shadow bg-white rounded">
    <h1 class="text-center mb-5">Tabel Diagnosa</h1>
    <div class="container text-center overflow-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Diagnosa</th>
                    <th scope="col">Obat</th>
                    <th scope="col">Tensi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $no = 1;foreach ($diagnosa as $pasien1) :?>
                <tr class="align-middle">
                    <td><?= $no ?></td>
                    <td><?= $pasien1['tanggal'] ?></td>
                    <td><?= $pasien1['diagnosis'] ?></td>
                    <td><?= $pasien1['obat'] ?></td>
                    <td><?= $pasien1['tensi'] ?></td>
                    <td><a href="pasien/detail_rekammedis/<?= $pasien1['id_rekammedis'] ?>" class="btn btn-success">lihat detail</a></td>
                </tr>
                <?php $no++; endforeach ?>
            </tbody>
        </table>
    </div>
</div>
</div>