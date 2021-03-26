<div class="container mb-container">
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tabel Dokter</h1>
        <div class="container text-center overflow-auto">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Poli</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1; foreach ($dokter as $a) :?>
                    <tr class="align-middle">
                        <th scope="row"><?= $no++ ?></th>
                        <td><?=$a['nama_dokter']?></td>
                        <td><?=$a['nama_poli']?></td>
                        <td>
                            <?php if($a['status']=='aktif'){
                                echo anchor('admin/ganti_jadi_nonaktif/'.$a['id_dokter'],
                                '<button class="btn btn-success">Aktif</button>');
                            }else{
                                echo anchor('admin/ganti_jadi_aktif/'.$a['id_dokter'],
                                '<button class="btn btn-danger">Non-Aktif</button>');
                            }?>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>