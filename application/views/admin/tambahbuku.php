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
                            <?= $this->session->flashdata('message1') ?>
                            <?php echo form_open_multipart('admin/addbuku'); ?>
                            <form class="user" method="post" action="<?= base_url('admin/addbuku'); ?>">
                                <div class="form-group ">
                                    <?php echo "Cover Buku"; ?>
                                    <input type="file" class="form-control form-control-user" id="uploadgambar" name="uploadbuku" placeholder="Upload Poster Event">
                                    <!-- <button>Tambah Gambar</button> -->
                                </div>
                                <div class="form-group">
                                    <?php echo "Judul Buku"; ?>
                                    <input type="text" class="form-control form-control-user" id="judulBuku" name="judul" placeholder="Masukkan Judul Buku">
                                    <?= form_error('namaevent', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <?php echo "Kategori"; ?>
                                    <input type="text" class="form-control form-control-user" id="kategoriBuku" name="kategori" placeholder="Masukkan Kategori Buku">
                                    <?= form_error('penyelenggara', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <?php echo "Penulis"; ?>
                                    <input type="text" class="form-control form-control-user" id="penulisBuku" name="penulis" placeholder="Masukkan Penulis Buku">
                                    <?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <?php echo "Harga"; ?>
                                    <input type="text" class="form-control form-control user" name="harga" id="hargaBuku" placeholder="Masukkan Harga Buku">
                                </div>
                                <div class="form-group">
                                    <?php echo "Tahun Terbit"; ?>
                                    <input type="text" class="form-control form-control user" name="tahun" id="hargaBuku" placeholder="Masukkan Tahun Terbit Buku">
                                </div>
                                <div class="form-group">
                                    <?php echo "Deskripsi"; ?>
                                    <textarea name="deskripsi" id="deskripsi-buku" cols="30" rows="10" class="boxsizingBorder"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Tambah Event
                                </button>
                                <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('auth/logout') ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

</div>