<div class="container mb-container">
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Admin</h1>
        <div class="container text-center overflow-auto">
            <a href="<?= site_url('admin/tambah_admin') ;?>" class="btn btn-outline-dark mb-5">+ Admin</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Username</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;foreach ($admin as $a) :?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $a['username_admin']?></td>
                        <td><a href="admin/delete_admin/<?=$a['username_admin']?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Dokter</h1>
        <div class="container text-center overflow-auto">
            <a href="<?= site_url('admin/tambah_dokter') ;?>" class="btn btn-outline-dark mb-5">+ Dokter</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID Dokter</th>
                        <th scope="col">username</th>
                        <th scope="col">nama</th>
                        <th scope="col">nomor telpon</th>
                        <th scope="col">poli</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;foreach ($dokter as $a) :?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $a['id_dokter']?></td>
                        <td><?= $a['username_dokter']?></td>
                        <td><?= $a['nama_dokter']?></td>
                        <td><?= $a['notelp_dokter']?></td>
                        <td><?= $a['nama_poli']?></td>
                        <td><a href="admin/edit_dokter/<?=$a['id_dokter']?>" class="btn btn-success">edit</a> 
                            <a href="admin/delete_dokter/<?=$a['username_dokter']?>" class="btn btn-danger">delete</a>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Perawat</h1>
        <div class="container text-center overflow-auto">
            <a href="<?= site_url('admin/tambah_perawat') ;?>" class="btn btn-outline-dark mb-5">+ Perawat</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID Perawat</th>
                        <th scope="col">username</th>
                        <th scope="col">nama</th>
                        <th scope="col">nomor telp</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;foreach ($perawat as $a) :?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?=$a['id_perawat']?></td>
                        <td><?=$a['username_perawat']?></td>
                        <td><?=$a['nama_perawat']?></td>
                        <td><?=$a['notelp_perawat']?></td>
                        <td><a href="admin/edit_perawat/<?=$a['id_perawat']?>" class="btn btn-success">edit</a> 
                            <a href="admin/delete_perawat/<?=$a['username_perawat']?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Pasien</h1>
        <div class="container text-center overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">ID Pasien</th>
                        <th scope="col">username</th>
                        <th scope="col">nama</th>
                        <th scope="col">umur</th>
                        <th scope="col">alamat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;foreach ($pasien as $a) :?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?=$a['id_pasien']?></td>
                        <td><?=$a['username_pasien']?></td>
                        <td><?=$a['nama_pasien']?></td>
                        <td><?=$a['umur_pasien']?></td>
                        <td><?=$a['alamat_pasien']?></td>
                        <td><a href="admin/edit_pasien/<?=$a['id_pasien']?>" class="btn btn-success">edit</a> 
                            <a href="admin/delete_pasien/<?=$a['username_pasien']?>" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>

</div>