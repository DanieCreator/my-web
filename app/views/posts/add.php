<?php require_once APPROOT . '/views/includes/header.php'; ?>
<div class="container">

    <a class="btn btn-light"><i class="fa fa-backward"></i> back</a>
    <div class="card card-body bg-light mt-5">

        <h2 class="header">Add your Post</h2>


        <form action="<?= URLROOT; ?>/posts/add" method="POST">

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name='title' value="<?= $data['title']; ?>" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? ' is-invalid' : '' ?>">
                <span class="invalid-feedback"><?= $data['title_err']; ?></span>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea type="text" name="body" class="form-control form-control-lg <?= (!empty($data['body_err'])) ? ' is-invalid' : '' ?>"></textarea>
                <span class="invalid-feedback"><?= $data['body_err']; ?></span>
            </div>



            <button class="btn btn-dark">Add</button>



        </form>
    </div>


    <?php require APPROOT . '/views/includes/footer.php' ?>