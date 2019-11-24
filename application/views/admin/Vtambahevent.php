<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="">
                                    <h1 class="h4 text-gray-900 mb-4" style="text-align: center;">Tambah Event</h1>
                                </div>
                                <?= $this->session->flashdata('message1') ?>
                                <?php echo form_open_multipart('admin/addevent'); ?>
                                <form class="user" method="post" action="<?= base_url('admin/addevent'); ?>">
                                    <div class="form-group ">
                                        <?php echo "Poster Event"; ?>
                                        <input type="file" class="form-control form-control-user" id="uploadgambar" name="uploadgambar" placeholder="Upload Poster Event">
                                        <!-- <button>Tambah Gambar</button> -->
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Nama Event"; ?>
                                        <input type="text" class="form-control form-control-user" id="namaevent" name="nama" placeholder="Masukkan Nama Event">
                                        <?= form_error('namaevent', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Lokasi Event"; ?>
                                        <input type="text" class="form-control form-control-user" id="penyelenggara" name="lokasi" placeholder="Masukkan Lokasi">
                                        <?= form_error('penyelenggara', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Tanggal Event"; ?>
                                        <input type="date" class="form-control form-control-user" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal Event">
                                        <?= form_error('tanggal', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Deskripsi"; ?>
                                        <textarea name="deskripsi" id="deskripsi-event" cols="30" rows="10" class="boxsizingBorder"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Tambah Event
                                    </button>
                                    <?php echo form_close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>