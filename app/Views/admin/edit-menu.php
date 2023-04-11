<?= $this->extend('layout/templete-admin'); ?>

<?= $this->section('content'); ?>
<section class="hero-section" id="hero" style='height: 1500px;'>
    <div class="wave">

        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
            </g>
        </svg>

    </div>
    <!-- Jumbotron -->
    <div class="px-4 py-5 px-md-5 text-center text-lg-start hero-section" style="margin-top:60px">

        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="card">
                <div class="card-body">
                    <?php
                    // $errors = validation_errors();
                    $errors = session()->getFlashdata('errors');
                    // $validasi = \Config\Services::validation();
                    // d($validasi);
                    ?>
                    <h3>Edit Menu</h3>
                    <!-- 2 column grid layout with text inputs for the first and last names -->

                    <?= form_open(base_url() . "admin/updateMenu") ?>
                    <br>
                    <!-- Nama Menu  -->
                    <div class="form-outline mb-4">
                        <input type="hidden" name="id" value="<?= $row['id_menu'] ?>">
                        <label class="form-label" for="nama">Nama Mneu</label>
                        <input type="text" id="nama_menu" name="nama_menu" class="form-control <?= isset($errors['nama_menu']) ? 'is-invalid' : '' ?>" value="<?= isset($errors) ? old('nama_menu') : $row['nama_menu'] ?>" />
                        <div class="invalid-feedback">
                            <?= isset($errors['nama_menu']) ? $errors['nama_menu'] : '' ?>
                        </div>
                    </div>
                    <!-- Nama Controller  -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama_controller">Nama Controller</label>
                        <input type="text" id="nama_controller" name="nama_controller" class="form-control <?= isset($errors['nama_controller']) ? 'is-invalid' : '' ?>" value="<?= isset($errors) ? old('nama_controller') : $row['nama_controller'] ?>" />
                        <div class="invalid-feedback">
                            <?= isset($errors['nama_controller']) ? $errors['nama_controller'] : '' ?>
                        </div>
                    </div>






                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                        Edit
                    </button>
                    <a href=<?= base_url() . "admin"; ?> class="btn btn-primary btn-block mb-4">Kembali</a>


                    <?= form_close() ?>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Jumbotron -->
</section>
<?= $this->endSection(); ?>