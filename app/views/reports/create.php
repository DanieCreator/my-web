<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container-fluid">
    <h2 class="font-weight-bold py-2">Create Report</h2>

    <form action="<?= URLROOT . '/reports/store' ?>" enctype="multipart/form-data" method="post">
        <div class="row">
            <div class="col-md-6">

                <div class="form-group">
                    <label for="national_id">National ID</label>
                    <input type="text" name="national_id" id="national_id" class="form-control form-control-lg <?= (!empty($data['national_id_err'])) ? ' is-invalid' : '' ?>">
                    <span class="invalid-feedback"><?= $data['national_id_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? ' is-invalid' : '' ?>">
                    <span class="invalid-feedback"><?= $data['title_err']; ?></span>
                </div>

                <div class="from-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control form-control-lg <?= (!empty($data['content_err'])) ? ' is-invalid' : '' ?>" placeholder="Content..."></textarea>
                    <span class="invalid-feedback"><?= $data['content_err']; ?></span>
                </div>

                <div class="form-group">
                    <label for="location">Location</label>
                    <input type="text" name="location" id="location" placeholder="Location..." class="form-control form-control-lg <?= (!empty($data['location_err'])) ? ' is-invalid' : '' ?>">
                    <span class="invalid-feedback"><?= $data['location_err']; ?></span>
                </div>
            </div>
            <div class="col-md-6">

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg <?= (!empty($data['lost_personName_err'])) ? ' is-invalid' : '' ?>">
                    <small class="text-muted">The lost person's name</small><span class="invalid-feedback"><?= $data['lost_personName_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="text" name="age" id="age" class="form-control form-control-lg <?= (!empty($data['age_err'])) ? ' is-invalid' : '' ?>">
                    <small class="text-muted">Persons age</small><span class="invalid-feedback"><?= $data['age_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="complexion">Complexion</label>
                    <input type="text" name="complexion" id="complexion" class="form-control form-control-lg <?= (!empty($data['complexion_err'])) ? ' is-invalid' : '' ?>">
                    <small class="text-muted">Persons complexion</small><span class="invalid-feedback"><?= $data['complexion_err']; ?></span>
                </div>
                <div class="form-group">
                    <label for="photo">Photo</label>
                    <input type="file" name="photo" id="photo" class="form-control-file <?= (!empty($data['photo_err'])) ? ' is-invalid' : '' ?>">
                    <small class="text-muted">Persons complexion</small><span class="invalid-feedback"><?= $data['photo_err']; ?></span>
                </div>
            </div>
        </div>

        <div class="clearfix py-3">
            <button type="submit" class="btn btn-success float-right">Add Report</button>
        </div>
    </form>
</div>


<?php require APPROOT . '/views/includes/footer.php' ?>