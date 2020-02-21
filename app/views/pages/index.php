<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center">

    <h1 class="display-3"><?= $data['title'] ?></h1>
    <p class="lead"><?= $data['description'] ?></p>


</div>
<div class="container-fluid">
    <div class="row first">
        <div class="card">
            <h4>center</h4>
        </div>
    </div>
    <div class="row">
        <div class="card person">
            <h4>person1</h4>
        </div>
        <div class="card  person">
            <h4>person1</h4>
        </div>
        <div class="card person">
            <h4>person1</h4>
        </div>
        <div class="card  person">
            <h4>person1</h4>
        </div>
    </div>
</div>



<?php require APPROOT . '/views/includes/footer.php'; ?>