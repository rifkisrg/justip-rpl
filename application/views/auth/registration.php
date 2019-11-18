<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Daftar Sekarang</h1>
                            <!-- <h2 class="h6 text-gray-900 mb-4">Sudah Memiliki Akun JustipBook?</h2> -->
                        </div>
                        <div class="text-center">
                            <a class="small text-gray-900 mb-4">Sudah Memiliki Akun JustipBook ? </a>
                            <a class="small" href="<?= base_url('auth') ?>">Masuk</a>
                        </div>
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
                        <hr>
                        <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
                            <div class="form-group">
                                <!-- <div class="col-sm"> -->
                                <?php echo "Nama"; ?>
                                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Masukkan Nama Anda" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger">', '</small>') ?>
                                <!-- </div> -->
                                <!-- <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
                                </div> -->
                            </div>
                            <div class="form-group">

                                <?php echo "Email"; ?>
                                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukkan Email Anda" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <?php echo "Username"; ?>
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Masukkan Username Anda" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                            </div>
                            <!--                             
                            <div class="form-group">
                                
                                <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukkan Password Anda">
                               
                            </div>
                            <div class="form-group">
                                
                                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukkan Kembali Password Anda">
                            </div> -->
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <?php echo "Password"; ?>
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <?php echo "Repeat Password"; ?>
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button href="login.html" class="btn btn-primary btn-user btn-block" type="submit">
                                Daftar
                            </button>
                            <!-- <hr> -->
                            <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                <i class="fab fa-google fa-fw"></i> Register with Google
                            </a>
                            <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                            </a> -->
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                        </div>
                        <div class="text-center">
                            <!-- <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>