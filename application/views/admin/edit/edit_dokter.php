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
            <?php foreach($dokter as $a) :?>
            <form action="<?= site_url(); ?>admin/update_dokter/<?=$a->id_dokter?>" method="post">
                <div class="row">
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Nama_dokter</label>
                        <input type="text" name="nama_dokter" class="form-control" autocomplete="off" placeholder="Nama Dokter"  value="<?= $a->nama_dokter ?>" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Notelp_dokter</label>
                        <input type="text" name="notelp_dokter" class="form-control" autocomplete="off" placeholder="No Telp"  value="<?= $a->notelp_dokter ?>" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Poli</label>
                        <input type="text" name="poli" class="form-control" autocomplete="off" placeholder="Poli"  value="<?= $a->nama_poli ?>" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Update</button>
                </div>
            </form>
            <?php endforeach ?>
        </div>
    </div>
</div>