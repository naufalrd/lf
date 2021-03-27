<div class="container mb-container">
    <div class="row mt-5 p-5 shadow bg-white rounded">
        <div class="signin-input">
            <?php
                $errors = $this->session->flashdata('errors');
                if (!empty($errors)) {
            ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-danger text-center">
                        <?php foreach ($errors as $key => $error) { ?>
                            <?php echo "$error<br>"; ?>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php } ?>
            <?php foreach($pasien as $a) :?>
            <form action="<?= site_url(); ?>admin/update_pasien/<?=$a->id_pasien?>" method="post">
                <div class="row">
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Nama_pasien</label>
                        <input type="text" name="nama_pasien" class="form-control" autocomplete="off" placeholder="Nama pasien" value="<?= $a->nama_pasien ?>" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Umur_pasien</label>
                        <input type="text" name="umur_pasien" class="form-control" autocomplete="off" placeholder="Umur" value="<?= $a->umur_pasien ?>" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Alamat_pasien</label>
                        <input type="text" name="alamat_pasien" class="form-control" autocomplete="off" placeholder="No Telp" value="<?= $a->alamat_pasien ?>" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </div>
            </form>
            <?php endforeach ?>
        </div>
    </div>
</div>