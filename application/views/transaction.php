<section id="transaksi-body">
    <div class="container pad-100">
        <div class="desc col-12">
            <ul class="nav nav-tabs justify-content-center" id="tab-transaksi" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="trans-from-tab" data-toggle="tab" href="#trans-form" role="tab" aria-controls="home" aria-selected="true">Beli</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trans-to-tab" data-toggle="tab" href="#trans-to" role="tab" aria-controls="home" aria-selected="true">Jual</a>
                </li>
            </ul>
            <div class="tab-content container" id="tab-content">
                <div class="tab-pane fade show active" id="trans-form" role="tabpanel" aria-labelledby="trans-form-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Justiper</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($user as $user_data) : ?>
                                <tr>
                                    <th scope="row">1</th>
                                    <td><?= $user_data['trans_to'] ?></td>
                                    <td><?= $user_data['judul'] ?></td>
                                    <td><?= $user_data['harga'] ?></td>
                                    <td><?= $user_data['jumlah'] ?></td>
                                    <?php if ($user_data['status'] == '0') { ?>
                                        <td><button type="button" class="btn btn-secondary" disabled> Diproses</button></td>
                                        <td><a href="<?= base_url('transaksi/hapus/') . $user_data['id_transaksi'] ?>">
                                                <button class="btn btn-danger">
                                                    Batalkan Pesanan
                                                </button></a></td>
                                    <?php } else { ?>
                                        <td><button class="btn btn-secondary">Sudah diproses</button></td>
                                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#modalRating">Beri Rating!</button></td>
                                    <?php } ?>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade show" id="trans-to" role="tabpanel" aria-labelledby="trans-to-tab">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pembeli</th>
                                <th scope="col">Buku</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php foreach ($justiper as $justiper_data) : ?>
                                    <th scope="row">1</th>
                                    <td><?= $justiper_data['trans_from'] ?></td>
                                    <td><?= $justiper_data['judul'] ?></td>
                                    <td><?= $justiper_data['harga'] ?></td>
                                    <td><?= $justiper_data['jumlah'] ?></td>
                                    <?php if ($justiper_data['status'] == '0') { ?>
                                        <td>
                                            <a href="<?= base_url('transaksi/confirm/') . $justiper_data['id_transaksi'] ?>">
                                                <button type="button" class="btn btn-primary"> Terima</button>
                                            </a>
                                        </td>
                                    <?php } else { ?>
                                        <td><button class="btn btn-danger">Delete</button></td>
                                    <?php } ?>
                                <?php endforeach ?>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</section>

<section id="modals">
    <div id="ratingModal">
        <div class="modal fade" id="modalRating" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">JustipBook</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('transaksi/rating') ?>">
                        <div class="modal-body">
                            <h5>Beri Rating Untuk Justiper!</h5>
                            <input type="hidden" name="id_transaksi" value="">
                            <div class="radios">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="inlineRadio2" value="2">
                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="inlineRadio3" value="3">
                                    <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="inlineRadio4" value="4">
                                    <label class="form-check-label" for="inlineRadio3">4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="rating" id="inlineRadio5" value="5">
                                    <label class="form-check-label" for="inlineRadio3">5</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Beri Rating</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>