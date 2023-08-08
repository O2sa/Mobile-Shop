<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>متجر هواتف</title>


  <!-- Bootstrap CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Owl-carousel CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

  <!-- font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
    integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

  <!-- Custom CSS file -->
  <link rel="stylesheet" href="./HTML Template/style.css">
  <link rel="stylesheet" href="./HTML Template/style-rtl.css">
</head>

<?php

// import mysql connection 
require('./functions.php');
?>
<body>

  <!-- start #header -->
  <header id="header">
    <div class="stsrip d-flex justify-content-between px-4 py-1 bg-light">
      <p class="font-rale font-size-12 text-black-50 m-0">اليمن صنعاء, شارع 45, 967 777-777-777</p>
      <div class="font-rale font-size-14">
        <a href="#" class="px-3 border-right border-left text-dark lang-switcher">English</a>
        <a href="#" class="px-3 border-right border-left text-dark">تسجيل</a>
        <a href="#" class="px-3 border-right text-dark">المختارات (0)</a>
      </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
      <a class="navbar-brand" href="<?php echo 'index.php' ?> ">متجر هواتف</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav m-auto font-rubik">
          <li class="nav-item active">
            <a class="nav-link" href="#">مشتريات</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">الأقسام</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">المنتجات <i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">المدونة</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">تصنيف <i class="fas fa-chevron-down"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">يصل قريبًا</a>
          </li>
        </ul>
        <form action="#" class="font-size-14 font-rale">
          <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
            <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
            <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($Product->getData('cart'));?></span>
          </a>
        </form>
      </div>
    </nav>
    <!-- !Primary Navigation -->

  </header>
  <!-- !start #header -->


  <!-- start #main-site -->
  <main id="main-site">