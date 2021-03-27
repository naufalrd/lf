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
            <?php foreach($perawat as $a) :?>
            <form action="<?= site_url(); ?>admin/update_perawat/<?=$a->id_perawat?>" method="post">
                <div class="row">
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Nama_perawat</label>
                        <input type="text" name="nama_perawat" class="form-control" autocomplete="off" placeholder="Nama perawat" value="<?= $a->nama_perawat ?>" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Notelp_perawat</label>
                        <input type="text" name="notelp_perawat" class="form-control" autocomplete="off" placeholder="No Telp" value="<?= $a->notelp_perawat ?>" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </div>
            </form>
            <?php endforeach ?>
        </div>
    </div>
</div>