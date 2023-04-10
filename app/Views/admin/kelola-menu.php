<?= $this->extend('layout/templete-admin'); ?>

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
            <a class="btn btn-primary me-md-2" type="button" href=<?= base_url() . "admin/tambahMenu"; ?>>Tambah Menu</a>
        </div>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <table class="table table-light text-center align-middle">
                <tr>
                    <th>#</th>
                    <th>Nama Menu</th>
                    <th>Nama Controller</th>

                    <th>Aksi</th>
                </tr>
                <?php
                $i = 1;
                foreach ($menu as $row) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['nama_menu'] ?></td>
                        <td><?= $row['nama_controller'] ?></td>
                        <td>
                            <a style="margin-right: 5px;" href="<?= base_url() . 'admin/editMenu/'; ?><?= $row['id_menu'] ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url() . 'admin/hapusMenu/'; ?><?= $row['id_menu'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>

                <?php } ?>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>