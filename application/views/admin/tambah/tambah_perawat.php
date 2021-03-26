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
            <form action="<?= site_url(); ?>admin/check_register_perawat" method="post">
                <div class="row">
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Username</label>
                        <input type="text" name="username_perawat" class="form-control" autocomplete="off" placeholder="Username" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Nama_perawat</label>
                        <input type="text" name="nama_perawat" class="form-control" autocomplete="off" placeholder="Nama perawat" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Notelp_perawat</label>
                        <input type="text" name="notelp_perawat" class="form-control" autocomplete="off" placeholder="No Telp" required>
                    </div>
                    <div class="form-group col-12 mb-3">
                        <label class="form-controll visually-hidden">Password</label>
                        <input type="password" name="password_perawat" class="form-control" autocomplete="off" placeholder="Password" required>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
</div>