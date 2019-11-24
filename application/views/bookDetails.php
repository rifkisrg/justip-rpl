    <?php foreach ($detail as $det) : ?>
        <div class="jumbotron pad-100" style="background: #FAF8EF;">
            <h1 class="display-4"><?= $det['judul'] ?></h1>
            <p class="lead"><?= $det['penulis'] ?></p>
            <hr class="my-4">
            <?php if ($statusBuku) { ?>
                <a href="<?= base_url('wishlist/add/') . $det['id_buku'] ?>">
                    <button class="btn btn-primary">tambah wishlist</button>
                </a>
                <?php }else{ ?>
                <button type="button" class="btn btn-secondary btn-lg" disabled>Sudah di Wishlist Anda</button>
            <?php } ?>
        </div>

        <section id="bookdetail-body">
            <div class="container pad-100">
                <div class="desc col-12">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="deskripsi-tab" data-toggle="tab" href="#deskripsi" role="tab" aria-controls="home" aria-selected="true">Deskripsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="detail-tab" data-toggle="tab" href="#detail" role="tab" aria-controls="profile" aria-selected="false">Detail</a>
                        </li>
                    </ul>
                    <div class="tab-content container" id="myTabContent">
                        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel" aria-labelledby="home-tab"><?= $det['deskripsi'] ?></div>
                        <div class="tab-pane fade" id="detail" role="tabpanel" aria-labelledby="profile-tab">Detail disini</div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach ?>