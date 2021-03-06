                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container">
                        <div class="box">
                            <center>
                                <h2>Daftar Event</h2>
                            </center>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="<?= base_url('admin/addevent') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Event</a>
                                </div>
                            </div>
                            <br><br>
                            <table class="table table-bordered" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Event</th>
                                        <th>Nama Event</th>
                                        <th>Lokasi</th>
                                        <th>Tanggal</th>
                                        <th>Edit</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($event as $d) { ?>
                                        <tr>
                                            <!--HINT UNTUK MENGHAPUS USER KALIAN DAPAT MENGGUNAKAN FORM, MENGGUNAKAN ANCHOR ATAU HREF PADA BUTTON-->
                                            <form action="">
                                                <td>
                                                    <?= $no++ ?>
                                                </td>
                                                <td>
                                                    <img src="<?= base_url($d['image']) ?>" alt="event" width="64" />
                                                </td>
                                                <td>
                                                    <?php echo $d['nama'] ?>
                                                </td>
                                                <td>
                                                    <?= $d['lokasi'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $d['tanggal'] ?>
                                                </td>
                                                <!-- BUTTON EDIT MAHASISWA -->
                                                <td>
                                                    <a href="<?= base_url("admin/detailevent/") . $d['id_event']; ?>">
                                                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#edit"><i class="fas fa-user-edit"></i></button>
                                                    </a>    
                                                </td>
                                                <!-- BUTTON HAPUS - ISI LENGKAPI BUTTON INI -->
                                                <td><a href="<?php echo site_url("admin/hapusevent/" . $d['id_event']); ?>" class="btn btn-danger" onclick="return confirm('Delete content?');">Delete</a></td>
                                            </form>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->

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