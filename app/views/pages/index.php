<?php require APPROOT . '/views/includes/header.php'; ?>
<div class="jumbotron jumbotron-fluid text-center">

    <h1 class="display-3"><?= $data['title'] ?></h1>
    <p class="lead"><?= $data['description'] ?></p>


</div>
<div class="container-fluid">
    <div class="row ">
        <div class="card first">
            <div class="row">
                <div class="col-4 col-md-4 first-col">
                    <button class="btn btn-warning btn-small "><a href="<?= URLROOT; ?>/users/register">Register</a></button></div>
                <div class="col-4 col-md-4"></div>
                <div class="col-4 col-md-4"></div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container-fluid">
        <div class="row about mt-5 py-3 mb-3">
            <div class="card mb-3" id="about">
                <div class="row no-gutters">
                    <div class="col-md-4 justify-content-center align-items-center">
                        <div class="card " style="height: 400px;background-color: #4d3af1;"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">About LOST AND FOUND</h5>
                            <p class="card-text text-white">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit perspiciatis tempore sint et nihil, laboriosam quas,
                                iste veritatis fuga labore, provident iure? Quis repudiandae cum voluptatum voluptate qui voluptatem accusamus..</p>
                            <p class="card-text text-white"><small class="text-muted">created @2020</small></p>
                            <button style="background-color: #4d3af1;border-style:none;"><a href="<?= URLROOT ?>/pages/about">about page</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <h2 class="heading text-center mb-5">Lost Persons</h2>
        <div class="row py-5 p-5 " id="persons">

            <div class="card person-card">
                <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="car">
                <img src="<?= URLROOT; ?>/images/daniel.jpg" alt="profile-pic" class="profile">
                <div class="card-body">
                    <h5 class="card-title mb-3">Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Location<br>
                    Age<br>
                    <button class="btn btn-info mt-5">Show</button>
                </div>

            </div>
            <div class="card person-card">
                <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                <img src="<?= URLROOT; ?>/images/daniel.jpg" alt="profile-pic" class="profile">
                <div class=" card-body">
                    <h5 class="card-title mb-3">Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Location<br>
                    Age<br>
                    <button class="btn btn-info mt-5">Show</button>
                </div>
            </div>
            <div class="card person-card">
                <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                <img src="<?= URLROOT; ?>/images/daniel.jpg" alt="profile-pic" class="profile">
                <div class=" card-body">
                    <h5 class="card-title mb-3">Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Location<br>
                    Age<br>
                    <button class="btn btn-info mt-5">Show</button>
                </div>
            </div>
            <div class="card person-card">
                <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                <img src="<?= URLROOT; ?>/images/daniel.jpg" alt="profile-pic" class="profile">
                <div class=" card-body">
                    <h5 class="card-title mb-3">Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Location<br>
                    Age<br>
                    <button class="btn btn-info mt-5">Show</button>
                </div>
            </div>
            <div class="card person-card">
                <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                <img src="<?= URLROOT; ?>/images/daniel.jpg" alt="profile-pic" class="profile">
                <div class=" card-body">
                    <h5 class="card-title mb-3">Name</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    Location<br>
                    Age<br>
                    <button class="btn btn-info mt-5">Show</button>
                </div>
            </div>

            <!-- <div class="card  cards">
            <h4>person4</h4>
        </div> -->
        </div>

    </div>
</section>
<div class="container-fluid">
    <div class="row about mt-5 mb-3">
        <div class="card mb-3" id="about">
            <div class="row no-gutters">
                <div class="col-md-4 justify-content-center align-items-center">
                    <div class="card " style="height: 400px;background-color: #4d3af1;"></div>
                </div>


            </div>
        </div>
    </div>
</div>




<?php require APPROOT . '/views/includes/footer.php'; ?>