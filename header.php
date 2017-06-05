<!DOCTYPE html>
<html lang="en">
<?php
$title = "Rural";
$description = "La nueva ruralidad, en convivencia con lo urbano";
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="<?php echo($description);?>">
<meta name="author" content="María Paz Núñez Olea">
<meta name="title" content="<?php echo($title);?>">
  <title><?php echo($title);?></title>
  <meta name="robots" content="noindex">
  <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/business-casual.css" rel="stylesheet">
  <?php if((basename($_SERVER['PHP_SELF']))=='php_csv.php'){?>
  <style>.col-sm-6:nth-child(2n+1) {clear: both;}</style>
  <?php };?>

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }

    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>

</head>

<body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-4 hidden-md-down"><?php echo($title);?> </div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-4 hidden-md-down"><?php echo($description);?></div>

    <!-- Navigation -->
    <nav class="navbar navbar-toggleable-md navbar-light navbar-custom bg-faded py-lg-4">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container">
            <a class="navbar-brand text-uppercase text-expanded font-weight-bold hidden-lg-up" href="#">Start Bootstrap</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav mx-auto">

                    <li  class="nav-item active px-lg-4" <?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>>
                        <a class="nav-link text-uppercase text-expanded" href="index.php">Articulos</a>
                    </li>
                    <li class="nav-item active px-lg-4" <?php if((basename($_SERVER['PHP_SELF']))=='about.php'){?> class="active" <?php };?> >
                        <a class="nav-link text-uppercase text-expanded" href="about.php">Bibliografia</a>
                    </li>
                    <li class="nav-item active px-lg-4" <?php if((basename($_SERVER['PHP_SELF']))=='viz.php'){?> class="active" <?php };?> >
                        <a class="nav-link text-uppercase text-expanded" href="viz.php">Vizualiciones</a>
                    </li>
                    <li class="nav-item active px-lg-4" <?php if((basename($_SERVER['PHP_SELF']))=='ante.php'){?> class="active" <?php };?> >
                        <a class="nav-link text-uppercase text-expanded" href="ante.php">Antecedentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
