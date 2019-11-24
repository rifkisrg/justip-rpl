<!-- Begin Page Content -->
<?php foreach ($event as $details) : ?>
    <div class="container-fluid">
        <div class="container">
            <div class="box">
                <center>
                    <h2>Edit Event</h2>
                </center>
                <hr>
                <form action="<?= base_url('admin/updateevent') ?>" method="post">
                    <input type="hidden" name="id_event" value="<?= $details['id_event'] ?>">
                    <div class="form-group">
                        <?php echo "Nama Event"; ?>
                        <input type="text" class="form-control form-control-user" id="namaevent" name="nama" placeholder="Masukkan Nama Event" value="<?= $details['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Lokasi Event"; ?>
                        <input type="text" class="form-control form-control-user" id="lokasievent" name="lokasi" placeholder="Masukkan Lokasi" value="<?= $details['lokasi'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Tanggal Event"; ?>
                        <input type="date" class="form-control form-control-user" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Event" value="<?= $details['tanggal'] ?>">
                    </div>
                    <div class="form-group">
                        <?php echo "Deskripsi"; ?>
                        <textarea name="deskripsi" id="deskripsi-event" cols="30" rows="10" class="boxsizingBorder"><?= $details['deskripsi'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Tambah Event
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