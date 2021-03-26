<div class="signin-input">
    <div class="row">
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Nama Depan</label>
            <input type="text" name="nama_depan" class="form-control shadow-none" placeholder="Nama Depan" required autofocus>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Nama Belakang</label>
            <input type="text" name="nama_belakang" class="form-control shadow-none" placeholder="Nama Belakang" required>
        </div>
        <div class="form-group col-12 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Email</label>
            <input type="email" name="email" class="form-control shadow-none" placeholder="Email" required>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Username</label>
            <input type="text" name="username" class="form-control" autocomplete="off" placeholder="Username" required>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Password</label>
            <input type="password" name="password" class="form-control" autocomplete="off" placeholder="password" required>
        </div>
        <div class="form-group col-12 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Alamat</label>
            <textarea type="text" name="alamat" class="form-control" autocomplete="off" placeholder="alamat"></textarea>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Desa</label>
            <input type="text" name="desa" class="form-control" autocomplete="off" placeholder="desa" required>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" autocomplete="off" placeholder="kecamatan" required>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" autocomplete="off" placeholder="kabupaten" required>
        </div>
        <div class="form-group col-6 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">provinsi</label>
            <input type="text" name="provinsi" class="form-control" autocomplete="off" placeholder="provinsi" required>
        </div>
        <div class="form-group col-12 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">No Telepon</label>
            <input type="text" name="no_telp" class="form-control" autocomplete="off" placeholder="no telpon" required>
        </div>
        <div class="form-group col-4 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">Jenis Kelamin</label>
            <select class="form-select" id="gender-select" name="gender" aria-label="Default select example" required>
                <option disabled>Pilih Jenis Kelamin</option>
                <option value="pria">pria</option>
                <option value="wanita">wanita</option>
            </select>
        </div>
        <div class="form-group col-8 mb-3">
            <label for="inputEmail" class="form-controll visually-hidden">No BPJS</label>
            <input type="text" name="no_bpjs" class="form-control" autocomplete="off" placeholder="no bpjs" required>
        </div>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
</div>
<p class="title mt-1">i have account already ? <a href="<?= site_url(); ?>auth/login" class="text-decoration-none">Login</a></p>