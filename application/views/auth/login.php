<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-7">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <?= $this->session->flashdata('message') ?>
                                <div class="">
                                    <h1 class="h4 text-gray-900 mb-4">Masuk</h1>
                                </div>
                                <form class="user" method="post" action="<?= base_url('auth'); ?>">

                                    <div class="form-group">
                                        <?php echo "Username"; ?>
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username Anda" value="<?= set_value('username'); ?>">
                                        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <div class="form-group">
                                        <?php echo "Password"; ?>
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukkan Password Anda">
                                        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                    </div>
                                    <!-- <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div> -->
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Masuk
                                    </button>
                                    <hr>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <a href="index.html" class="btn btn-google btn-user btn-block">
                                                <i class="fab fa-google fa-fw"></i> Register with Google
                                            </a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                </form>
                                <!-- <hr> -->
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div> -->
                                <div class="text-center">
                                    <a class="small"> Belum Mempunyai Akun JustipBook?</a>
                                    <a class="small" href="<?= base_url('auth/registration') ?>">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>