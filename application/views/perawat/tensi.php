<div class="container mb-container">
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Tambahkan Tensi</h1>
        <div class="container text-center overflow-auto">
        <?php foreach ($rekam_medis as $data) : ?>
            <form name="sentMessage" id="contactForm" action="<?= base_url() ?>Perawat/SendPost/" method="POST" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <input name="no_antri" value="<?= $data['no_antri'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <input name="id_rekammedis" value="<?= $data['id_rekammedis'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <label>ID</label>
                        <input name="id_pasien" value="<?= $data['id_pasien'] ?>" class="form-control" placeholder="ID Pasien" id="message" required data-validation-required-message="Please enter your story."></textarea>
                        <p class="help-block text-danger"></p>
                        <label>Nama Pasien</label>
                        <input name="nama_pasien" value="<?= $data['nama_pasien'] ?>" class="form-control" placeholder="Nama Pasien" id="message" required data-validation-required-message="Please enter your story."></textarea>
                        <p class="help-block text-danger"></p>
                        <input name="diagnosis" type="hidden" class="form-control" value="<?= $data['diagnosis'] ?>">
                        <input name="obat" type="hidden" class="form-control" value="<?= $data['obat'] ?>">
                        <label>Tensi</label>
                        <input name="tensi" value="<?= $data['tensi'] ?>" type="text" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <p class="help-block text-danger"></p>
                        <label>Dokter</label>
                        <input name="id_dokter" value="<?= $data['id_dokter'] ?>" type="text" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <p class="help-block text-danger"></p>
                        <button type="submit" class="btn btn-primary" id="sendMessageButton" >Add</button>
                    </div>
                </div>
            </form>
        <?php endforeach ?>    
        </div>
    </div>
</div>