<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <?php flash('register_success'); ?>
                <h2 class="header">Log In Into Your Account</h2>
                <p class="lead">please fill in your credentials to Log in. </p>

                <form action="<?= URLROOT; ?>/users/login" method="POST">

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="mail" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="pass" class="form-control form-control-lg <?= (!empty($data['Password_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['Password_err']; ?></span>
                    </div>

                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success btn-block">Log In</button>
                        </div>
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/register" class="btn btn-light btn-block">Don't have an account? Register Here</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/includes/footer.php' ?>