<?= $this->extend('layout/templete'); ?>

<?= $this->section('content'); ?>
<section class="hero-section" id="hero">
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
    <div class="px-4 py-5 px-md-5 text-center text-lg-start hero-section">
        <div class="container">
            <div class="row gx-lg-5 align-items-center" style="margin-top: 40px;">
                <div class="col-lg-6 mb-5 mb-lg-5">
                    <h1 class="my-5 display-3 fw-bold ls-tight">
                        #SerunyaNgekos
                        <br />
                        <span>AlaSewakuy</span>
                    </h1>
                    <p>
                        Yuk daftarkan diri anda!
                    </p>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body">

                                <?= form_open(base_url() . "publik/post_level") ?>
                                    <!-- Aktor -->
                                    <h3>Pilih Aktor</h3>
                                    <br>
                                    <div>
                                        <br>
                                        <input class="form-check-input" type="radio" name="aktor" checked value="1" id="aktor1">
                                        <label class="form-check-label" for="aktor1">
                                            penyewa &nbsp;
                                        </label>
                                        <input class="form-check-input" type="radio" name="aktor" value="2" id="aktor2">
                                        <label class="form-check-label" for="aktor2">
                                            Pemilik
                                        </label>
                                    </div>
                                    <br>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                                        Submit
                                    </button>
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