<section class="pad-100" id="form-profile" class="mb-5">
    <div class="container">
        <div class="m-auto">
            <form action="<?= base_url('user/edit') ?>" class="form-horizontal" role="form" method="post">
                <?php foreach ($user as $data) : ?>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Username:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="<?= $data['username'] ?>" name="username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nama:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="<?= $data['name'] ?>" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Instagram:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="<?= $data['instagram'] ?>" name="instagram">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="email" value="<?= $data['email'] ?>" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">New Password:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="password" value="" name="password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Edit Profile</button>
                <?php endforeach ?>
            </form>
        </div>
    </div>
</section>