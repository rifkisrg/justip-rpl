<!-- Begin Page Content -->
<?php foreach ($buku as $details) : ?>
    <div class="container-fluid">
        <div class="container">
            <div class="box">
                <center>
                    <h2>Edit Buku</h2>
                </center>
                <hr>
                <form action="<?= base_url('admin/updatebuku') ?>" method="post">
                    <input type="hidden" name="id_buku" value="<?= $details['id_buku'] ?>">
                    <div class="form-group">
                        <?php echo "Judul Buku"; ?>
                        <input type="text" class="form-control form-control-user" id="judulBuku" name="judul" placeholder="Masukkan Judul Buku" value="<?= $details['judul'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Kategori"; ?>
                        <input type="text" class="form-control form-control-user" id="kategoriBuku" name="kategori" placeholder="Masukkan Kategori Buku" value="<?= $details['kategori'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Penulis"; ?>
                        <input type="text" class="form-control form-control-user" id="penulisBuku" name="penulis" placeholder="Masukkan Penulis Buku" value="<?= $details['penulis'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Harga"; ?>
                        <input type="text" class="form-control form-control user" name="harga" id="hargaBuku" placeholder="Masukkan Harga Buku" value="<?= $details['harga'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Tahun Terbit"; ?>
                        <input type="text" class="form-control form-control user" name="tahun_terbit" id="hargaBuku" placeholder="Masukkan Tahun Terbit Buku" value="<?= $details['tahun_terbit'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Deskripsi"; ?>
                        <textarea name="deskripsi" id="deskripsi-buku" cols="30" rows="10" class="boxsizingBorder"><?= $details['deskripsi'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Edit Buku
                    </button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
    <!-- End of Main Content -->
<?php endforeach ?>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Kelompok 6 Praktikum RPL 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

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