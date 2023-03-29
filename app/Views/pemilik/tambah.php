<?= $this->extend('layout/templete'); ?>

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
                    $errors = session()->getFlashdata('errors');
                    ?>
                    <form method="post" enctype="multipart/form-data" action="http://localhost/CI/public/lapangan/post">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <h3>Tambah Lapangan</h3>

                        <br>
                        <!-- Name  -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="nama">Nama Lapangan</label>
                            <input type="text" id="nama" name="nama" class="form-control <?= isset($errors['nama']) ? 'is-invalid' : '' ?>" value="<?= old('nama') ?>" />
                            <div class="invalid-feedback">
                                <?= isset($errors['nama']) ? $errors['nama'] : '' ?>
                            </div>
                        </div>

                        <!-- Harga -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example3">Harga</label>
                            <input type="number" name="harga" id="form3Example3" class="form-control <?= isset($errors['harga']) ? 'is-invalid' : '' ?>" value="<?= old('harga') ?>" />
                            <div class="invalid-feedback">
                                <?= isset($errors['harga']) ? $errors['harga'] : '' ?>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="address">Alamat</label>
                            <input type="text" name="alamat" id="address" class="form-control <?= isset($errors['alamat']) ? 'is-invalid' : '' ?>" value="<?= old('alamat') ?>" />
                            <div class="invalid-feedback">
                                <?= isset($errors['alamat']) ? $errors['alamat'] : '' ?>
                            </div>
                        </div>



                        <!-- jenis -->
                        <label>Jenis Lapangan</label>
                        <div>
                            <br>
                            <input class="form-check-input" type="radio" name="jenis" value="semen" id="jenis1" checked>
                            <label class="form-check-label" for="jenis1">
                                Semen &nbsp;
                            </label>
                            <input class="form-check-input" type="radio" name="jenis" value="vinyl" id="jenis2">
                            <label class="form-check-label" for="jenis2">
                                Vinyl &nbsp;
                            </label>
                            <input class="form-check-input" type="radio" name="jenis" value="sintetis" id="jenis3">
                            <label class="form-check-label" for="jenis3">
                                Sintetis
                            </label>
                        </div>
                        <br>
                        <!-- Status -->
                        <label class="form-label">Status</label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option value="tersedia">Tersedia</option>
                            <option value="tidak trsedia">Tidak Tersedia</option>
                        </select>
                        <br>
                        <!-- gambar -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="gambar">Gambar</label>
                            <input type="file" name="gambar" id="gambar" class="form-control <?= isset($errors['gambar']) ? 'is-invalid' : '' ?>" />
                            <div class="invalid-feedback">
                                <?= isset($errors['gambar']) ? $errors['gambar'] : '' ?>
                            </div>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                            Tambah
                        </button>
                        <a href="http://localhost/CI/public/lapangan" class="btn btn-primary btn-block mb-4">Kembali</a>


                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- Jumbotron -->
</section>
<?= $this->endSection(); ?>