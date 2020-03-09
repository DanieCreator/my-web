<?php require APPROOT . '/views/admin//admin-navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col 8 col-md-8 offset-3">
            <h2 class="header text-secondary ">Admin Registration</h2>
            <form action="<?= URLROOT; ?>/administrators/register" method="POST" name="adminRegisterForm">
                <div class="form-group transition" class="transition">
                    <label for="police_station_name">Police station name
                    </label>
                    <input type="text" name="pol_sta_name" value="<?= $data['pol_name']; ?>" id="police_station_name" class="form-control form-line form-control-lg <?= (!empty($data['pol_sta_name_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                    <span class="invalid-feedback"><?= $data['pol_sta_name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="police_station_area">Police station area
                    </label>
                    <input type="text" name="pol_sta_area" value="<?= $data['pol_area'] ?>" id="police_station_area" class="form-control  form-line form-control-lg <?= (!empty($data['pol_sta_area_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                    <span class="invalid-feedback"><?= $data['pol_sta_area_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="police_station_address">Police station location address
                    </label>
                    <input type="text" name="pol_sta_address" value="<?= $data['pol_address'] ?>" id="police_station_address" class="form-control  form-line form-control-lg <?= (!empty($data['pol_sta_address_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                    <span class="invalid-feedback"><?= $data['pol_sta_address_err']; ?></span>
                </div>
                <div class="form-group">
                    <h3 class="text-secondary">police station contacts</h3>
                    <div class="row">
                        <div class="col-4 col-md-4">
                            <label for="police_station_contact">Contact 1
                            </label>
                            <input type="text" name="pol_sta_contact1" value="<?= $data['pol_contact1'] ?>" id="police_station_contact1" class="form-control  form-line form-control-lg <?= (!empty($data['pol_sta_contact1_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                            <span class="invalid-feedback"><?= $data['pol_sta_contact1_err']; ?></span>
                        </div>
                        <div class="col-4 col-md-4">
                            <label for="police_station_contact2">Contact 2
                            </label>
                            <input type="text" name="pol_sta_contact2" id="police_station_contact2" value="<?= $data['pol_contact2'] ?>" class="form-control  form-line form-control-lg <?= (!empty($data['pol_sta_contact2_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                            <span class="invalid-feedback"><?= $data['pol_sta_contact2_err']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="police_station_admin">Police station admin Name
                    </label>
                    <input type="text" name="pol_sta_admin" value="<?= $data['pol_sta_admin_name'] ?>" id="police_station_admin" class="form-control  form-line form-control-lg <?= (!empty($data['pol_sta_admin_name_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                    <span class="invalid-feedback"><?= $data['pol_sta_admin_name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="email">Email
                    </label>
                    <input type="email" name="email" value="<?= $data['email'] ?>" id="email" class="form-control form-line form-control-lg <?= (!empty($data['email_err'])) ? ' is-invalid' : '' ?>" placeholder="">
                    <span class="invalid-feedback"><?= $data['email_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password">Password
                    </label>
                    <input type="password" name="password" id="pass" class="form-control form-line form-control-lg <?= (!empty($data['password_err'])) ? ' is-invalid' : '' ?>">
                    <span class="invalid-feedback"><?= $data['password_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password
                    </label>
                    <input type="password" name="confirm_password" id="confirm_pass" class="form-control  form-line form-control-lg <?= (!empty($data['confirm_password_err'])) ? ' is-invalid' : '' ?>">
                    <span class="invalid-feedback"><?= $data['confirm_password_err']; ?></span>
                </div>
                <button type="buttton" name="submit" class="btn  btn-light">Register</button>
                <buttuon class="btn btn-light pull-right"><a href="<?= URLROOT; ?>/administrators/login">Have an account?Login</a></button>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/includes/footer.php'; ?>