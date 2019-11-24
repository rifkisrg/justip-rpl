<section id="wishlist-body">
    <div class="jumbotron pad-100">
        <h1 class="display-4">WISHLIST</h1>
        <hr class="my-4">
    </div>

    <section id="book-wishlist">
        <div class="wishlist-list pad-100">
            <div class="container">
                <?php if($data == false){ ?>
                    <h4>Anda belum memiliki Wishlist</h4>
                <?php } else { foreach ($data as $buku) : ?>
                    <div class="card">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center">
                                <img src="<?= base_url($buku['gambar']) ?>" style="width: 15vw;" alt="">
                            </div>
                            <div class="col-md-8 my-2 px-3 align-items-center">
                                <div class="card-block">
                                    <h4 class="card-title"><?= $buku['judul'] ?></h4>
                                    <p class="card-text"><?= $buku['penulis'] ?></p>
                                    <hr class="my-4">
                                    <a href="<?= base_url('books/detailBuku/') . $buku['id_buku'] ?>">
                                        <button class="btn btn-primary">Detail Buku</button>
                                    </a>
                                    <a href="<?= base_url('wishlist/delete/') . $buku['id_buku'] ?>">
                                        <button class="btn btn-danger">Hapus dari Wishlist</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;} ?>
            </div>
        </div>
    </section>
</section>