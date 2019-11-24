    <?php foreach ($events as $detail) : ?>
        <div class="jumbotron pad-100" style="background: #FAF8EF;">
            <h1 class="display-4"><?= $detail['nama'] ?></h1>
            <p class="lead"><?= $detail['lokasi'] ?></p>
            <hr class="my-4">
        </div>

        <section id="eventdetail-body">
            <div class="container pad-100">
                <div class="desc col-12">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="profile" aria-selected="false">Buku</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="justipers-tab" data-toggle="tab" href="#justipers" role="tab" aria-controls="profile" aria-selected="false">Justipers</a>
                        </li>
                    </ul>
                    <div class="tab-content container" id="myTabContent">
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="deskripsi-tab"><?= $detail['deskripsi'] ?></div>
                        <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="detail-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Penulis</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($books as $booksDetail) : ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?= $booksDetail['judul'] ?></td>
                                            <td><?= $booksDetail['kategori'] ?></td>
                                            <td><?= $booksDetail['penulis'] ?></td>
                                            <td><?= $booksDetail['harga'] ?></td>
                                            <td>
                                                <a href="<?= base_url('books/detailBuku/') . $booksDetail['id_buku'] ?>" target="_blank">
                                                    <button class="btn btn-primary">Detail Buku</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalJustipin">Justipin!</button>
                        </div>
                        <div class="tab-pane fade" id="justipers" role="tabpanel" aria-labelledby="justipers-tab">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Username</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($justipers as $justip) : ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?= $justip['name'] ?></td>
                                            <td><?= $justip['username'] ?></td>
                                            <td>
                                                <a href="instagram.com/<?= $justip['instagram'] ?>" target="_blank">
                                                    <button class="btn btn-primary">Detail Justiper</button>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <?php if ($status) { ?>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modalJustipers">Daftar Menjadi Justipers!</button>
                            <?php } else { ?>
                                <button type="button" class="btn btn-secondary btn-lg" disabled>Anda sudah terdaftar!</button>
                                <button class="btn pull-right btn-danger" data-toggle="modal" data-target="#modalBerhenti">Berhenti menjadi justipers!</button>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="modals">
            <div id="justipinModal">
                <div class="modal fade" id="modalJustipin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Justipin aja!</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="<?= base_url('transaksi/tambah') ?>" method="post">
                                    <input type="hidden" name="id_event" value="<?= $detail['id_event'] ?>">
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Buku: </label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="buku">
                                            <?php foreach ($books as $booksDetail) :  ?>
                                                <option><?= $booksDetail['judul'] ?> </option>
                                            <?php endforeach ?>
                                        </select>
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1">Justipers: </label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="justiper">
                                            <?php foreach ($justipers as $justip) :  ?>
                                                <option><?= $justip['username'] ?> </option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="jumlah-buku">Jumlah Buku</label>
                                        <input type="number" class="form-control" id="inputJumlahBuku" aria-describedby="jumlah-buku" placeholder="" name="jumlah">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Beli</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="justiperModal">
                <div class="modal fade" id="modalJustipers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">JustipBook</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Anda yakin ingin mendaftar menjadi justipers?</h5>
                                <small class="form-text text-muted">Data yang digunakan adalah data profil anda.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('justipers/daftar/') . $detail['id_event'] ?>">
                                    <button type="button" class="btn btn-primary">Daftar Justipers!</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="berhentiModal">
                <div class="modal fade" id="modalBerhenti" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">JustipBook</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h5>Anda yakin ingin berhenti menjadi justipers?</h5>
                                <small class="form-text text-muted">Tenang, Anda dapat mendaftar kembali.</small>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= base_url('justipers/berhenti/') . $detail['id_event'] ?>">
                                    <button type="button" class="btn btn-primary">Berhenti</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach ?>

    </body>

    </html>