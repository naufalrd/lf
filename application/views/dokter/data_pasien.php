<div class="container mb-container">
    <div class="row mt-5 mx-5 p-5 shadow bg-white rounded">
        <h1 class="text-center">Update Diagnosa dan Obat</h1>
        <div class="container text-center overflow-auto">
        <?php if (isset($data_pasien)) : ?>
            <?php foreach ($data_pasien as $data) : ?>
            <form name="sentMessage" id="contactForm" action="<?= base_url() ?>dokter/SendData/<?= $data['id_rekammedis'] ?>" method="POST" novalidate>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <input name="id_rekammedis" value="<?= $data['id_rekammedis'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <input name="id_pasien" value="<?= $data['id_pasien'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <label>Pasien</label>
                        <input name="nama_pasien" value="<?= $data['nama_pasien'] ?>" class="form-control" placeholder="Your review" id="message" required data-validation-required-message="Please enter your story."></textarea>
                        <p class="help-block text-danger"></p>
                        <label>Diagnosa</label>
                        <input name="diagnosis" type="text" value="<?= $data['diagnosis'] ?>" class="form-control" placeholder="Rate" id="name" required data-validation-required-message="Please put your title.">
                        <label>Obat</label>
                        <input name="obat" type="text" value="<?= $data['obat'] ?>" class="form-control" placeholder="Rate" id="name" required data-validation-required-message="Please put your title.">
                        <p class="help-block text-danger"></p>
                        <input name="tensi" value="<?= $data['tensi'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <label>Dokter</label>
                        <input name="id_dokter" value="<?= $data['id_dokter'] ?>" type="text" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <input name="id_perawat" value="<?= $data['id_perawat'] ?>" type="hidden" class="form-control" placeholder="Tensi" id="name" required data-validation-required-message="Please put your title.">
                        <label>Tanggal</label>
                        <input name="tanggal" type="date" value="<?= $data['tanggal'] ?>" class="form-control" placeholder="Rate" id="name" required data-validation-required-message="Please put your title.">
                        <p class="help-block text-danger"></p>
                        <button type="submit" class="btn btn-primary" id="sendMessageButton" >Add</button>
                    </div>
                </div>
            </form>
            <?php endforeach ?>
         <?php endif ?>
        </div>
    </div>
</div>