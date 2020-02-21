<?php
require APPROOT . '/views/includes/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h3>posts</h3>
        </div>
        <div class="col-md-6">
            <a href="<?= URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
                <i class="fa fa-pencil"></i>ADD POST
            </a>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>