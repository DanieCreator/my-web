<?php require APPROOT . '/views/admin//admin-navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col 8 col-md-8 offset-3">
            <?php flash('Register_success') ?>;
            <h2 class="header text-secondary transition mb-5">Admin Log In</h2>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="police_station_name" class="transition">Police station Name
                    </label>
                    <input type="text" name="pol_sta_name" id="police_station_name" class="form-control form-line form-control-lg <?= (!empty($data['pol_sta_name_err'])) ? ' is-invalid' : '' ?>" placeholder="police station name">
                    <span class="invalid-feedback"><?= $data['pol_sta_name_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="password" class="transition">Password
                    </label>
                    <input type="password" name="password" id="pass" class="form-control form-line form-control-lg <?= (!empty($data['password_err'])) ? ' is-invalid' : '' ?>">
                    <span class=" invalid-feedback"><?= $data['password_err']; ?></span>
                </div>
                <button type=" button" class="btn btn-secondary  transition">Log In</button>
                <button type=" button" class="btn btn-light  float-right  transition"><a href="<?= URLROOT; ?>/administrators/register">Register</a></button>
                <br>
                <p class="lead"><a href="#" class="text-dark mt-3 float-right">Forgot password</a></p>

            </form>
        </div>
    </div>
</div>