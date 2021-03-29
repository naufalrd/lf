<div class="container mb-container">
<div class="row mt-5 mb-2 mx-5 p-5 shadow bg-white rounded">
    <h1 class="text-center">Detail Rekam Medis <?= $this->session->userdata('username'); ?></h1>
    <div class="container mb-2 overflow-auto">
        <table class="table table-borderless mt-3" >
        <?php foreach ($diagnosis as $diagnosa) :?>
            <tr>
                <th>Nama Pasien</th>
                <td><?= $diagnosa['nama_pasien'] ?></td>
            </tr>
            <tr>
                <th>Umur Pasien</th>
                <td><?= $diagnosa['umur_pasien'] ?></td>
            </tr>
            <tr>
                <th>Alamat Pasien</th>
                <td><?= $diagnosa['alamat_pasien'] ?></td>
            </tr>
            <tr>
                <th>Tanggal Diagnosa</th>
                <td><?= $diagnosa['tanggal'] ?></td>
            </tr>
            <tr>
                <th>Diagnosis</th>
                <td><?= $diagnosa['diagnosis'] ?></td>
            </tr>
            <tr>
                <th>Obat</th>
                <td><?= $diagnosa['obat'] ?></td>
            </tr>
            <tr>
                <th>Tensi</th>
                <td><?= $diagnosa['tensi'] ?></td>
            </tr>
            <tr>
                <th>Poliklinik</th>
                <td><?= $diagnosa['nama_poli'] ?></td>
            </tr>
            <tr>
                <th>Dokter yang menangani</th>
                <td><?= $diagnosa['nama_dokter'] ?></td>
            </tr>
            <tr>
                <th>Status dokter</th>
                <td><?= $diagnosa['status'] ?></td>
            </tr>
            <tr>
                <th>Telp Dokter</th>
                <td><?= $diagnosa['notelp_dokter'] ?></td>
            </tr>
            <!-- <tr>
                <th>Perawat yang menangani</th>
                <td><?= $diagnosa['nama_perawat'] ?></td>
            </tr>
            <tr>
                <th>Telp Perawat</th>
                <td><?= $diagnosa['notelp_perawat'] ?></td>
            </tr> -->
            <?php endforeach ?>
        </table>
        <a href="<?= site_url("pasien") ?>" class="btn btn-primary">kembali</a>
    </div>
</div>
</div>