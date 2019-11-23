<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="">
                                    <h1 class="h4 text-gray-900 mb-4" style="text-align: center;">Tambah Buku</h1>
                                </div>
                                <?= $this->session->flashdata('message') ?>
                                <?php echo form_open_multipart('addbook'); ?>
                                <form class="user" method="post" action="<?= base_url('user/tambah_event'); ?>">
                                    <div class="form-group ">
                                        <?php echo "Gambar Buku"; ?>
                                        <input type="file" class="form-control form-control-user" id="uploadgambar" name="uploadgambar" placeholder="Masukkan Username Anda">
                                        <!-- <button>Tambah Gambar</button> -->
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Deskripsi Buku"; ?>
                                        <input type="text" class="form-control form-control-user" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi Buku">
                                        <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Penulis Buku"; ?>
                                        <input type="text" class="form-control form-control-user" id="penulis" name="penulis" placeholder="Masukkan Nama Penulis">
                                        <?= form_error('penulis', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Bahasa Buku"; ?>
                                        <input type="text" class="form-control form-control-user" id="bahasa" name="bahasa" placeholder="Masukkan Bahasa Buku">
                                        <?= form_error('bahasa', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Tahun Terbit Buku"; ?>
                                        <input type="text" class="form-control form-control-user" id="tahunterbit" name="tahunterbit" placeholder="Masukkan Tahun Terbit Buku">
                                        <?= form_error('tahunterbit', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Harga Buku"; ?>
                                        <input type="text" class="form-control form-control-user" id="harga" name="harga" placeholder="Masukkan Harga Buku">
                                        <?= form_error('harga', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Tambah Event
                                    </button>
                                    <?php echo form_close(); ?>
                                    <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>