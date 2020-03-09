<?php
require APPROOT . '/views/includes/header.php'; ?>
<div class="container-fluid">
    <div class="jumbotron jumbotron-fluid text-center">

        <h1 class="lead text-secondary"><?= $data['title'] ?></h1>
        <p class="lead"><?= $data['description'] ?></p>
    </div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-10">

            <div class="card " style="height: 400px">
                <div class="card-header text-center"> Brief history</div>
            </div>
        </div>
    </div>

</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 mt-5 py-3">
            <div class="card values-card" style="height: 900px;">
                <div class="row mb-3 p-3 mt-5">
                    <div class="col-6 col-md-6 col-sm-12 mb-3">

                        <div class="card mb-3 p-3 card-values bg-warning justify-content-center align-items-center">
                            <h3 class="lead  heading text-dark mb-4">Mission</h3>

                            <p class="mt-3 text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Ea commodi architecto voluptatum a aperiam aspernatur quidem officia vel delectus eius consectetur rerum distinctio,
                                neque labore, unde ratione, laborum quaerat sed.</p>
                        </div>

                    </div>
                </div>
                <div class="row mb-3 p-3">
                    <div class="col-6 col-md-6 col-sm-12">

                    </div>
                    <div class="col-6 col-md-6 col-sm-12 mb-3">
                        <div class="card mb-3 p-3 py-3 card-values2 justify-content-center align-items-center">
                            <h3 class="lead  heading mb-4">Vision</h3>

                            <p class="mt-3 lead">
                                Dolorem, neque alias sequi aliquid architecto illum quae iusto unde ipsam impedit quis quo facere laboriosam dolorum voluptates,
                                veniam esse quos qui.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 p-3">
                    <div class="col-6 col-sm-12 col-md-6 ">
                        <div class="card mb-3  p-3 card-values justify-content-center align-items-center">
                            <h3 class="lead   heading mb-4">Core Values</h3>

                            <p class="mt-3 lead text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Culpa cupiditate, a natus ratione non laboriosam est nesciunt corrupti quasi dolore eligendi, nihil qui velit beatae dicta.
                                Quibusdam ullam assumenda aut.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="row">
        <div class="card cards">
            <div class="card-title">
                <h3>Mission</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>
        </div>


        <div class="card cards">
            <div class="card-title">
                <h3>Vision</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>
        </div>


        <div class="card cards">
            <div class="card-title">
                <h3>Core Values</h3>
            </div>
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Et pariatur quasi iusto impedit ad minima delectus sapiente non quisquam eos ratione,
                est quis veniam minus fugiat similique amet ipsum odio?</p>

        </div> -->
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>