<?php
require APPROOT . '/views/admin/admin-navbar.php'; ?>

<body>
    <nav class="navbar navbar-expand navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#mynav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynav">
            <div class="container-fluid">
                <div class="row ">
                    <!--sidebar-->

                    <div class=" col-sm-12 col-lg-2 col-md-2  fixed-top sidebar">
                        <a href="" class="d-block mx-auto text-center py-3 mb-4  bottom-border" style="font-size: 30px;"><?= ADMINSITENAME; ?></a>
                        <ul class="nav-bar-nav flex-column mt-4">
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-home fa-lg mr-3 sidebar-link"></i>Dashboard </a>
                            </li>
                            <li class="nav-item current"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-user fa-lg mr-3 sidebar-link "></i>Profile </a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-inbox fa-lg mr-3 sidebar-link"></i>Inbox</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-line-chart fa-lg mr-3 sidebar-link"></i>Analytics</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-exclamation-circle fa-lg mr-3 sidebar-link"></i>Notifications <span class="badge  bg-success">10</span></a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-briefcase fa-lg mr-3 sidebar-link"></i>Cases </a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="
                    fa fa-users fa-lg mr-3 sidebar-link"></i>Stations</a>
                            </li>
                            <li class="nav-item"><a href="" class="nav-link p-3 mb-2"><i class="fa fa-cog
                     fa-lg mr-3 sidebar-link"></i>Settings </a></li>
                        </ul>
                    </div>
                    <!--end of sidebar-->
                    <!--top nav-->
                    <div class=" col-sm-12 col-lg-10 col-md-10 bg-dark fixed-top top-navbar py-2 ml-auto">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4 ">
                                    <h4 class="text-light text-uppercase mb-0">
                                        DashBoard
                                    </h4>
                                </div>
                                <div class="col-md-4">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control search-input text-white" placeholder="search">
                                            <button class="btn bg-white search-btn " type="button"><i class="fa fa-search text-danger"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-2 ml-auto">
                                    <ul class="navbar-nav ml-auto ml-md-0 ">
                                        <!-- <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-bell text-white"></i></a>
                            </li> -->
                                        <li class="nav-item dropdown ">
                                            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user text-white fa-fw"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                                <a class="dropdown-item" href="<?= URLROOT; ?>/administrators/register">Register</a>
                                                <a class="dropdown-item" href="<?= URLROOT; ?>/administrators/login">Login</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                                <a class="dropdown-item" href="#">Activity Log</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="login.html">Logout</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--end of top nav-->
                    </div>
                </div>
            </div>
        </div>

    </nav>


    <!--section start-->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-10 col-sm-12 col-md-10 ml-auto mt-0">
                    <div class="row pt-5 mt-3 mb-5">
                        <div class=" col-xl-3 col-3 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <i fa fa-user></i>
                                    </div>
                                    <div>
                                        <h3>Cases Reported</h3>
                                        <h2>230</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <i fa fa-user></i>
                                    </div>
                                    <div>
                                        <h3>Station registered</h3>
                                        <h2>85</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <i fa fa-user></i>
                                    </div>
                                    <div>
                                        <h3>client visitors </h3>
                                        <h2>235</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <div>
                                        <i fa fa-user></i>
                                    </div>
                                    <div>
                                        <h3>Pending Cases</h3>
                                        <h2>235</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--end of cards-->
    <!--table-->
    <section>
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-xl-10 col-lg-10 col-md-9 ml-auto">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-muted text-center mb-3">Reported cases</h3>
                            <table class=" text-muted table">
                                <thead class="bg-light">
                                    <tr class="text-muted">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Place lost</th>
                                        <th>Date</th>
                                        <th>Posted By</th>
                                        <th>Contact</th>
                                        <th>Station</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr>
                                        <th>1</th>
                                        <td>Jason Mandela</td>
                                        <td>Kawangware</td>
                                        <td>02-03-2020</td>
                                        <td>James Kiunjuri</td>
                                        <td>0712546789</td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Jason Mandela</td>
                                        <td>Kawangware</td>
                                        <td>02-03-2020</td>
                                        <td>James Kiunjuri</td>
                                        <td>0712546789</td>
                                        <td></td>

                                    </tr>
                                </tbody>

                            </table>
                            <!--pagination-->
                            <nav>
                                <ul class="pagination justify-content-center align-items-center">
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            <span>&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a hr ef="" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            <span>&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                            <!--pagination-end-->
                        </div>
                        <div class="col-12">
                            <h3 class="text-muted text-center mb-3">Recent solved</h3>
                            <!--tables-->
                            <table class=" table-dark table-hover table">
                                <thead>
                                    <tr class="text-muted">
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Place found</th>
                                        <th>Date</th>
                                        <th>station found</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Jason Mandela</td>
                                        <td>Kawangware</td>
                                        <td>02-03-2020</td>
                                        <td>James Kiunjuri</td>
                                        <td>0712546789</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>

                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Jason Mandela</td>
                                        <td>Kawangware</td>
                                        <td>02-03-2020</td>
                                        <td>James Kiunjuri</td>
                                        <td>0712546789</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>

                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Jason Mandela</td>
                                        <td>Kawangware</td>
                                        <td>02-03-2020</td>
                                        <td>James Kiunjuri</td>
                                        <td>0712546789</td>
                                        <td><span class="badge badge-warning w-75 py-2">Dropped</span></td>

                                    </tr>
                                </tbody>

                            </table>
                            <nav>
                                <ul class="pagination justify-content-center align-items-center">
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            <span>prev</span>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            1
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            2
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            3
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="" class="page-link py-2 px-3">
                                            <span>Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-10 col-md-9 ml-auto">
                    <div class="row mb-4">
                        <div class="col-xl-6 col-12">
                            <div class="bg-dark p-5 text-white rounded">
                                <h4 class="mb-4">Progress Report</h4>
                                <h5>Ongoing Cases</h5>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-stripped font-weight-bold " style="width: 78%">78%
                                    </div>
                                </div>
                                <h5>Registered Stations</h5>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-stripped font-weight-bold bg-secondary" style="width: 48%">48%
                                    </div>
                                </div>
                                <h5>Active Stations</h5>
                                <div class="progress" style="height: 20px">
                                    <div class="progress-bar progress-bar-stripped font-weight-bold bg-success" style="width: 56%">56%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-12">
                            <h4 class="text-muted p-3 mb-3">Today's Tasks</h4>
                            <div class="container-fluid bg-white">
                                <div class="row">
                                    <div class="col-1">
                                        <input type="checkbox" name="" id="">
                                    </div>
                                    <div class="col-sm-10 col-9">
                                        <p> Necessitatibus enim cum labore veritatis qui quasi et a harum eligendi autem excepturi dolor ducimus, exercitationem natus laudantium earum provident!</p>
                                    </div>
                                    <div class="col-1">
                                        <a href="" data-toggle="tooltip" title="Edit"><i class="fa fa-edit fa-lg text-success mr-2"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <div class="row">
                    <div class="card admin-card">
                        <h4 class="lead">Number of Cases</h4>
                    </div>
                    <div class="card admin-card">
                        <h4 class="lead">Number of Stations</h4>
                    </div>
                    <div class="card admin-card">
                        <h4 class="lead">Solved Cases</h4>
                    </div>
                    <div class="card admin-card">
                        <h4 class="lead">Number of clients</h4>
                    </div>
                </div>
                <div class="jumbotron  jumbo" style="height: 500px;">
                    <h4 class="lead mt-0">Ongoing Cases</h4>
                    <div class="row">
                        <div class="card person-card" id="persons" style="width: 18rem;">
                            <img src="<?= URLROOT; ?>/images/car1.jpeg" class="card-img-top" alt="car">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                Name<br>
                                Age
                            </div>

                        </div>
                        <div class="card person-card" style="width: 18rem;">
                            <img src="<?= URLROOT; ?>/images/car2.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                Name<br>
                                Age
                            </div>
                        </div>
                        <div class="card person-card" style="width: 18rem;">
                            <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                Name<br>
                                Age
                            </div>
                        </div>
                        <div class="card person-card" style="width: 18rem;">
                            <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                Name<br>
                                Age
                            </div>
                        </div>
                        <div class="card person-card" style="width: 18rem;">
                            <img src="<?= URLROOT; ?>/images/car3.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                Name<br>
                                Age
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

    </div>

    </div>

</body>
<?php require APPROOT . '/views/includes/footer.php'; ?>