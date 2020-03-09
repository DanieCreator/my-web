<?php require APPROOT . '/views/includes/header.php'; ?>
<a class="btn btn-light" href="<?= URLROOT; ?>/posts"><i class="fa fa-backward"></i> back</a>
<h4><?= $data['post']->title; ?></h4>
<div class="bg-secondary p-3 text-white mb-3">
    Written by <?= $data['user']->lastName; ?> 0n <?= $data['post']->created_at; ?><br>

</div>
<p> <?= $data['post']->Body; ?></p>