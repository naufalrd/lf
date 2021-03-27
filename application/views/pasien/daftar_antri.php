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
            <form action="<?= site_url(); ?>pasien/daftar" method="post">
                <div class="row">
                    <input type="hidden" name="id_pasien" class="form-control" value="<?= $id_pasien ?>" autocomplete="off" required>
                    <div class="form-group col-12 mb-3">
                        <label for="dokter" class="form-label">Pilih Dokter - Poliklinik</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="dokter">
                            <?php $no = 1;foreach ($dokter as $row) :?>
                            <option value="<?= $row['id_dokter'] ?>" > <?= $row['nama_dokter'] ?> - <?= $row['nama_poli'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
                </div>
            </form>
        </div>
    </div>
</div>