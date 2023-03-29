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
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <table class="table table-light text-center align-middle">
                <tr>
                    <th>#</th>
                    <th>Lapangan</th>
                    <th>Nama Penyewa</th>
                    <th>Tanggal Booking</th>
                    <th>Tanggal Main</th>
                    <th>Jam mulai</th>
                    <th>Durasi</th>
                    <th>Total Sewa</th>
                </tr>
                <?php
                $i = 1;
                foreach ($transaksi as $row) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nama'] ?></td>
                        <td><?= $row['user'] ?></td>
                        <td><?= $row['tanggal_booking'] ?></td>
                        <td><?= $row['tanggal_main'] ?></td>
                        <td><?= $row['jam_mulai'] ?></td>
                        <td><?= $row['durasi'] ?></td>
                        <td><?= $row['durasi'] * $row['harga'] ?></td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>