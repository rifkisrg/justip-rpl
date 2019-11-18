    <div class="container mb-5">
        <div class="input-group col-12 m-auto">
            <input type="text" class="form-control" placeholder="Cari Buku" id="inputBuku">
            <div class="input-group-btn">
                <button class="btn btn-default">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>

    <section id="book-card" class="m-auto">
        <div class="container">
            <?php foreach ($res as $data) : ?>
                <div class="b-card">
                    <div class="row align-items-center" id="deskBuku">
                        <div class="col-3">
                            <div class="book-pic" style="margin-left: 2rem">
                                <img src="<?= base_url($data['gambar']) ?>" alt="" class="m-2 pt-2 card-img-top" style="width: 10rem">
                            </div>
                        </div>
                        <div class="col-9">
                            <div class="book-desc" style="margin-left: 5rem">
                                <h4 class="mb-5">Judul Buku: <?= $data['judul'] ?></h4>
                                <h6>Penulis: <?= $data['penulis'] ?></h6>
                                <h6 class>Harga: <?= $data['harga'] ?></h6>
                                <a href="" data-toggle="modal" data-target="#book<?= $data['id_buku'] ?>Modal">
                                    <h6>details <i class="fa fa-arrow-right"></i></h6>
                                </a>
                                <div>
                                    <a href="#"><button class="pull-right mr-2 mt-5">Keranjang</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

    <section id="bookModal">

        <!-- Modal -->
        <?php
        foreach ($res as $data) : ?>
            <div class="modal fade" id="book<?= $data['id_buku'] ?>Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"><?= $data['judul'] ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <img src="<?= base_url($data['gambar']) ?>" alt="" class="m-auto pt-2" style="width: 10rem">
                                <div class="m-auto">
                                    <p>Deskripsi: <?= $data['deskripsi'] ?></p>
                                    <p>Kategori: <?= $data['kategori'] ?></p>
                                    <p>Penulis: <?= $data['penulis'] ?></p>
                                    <p>Tahun Terbit: <?= $data['tahun_terbit'] ?></p>
                                    <p>Harga: <?= $data['harga'] ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </section>

    <script src="assets/js/config.js"></script>
</body>

</html>