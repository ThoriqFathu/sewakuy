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

                        <?= form_open_multipart(base_url() . "publik/post_register_pemilik") ?>
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <!-- Name input -->
                        <h3>Register</h3>
                        <br>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="nama">Name</label><br>
                        <input type="text" id="nama" name="nama" class="form-control" required/>
                        </div>
                        <!-- Gender -->
                        <label>Jenis Kelamin</label>
                        <div >
                        <br>
                        <input class="form-check-input" checked type="radio" name="jk" value="pria" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Pria &nbsp;
                        </label>
                        <input class="form-check-input" type="radio" name="jk" value="wanita" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Wanita
                        </label>
                        </div>
                        <br>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email</label><br>
                        
                        <input type="email" name="email" id="form3Example3" class="form-control"  required/>
                        <input type="hidden" name="level" value="pemilik"/>
                        <input type="hidden" name="verif" value="belum"/>
                        </div>
                        <div class="form-outline mb-4">
                        <label class="form-label" for="profil">Berkas : </label><br>
                        <span style="color:orange;">Berkas yang harus di upload : foto KTP & Surat Ket RT/RW (.PDF)</span>
                        <input type="file" name="berkas" id="profil" class="form-control" required/>
                        </div>
                        <!-- Alamat -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="address">Alamat Kos</label>
                        <input type="text" name="address" id="address" class="form-control"  required/>
                        </div>
                        <!-- Username input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="user">Username</label>
                        <input type="text" id="user" name="user" class="form-control" required/>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Password</label>
                        <input type="password" id="form3Example4" name="pw" class="form-control" required/>
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example4">Confirm Password</label>
                        <input type="password" id="form3Example4" name="confirm" class="form-control" required/>
                        </div>
        
                        <div>
                        <p class="mb-5 pb-lg-2" style="color: #393f81;">Have an account? <a href="login.php"
                            style="color: #393f81;">Login here</a></p>
                        </div>

                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                        Register
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