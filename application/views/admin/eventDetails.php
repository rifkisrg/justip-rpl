    <?php foreach ($event as $detail) : ?>
        <div class="container-fluid">
            <div class="container">
                <div class="box">
                    <center>
                        <h2>Detail Event</h2>
                    </center>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="<?= base_url('admin/editevent/') . $detail['id_event']?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Edit Event</a>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">

                        <div class="col-md-8">
                            <div class="m-auto">
                                <img class="img-fluid" src="<?= base_url($detail['image']) ?>" alt="" style="width: 50%">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <h3 class="my-3">Event Names</h3>
                            <p><?= $detail['nama'] ?></p>
                            <h3 class="my-3">Event Details</h3>
                            <ul>
                                <li>Tanggal: <?= $detail['tanggal'] ?></li>
                                <li>Lokasi: <?= $detail['lokasi'] ?></li>
                            </ul>
                        </div>

                    </div>
                    <div class="container my-3">
                        <h4 class="text-center">Daftar Buku</h4>
                        <table class="table table-bordered" id="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Penulis</th>
                                    <th>Harga</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                    foreach ($buku as $booksDetail) : ?>
                                    <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $booksDetail['judul'] ?></td>
                                        <td><?= $booksDetail['kategori'] ?></td>
                                        <td><?= $booksDetail['penulis'] ?></td>
                                        <td><?= $booksDetail['harga'] ?></td>
                                        <td>
                                            <form action="<?= base_url('admin/hapusBukuFromEvent') ?>" method="post">
                                                <input type="hidden" name="id_event" value="<?= $detail['id_event'] ?>">
                                                <input type="hidden" name="id_eventsbook" value="<?= $booksDetail['id_eventsbook'] ?>">
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambahBuku">Tambah Buku</button>
                    </div>
                </div>
            </div>

        </div>

        <div class="modal fade" id="modalTambahBuku" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Buku</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('admin/tambahBukuToEvent') ?>" method="post">
                            <input type="hidden" name="id_event" value="<?= $detail['id_event'] ?>">
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Tambah Buku pada Event Ini:</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="id_buku">
                                    <?php foreach ($semuabuku as $detail) : ?>
                                        <option value="<?= $detail['id_buku'] ?>"> <?= $detail['judul'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah Buku</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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