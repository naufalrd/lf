<div class="container mb-container">
<div class="row mt-5 mb-2 mx-5 p-5 shadow bg-white rounded">
    <h1 class="text-center">Detail Antrian</h1>
    <div class="container mb-2 overflow-auto">
        <table class="table table-borderless mt-3" >
        <?php foreach ($antrian as $antri) :?>
            <tr>
                <th>Nomor Antrian</th>
                <td><?= $antri['no_antri'] ?></td>
            </tr>
            <tr>
                <th>Nama Pasien</th>
                <td><?= $antri['nama_pasien'] ?></td>
            </tr>
            <tr>
                <th>Umur Pasien</th>
                <td><?= $antri['umur_pasien'] ?></td>
            </tr>
            <tr>
                <th>Alamat Pasien</th>
                <td><?= $antri['alamat_pasien'] ?></td>
            </tr>
            <tr>
                <th>Poliklinik</th>
                <td><?= $antri['nama_poli'] ?></td>
            </tr>
            <tr>
                <th>Dokter yang menangani</th>
                <td><?= $antri['nama_dokter'] ?></td>
            </tr>
            <tr>
                <th>Telp Dokter</th>
                <td><?= $antri['notelp_dokter'] ?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <a href="<?= site_url("pasien") ?>" class="btn btn-primary">kembali</a>
    </div>
</div>
</div>