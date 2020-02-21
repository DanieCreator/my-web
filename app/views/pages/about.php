<?php
require APPROOT . '/views/includes/header.php'; ?>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid text-center">

        <h1 class="lead text-secondary"><?= $data['title'] ?></h1>
        <p class="lead"><?= $data['description'] ?></p>
    </div>
</div>
<div class="container-fluid">

    <div class="jumbotron jumbotron-fluid text-center">
        <h3>Brief reason for the platform</h3>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="card">
            <div class="card-title">
                <h3>Mission</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>
        </div>


        <div class="card">
            <div class="card-title">
                <h3>Vision</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>
        </div>


        <div class="card">
            <div class="card-title">
                <h3>Core Values</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>

        </div>
    </div>

    <?php require APPROOT . '/views/includes/footer.php'; ?>