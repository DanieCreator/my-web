<?php
require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card card-body bg-light mt-5">
                <h2 class="header">Admin Register</h2>
                <p class="lead">please fill out this filed to register as Admin </p>

                <form action="<?= URLROOT; ?>/users/register" method="POST">
                    <div class="form-group">
                        <label for="pol_station_name">Police Station Name</label>
                        <input type="text" name="pol_name" class="form-control form-control-lg <?= (!empty($data['fname_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['fname_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="lname" class="form-control form-control-lg <?= (!empty($data['lname_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['lname_err']; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile</label>
                        <input type="mobile" name="mobile" class="form-control form-control-lg <?= (!empty($data['Mobile_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['Mobile_err']; ?></span>
                    </div>
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
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_pass" class="form-control form-control-lg <?= (!empty($data['Confirm_Password_err'])) ? ' is-invalid' : '' ?>">
                        <span class="invalid-feedback"><?= $data['Confirm_Password_err']; ?></span>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button class="btn btn-success btn-block">Register</button>
                        </div>
                        <div class="col">
                            <a href="<?= URLROOT; ?>/users/login" class="btn btn-light btn-block">Have an account? Login</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php' ?>