    <?php foreach ($buku as $detail) : ?>
        <div class="container-fluid">
            <div class="container">
                <div class="box">
                    <center>
                        <h2>Detail Buku <?= $detail['judul'] ?></h2>
                    </center>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?= base_url('admin/editbuku/') . $detail['id_buku'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit Buku</a>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="m-auto">
                                <img class="img-fluid" src="<?= base_url($detail['gambar']) ?>" alt="" style="width: 15rem">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3"><b>Deskripsi Buku</b></h3>
                            <p><?= $detail['deskripsi'] ?></p>
                            <h3 class="my-3"><b>Detail Buku</b></h3>
                            <ul>
                                <li>Kategori: <?= $detail['kategori'] ?></li>
                                <li>Penulis: <?= $detail['penulis'] ?></li>
                                <li>Tahun Terbit: <?= $detail['tahun_terbit'] ?></li>
                                <li>Harga: <?= $detail['harga'] ?></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

        </div>

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
    <?php endforeach ?>