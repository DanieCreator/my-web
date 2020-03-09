 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Administrator</title>
     <link rel="stylesheet" href="<?= URLROOT; ?>/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Cormorant+SC|Montserrat&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="<?= URLROOT; ?> /css/stlye.css">
 </head>

 <div class="container-fluid">
     <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
         <a class="navbar-brand" href="<?= URLROOT; ?>/admin"><?= ADMINSITENAME; ?></a>
         <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fa fa-bars"></i>

         </button>
         <!-- Navbar Search-->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0">
             <div class="input-group">
                 <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                 <div class="input-group-append">
                     <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                 </div>
             </div>
         </form>

         <nav class="navbar navbar-expand-lg navbar-light bg-secondary mb-5">
             <div class="container">

                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                 </button>
             </div>
             <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav ml-auto pr-5 ">
                     <li class="nav-item ">
                         <a class="nav-link pr-5" href="<?= URLROOT; ?>/pages">Home </span></a>
                     </li>

                     <li class="nav-item ">

                     <li class="nav-item pr-5">
                         <a class="nav-link" href="#">News & Events</a>
                     </li>
                     <li class="nav-item pr-5">
                         <a class="nav-link" href="#">Activites </a>
                     </li>
                     </li>
                 </ul>
                 <div class="dropdown ">
                     <i class=" fa fa-user-circle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                     Admin
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <a class="dropdown-item" href="<?= URLROOT; ?>/administrators/register">Register</a>
                         <a class="dropdown-item" href="<?= URLROOT; ?>/administrators/login">Log in</a>
                         <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                 </div>
             </div>

         </nav>
 </div>

 <body>