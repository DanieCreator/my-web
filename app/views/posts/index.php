<?php
require APPROOT . '/views/includes/header.php';
?>

<div class="container-fluid">

    <?php flash('message'); ?>
    <div class="row mt-5 mb-3">
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
<?php foreach ($data['posts'] as $post) : ?>
    <div class="card card-ody mb-3">
        <h4 class="card-title"> <?php echo $post->title; ?></h4>
        <div class="bg-light p-2 mb-3">
            WRITTEN BY <?php echo $post->firstName . ' ' . $post->lastName; ?> on <?= $post->created_at; ?>
        </div>
        <div class="btn btn-dark btn-block"><a href="<?= URLROOT; ?>/posts/show/<?= $post->postId; ?>">Show</a></div>
    </div>

<?php endforeach; ?>

<?php
require APPROOT . '/views/includes/footer.php';
?>