<?= $this->extend('layout/templete'); ?>

<?= $this->section('content'); ?>
<section class="hero-section" id="hero" style='padding-top: 90px'>

    <div class="wave">

        <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
                </g>
            </g>
        </svg>

    </div>
    <div class="container">
        <div class="row justify-content-center text-center ">
            <div class="col-md-5" data-aos="fade-up">
                <h2 class="text-white"><?= $judul ?></h2>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary me-md-2" type="button" href="tambah.php">Tambah Lapangan</a>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach ($lapangan as $row) {
            ?>
                <div class="col">
                    <div class="card h-100">
                        <img src="img/<?= $row['gambar'] ?>" class="card-img-top" alt="<?= $row['gambar'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= strtoupper($row['nama']) ?></h5>
                            <p class="card-text" style="color: black;"><?= $row['alamat'] ?> </p>
                            <div class="row" style="text-align: -webkit-center; margin-right: -150px;">

                                <div class="col-sm-6" style="color: black;">Rp.<?= $row['harga'] ?>,00</div>
                            </div>
                            <div class="row" style="text-align: -webkit-center;">
                                <div class="col-6">
                                    <a class="btn btn-primary me-md-2" href="">EDIT</a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            <?php } ?>
            <table>
                <tr>
                    <td>id</td>
                    <td>nama</td>
                    <td>username</td>
                    <td>alamat</td>
                    <td>gambar</td>
                    <td>harga</td>
                    <td>jenis</td>
                    <td>status</td>
                </tr>
                <?php
                foreach ($lapangan as $row) {
                ?>
                    <tr>
                        <td><?= $row['id_lapangan'] ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['username'] ?></td>
                        <td><?= $row['alamat'] ?></td>
                        <td><?= $row['gambar'] ?></td>
                        <td><?= $row['harga'] ?></td>
                        <td><?= $row['jenis'] ?></td>
                        <td><?= $row['status'] ?></td>
                    </tr>

                <?php } ?>
            </table>




        </div>
    </div>
</section>






<?= $this->endSection(); ?>