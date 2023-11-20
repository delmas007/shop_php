<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>
   MPK-BOUTIK
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.php">
          <span>
            MPK-BOUTIK
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  ">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">PAGE D'ACCEUIL <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="bureau.php">
                Bureau
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clavier.php">
                Clavier
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cle.php">
                Cle
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="fibre.php">
                Fibre
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ordinateur.php">
                Ordinateur
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="serveur.php">
                Serveur
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="souris.php">
                Souris
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="imprimante.php">
                Imprimante
              </a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="temoignage.php">
                Temoignage
              </a>
            </li>
            
          </ul>
          <div class="user_option">
              <?php
              if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
                  echo '<a href="deconnexion.php">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                <span>Déconnexion</span>
              </a>
                <a href="#" id="cart-icon">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <span id="cart-count">0</span>
                </a>';
              } else {
                  echo '<a href="connexion/index.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Connexion</span>
              </a>';
                  echo '<a href="inscription/index.php">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>Inscription</span>
              </a>';
              }
              ?>
              <a href="">
              <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            </a>
            <form class="form-inline ">
              <button class="btn nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->

    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        bienvenue <br>
                        chez mpk-boutik
                      </h1>
                      <p>
                        ici nous vous offrons des materiels informatiques de tout genre et de toute taille de meilleurs qualites, a des prix raisonnables avec une garantie de 2 mois  .
                      </p>
                      <a href="contact.php">
                        Contactez nous
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/image_search_60.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                        bienvenue <br>
                        chez mpk-boutik
                      </h1>
                      <p>
                        ici nous vous offrons des materiels informatiques de tout genre et de toute taille de meilleurs qualites, a des prix raisonnables avec une garantie de 2 mois .
                      </p>
                      <a href="contact.php">
                        contactez nous
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/image_search_60.png" alt="" />
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>
                         bienvenue<br>
                         chez mpk-boutik
                      </h1>
                      <p>
                        ici nous vous offrons des materiels informatiques de tout genre et de toute taille de meilleurs qualites, a des prix raisonnables avec une garantie de 2 mois .
                      </p>
                      <a href="contact.php">
                        Contactez nous
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img src="images/image_search_60.png" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Articles disponibles
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="ordinateur.php">
              <div class="img-box">
                <img src="images/image_search_51.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ordinateur
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  new
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="imprimante.php">
              <div class="img-box">
                <img src="images/image_search_15.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Imprimante
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="clavier.php">
              <div class="img-box">
                <img src="images/image_search_16.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Clavier
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="serveur.php">
              <div class="img-box">
                <img src="images/image_search_33.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  serveur
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="bureau.php">
              <div class="img-box">
                <img src="images/image_search_9.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Bureau
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="souris.php">
              <div class="img-box">
                <img src="images/1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  souris
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="fibre.php">
              <div class="img-box">
                <img src="images/image_search_55.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Fibre optique
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="cle.php">
              <div class="img-box">
                <img src="images/image_search_56.png" alt="il s'agit d'une clé usb">
              </div>
              <div class="detail-box">
                <h6>
                  Clé USB
                </h6>
                <h6>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- saving section -->

  <section class="saving_section ">
    <div class="box">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="img-box">
              <img src="images/saving-img.png" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Decouvrez le meilleur de nos matériels <br>
                  informatiques qualités prix
                </h2>
              </div>
              <p>
                
              </p>
              <div class="btn-box">
                
                <a href="shop.php" class="btn1">
                  Acheter maintenant
                </a>
                <a href="shop.php" class="btn2">
                  voir plus
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end saving section -->

  <!-- why section -->

  <section class="why_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          pourquoi acheter chez nous
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M476.158,231.363l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392
                 V110.63c0-9.136-7.432-16.568-16.568-16.568H50.772c-9.136,0-16.568,7.432-16.568,16.568V256c0,4.427,3.589,8.017,8.017,8.017
                 c4.427,0,8.017-3.589,8.017-8.017V110.63c0-0.295,0.239-0.534,0.534-0.534h307.841c0.295,0,0.534,0.239,0.534,0.534v145.372
                 c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.569c0.008,0,0.014,0.002,0.021,0.002
                 c0.008,0,0.015-0.001,0.022-0.001c11.637,0.008,21.518,7.646,24.912,18.171h-24.928c-4.427,0-8.017,3.589-8.017,8.017v17.102
                 c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962c-6.886-19.883-25.787-34.205-47.982-34.205
                 s-41.097,14.322-47.982,34.205h-3.86v-60.393c0-4.427-3.589-8.017-8.017-8.017c-4.427,0-8.017,3.589-8.017,8.017v60.391H192.817
                 c-6.886-19.883-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637
                 h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017c-4.427,0-8.017,3.589-8.017,8.017
                 s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304c-0.002,0.178-0.014,0.355-0.014,0.534
                 c0,27.996,22.777,50.772,50.772,50.772s50.772-22.776,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h180.67
                 c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.996,22.777,50.772,50.772,50.772c27.995,0,50.772-22.776,50.772-50.772
                 c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511C512,251.989,496.423,234.448,476.158,231.363z
                  M375.182,144.301h60.392c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V144.301z M375.182,230.881v-52.376h71.235
                 l13.094,52.376H375.182z M144.835,401.904c-19.155,0-34.739-15.583-34.739-34.739s15.584-34.739,34.739-34.739
                 c19.155,0,34.739,15.583,34.739,34.739S163.99,401.904,144.835,401.904z M427.023,401.904c-19.155,0-34.739-15.583-34.739-34.739
                 s15.584-34.739,34.739-34.739c19.155,0,34.739,15.583,34.739,34.739S446.178,401.904,427.023,401.904z M495.967,299.29h-9.086
                 c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V299.29z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M144.835,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C161.403,358.029,153.971,350.597,144.835,350.597z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M427.023,350.597c-9.136,0-16.568,7.432-16.568,16.568c0,9.136,7.432,16.568,16.568,16.568
                 c9.136,0,16.568-7.432,16.568-16.568C443.591,358.029,436.159,350.597,427.023,350.597z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M332.96,316.393H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96
                 c4.427,0,8.017-3.589,8.017-8.017S337.388,316.393,332.96,316.393z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M127.733,282.188H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614
                 c4.427,0,8.017-3.589,8.017-8.017S132.16,282.188,127.733,282.188z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M278.771,173.37c-3.13-3.13-8.207-3.13-11.337,0.001l-71.292,71.291l-37.087-37.087c-3.131-3.131-8.207-3.131-11.337,0
                 c-3.131,3.131-3.131,8.206,0,11.337l42.756,42.756c1.565,1.566,3.617,2.348,5.668,2.348s4.104-0.782,5.668-2.348l76.96-76.96
                 C281.901,181.576,281.901,176.501,278.771,173.37z" />
                  </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>
            </div>
            <div class="detail-box">
              <h5>
                livraison rapide
              </h5>
              <p>
                livraison partout a abidjan et a l'interieur
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
                <g>
                  <g>
                    <path d="M138.667,192H96c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667
                 v-74.667h32c5.888,0,10.667-4.779,10.667-10.667S144.555,192,138.667,192z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M117.333,234.667H96c-5.888,0-10.667,4.779-10.667,10.667S90.112,256,96,256h21.333c5.888,0,10.667-4.779,10.667-10.667
                 S123.221,234.667,117.333,234.667z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
                 S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
                 S368.853,469.333,245.333,469.333z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M386.752,131.989C352.085,88.789,300.544,64,245.333,64s-106.752,24.789-141.419,67.989
                 c-3.691,4.587-2.965,11.307,1.643,14.997c4.587,3.691,11.307,2.965,14.976-1.643c30.613-38.144,76.096-60.011,124.8-60.011
                 s94.187,21.867,124.779,60.011c2.112,2.624,5.205,3.989,8.32,3.989c2.368,0,4.715-0.768,6.677-2.347
                 C389.717,143.296,390.443,136.576,386.752,131.989z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M376.405,354.923c-4.224-4.032-11.008-3.861-15.061,0.405c-30.613,32.235-71.808,50.005-116.011,50.005
                 s-85.397-17.771-115.989-50.005c-4.032-4.309-10.816-4.437-15.061-0.405c-4.309,4.053-4.459,10.816-0.405,15.083
                 c34.667,36.544,81.344,56.661,131.456,56.661s96.789-20.117,131.477-56.661C380.864,365.739,380.693,358.976,376.405,354.923z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M206.805,255.723c15.701-2.027,27.861-15.488,27.861-31.723c0-17.643-14.357-32-32-32h-21.333
                 c-5.888,0-10.667,4.779-10.667,10.667v42.581c0,0.043,0,0.107,0,0.149V288c0,5.888,4.779,10.667,10.667,10.667
                 S192,293.888,192,288v-16.917l24.448,24.469c2.091,2.069,4.821,3.115,7.552,3.115c2.731,0,5.461-1.045,7.531-3.136
                 c4.16-4.16,4.16-10.923,0-15.083L206.805,255.723z M192,234.667v-21.333h10.667c5.867,0,10.667,4.779,10.667,10.667
                 s-4.8,10.667-10.667,10.667H192z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M309.333,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S315.221,192,309.333,192h-42.667
                 c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                 S315.221,277.333,309.333,277.333z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M288,234.667h-21.333c-5.888,0-10.667,4.779-10.667,10.667S260.779,256,266.667,256H288
                 c5.888,0,10.667-4.779,10.667-10.667S293.888,234.667,288,234.667z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M394.667,277.333h-32v-64h32c5.888,0,10.667-4.779,10.667-10.667S400.555,192,394.667,192H352
                 c-5.888,0-10.667,4.779-10.667,10.667V288c0,5.888,4.779,10.667,10.667,10.667h42.667c5.888,0,10.667-4.779,10.667-10.667
                 S400.555,277.333,394.667,277.333z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path d="M373.333,234.667H352c-5.888,0-10.667,4.779-10.667,10.667S346.112,256,352,256h21.333
                 c5.888,0,10.667-4.779,10.667-10.667S379.221,234.667,373.333,234.667z" />
                  </g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
                <g>
                </g>
              </svg>
            </div>
            <div class="detail-box">
              <h5>
                livraison gratuite
              </h5>
              <p>
                livraison gratuite a yopougon, abobo et cocody
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box ">
            <div class="img-box">
              <svg id="_30_Premium" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="30_Premium">
                <g id="filled">
                  <path d="m252.92 300h3.08a124.245 124.245 0 1 0 -4.49-.09c.075.009.15.023.226.03.394.039.789.06 1.184.06zm-96.92-124a100 100 0 1 1 100 100 100.113 100.113 0 0 1 -100-100z" />
                  <path d="m447.445 387.635-80.4-80.4a171.682 171.682 0 0 0 60.955-131.235c0-94.841-77.159-172-172-172s-172 77.159-172 172c0 73.747 46.657 136.794 112 161.2v158.8c-.3 9.289 11.094 15.384 18.656 9.984l41.344-27.562 41.344 27.562c7.574 5.4 18.949-.7 18.656-9.984v-70.109l46.6 46.594c6.395 6.789 18.712 3.025 20.253-6.132l9.74-48.724 48.725-9.742c9.163-1.531 12.904-13.893 6.127-20.252zm-339.445-211.635c0-81.607 66.393-148 148-148s148 66.393 148 148-66.393 148-148 148-148-66.393-148-148zm154.656 278.016a12 12 0 0 0 -13.312 0l-29.344 19.562v-129.378a172.338 172.338 0 0 0 72 0v129.38zm117.381-58.353a12 12 0 0 0 -9.415 9.415l-6.913 34.58-47.709-47.709v-54.749a171.469 171.469 0 0 0 31.467-15.6l67.151 67.152z" />
                  <path d="m287.62 236.985c8.349 4.694 19.251-3.212 17.367-12.618l-5.841-35.145 25.384-25c7.049-6.5 2.89-19.3-6.634-20.415l-35.23-5.306-15.933-31.867c-4.009-8.713-17.457-8.711-21.466 0l-15.933 31.866-35.23 5.306c-9.526 1.119-13.681 13.911-6.634 20.415l25.384 25-5.841 35.145c-1.879 9.406 9 17.31 17.367 12.618l31.62-16.414zm-53-32.359 2.928-17.615a12 12 0 0 0 -3.417-10.516l-12.721-12.531 17.658-2.66a12 12 0 0 0 8.947-6.5l7.985-15.971 7.985 15.972a12 12 0 0 0 8.947 6.5l17.658 2.66-12.723 12.535a12 12 0 0 0 -3.417 10.516l2.928 17.615-15.849-8.231a12 12 0 0 0 -11.058 0z" />
                </g>
              </svg>
            </div>
            <div class="detail-box">
              <h5>
                meilleurs qualités
              </h5>
              <p>
                articles de meilleurs qualités vendu avec soin et fiabilité
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end why section -->


  <!-- gift section -->

  <section class="gift_section layout_padding-bottom">
    <div class="box ">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-5">
            <div class="img_container">
              <div class="img-box">
                <img src="images/gifts.png" alt="">
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Decouvrez le meilleur de nos matériels <br>
                  informatiques qualités prix
                </h2>
              </div>
              <p>
               
              </p>
              <div class="btn-box">
                <a href="shop.php" class="btn1">
                  Acheter maintenant
                </a>
                <a href="shop.php" class="btn2">
                  voir plus
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end gift section -->


  <!-- contact section -->

  <section class="contact_section ">
    <div class="container px-0">
      <div class="heading_container ">
        <h2 class="">
          Contactez nous
        </h2>
      </div>
    </div>
    <div class="container container-bg">
      <div class="row">
        <div class=" col-md-12 px-0">
          
        </div>
        <div class="col-md-6 col-lg-5 px-0">
            <form id="formulaire-contact" action="contact.php" method="post">
                <div>
                    <input type="text" name="name" placeholder="Nom" required=""/>
                </div>
                <div>
                    <input type="email" name="email" placeholder="Email" pattern="[^ @]*@[^ @]*" required=""/>
                </div>
                <div>
                    <input type="text" name="subject" placeholder="Adresse" required=""/>
                </div>
                <div>
                    <input type="text" name="message" class="message-box" placeholder="Message" required=""/>
                </div>
                <div id="alert-message" class="text-center mt-4"></div>
                <div class="d-flex ">
                    <button type="submit" id="bouton-submit">
                        Envoyer
                    </button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- client section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Temoignage
        </h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel  carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Angaman
                  </h5>
                  <h6>
                    Prof en informatique
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                j'ai conseiller a mes etudiants en premiere année SI d'acheter leurs ordinateurs chez MPK-BOUTIK en raison de leur qualités d'appareils, chose faite aujourd'hui nous travaillons mieux sans que les ordinateurs ne plante 
                <p>merci MPK-BOUTIK</p>
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Bruno
                  </h5>
                  <h6>
                    Architecte 
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Je me suis rendu sur le site en ligne MPK-BOUTIK pour acheter un Ordinateur nouvel génération pour mes conceptions de lieu de vie idéal
                <p>Vraiment c'est le meilleur de investissements que j'ai eu a faire </p>
                
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>
                    Marie-perek
                  </h5>
                  <h6>
                    Entrepreneur
                  </h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                Pour mon cyber café j'ai acheter des ordinateurs burreau chez MPK-BOUTIK a un prix reduit ce qui m'a permis de beaucoup économisé 
              </p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- end client section -->

  <!-- info section -->

  <section class="info_section  layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              A PROPOS DE NOUS
            </h6>
            <p>
              mpk-boutik a un magasin situé a cocody palmeraie plus precisement a coté de l'hotel belle cote, pour tout achat en gros et aussi pour la maintenance de vos appareils.
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form ">
              <h5>
                PLUS D'INFOS
              </h5>
              <form action="#">
                <input type="email" placeholder="Entrer votre email">
                <button>
                  S'INSCRIRE
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              BESOIN D'AIDE
            </h6>
            <p>
              Apeller le 6060
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACTEZ NOUS
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> angré 8eme tranche </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+225 0707100121</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> mpk@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> Fait par MARIE PAULE 
          <a href="https://html.design/">KOUAME</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->


  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="js/custom.js"></script>
  <script>
      var cartCount = 0;

      function addToCart(button) {
          var productId = button.parentElement.getAttribute('data-product-id');
          var productType = button.parentElement.getAttribute('data-product-type');

          addToCartPHP(productId, productType);
      }

      function addToCartPHP(productId, productType) {
          const xhr = new XMLHttpRequest();
          xhr.open('GET', 'add_to_cart.php?product_id=' + productId + '&product_type=' + productType, true);

          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                  if (xhr.status === 200) {
                      console.log(xhr.responseText);
                      showAlert('Votre commande a été prise en compte.');

                      // Increment the cart count
                      cartCount++;
                      updateCartCount();
                  } else {
                      showAlert('Une erreur s\'est produite lors du traitement de votre commande.');
                  }
              }
          }

          xhr.send();
      }

      function updateCartCount() {
          // Update the cart count displayed in the icon
          document.getElementById('cart-count').innerHTML = cartCount;
      }
      document.addEventListener('DOMContentLoaded', function () {
          // Appeler la fonction pour récupérer le nombre de commandes
          getCartCount();
          echo
          // Reste de votre code...
      });

      // Nouvelle fonction pour récupérer le nombre de commandes via AJAX
      function getCartCount() {
          const xhr = new XMLHttpRequest();
          xhr.open('GET', 'get_cart_count.php', true);

          xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                  if (xhr.status === 200) {
                      // Mettez à jour le nombre d'articles affiché dans l'icône
                      cartCount = parseInt(xhr.responseText);
                      updateCartCount();
                  } else {
                      console.log('Une erreur s\'est produite lors de la récupération du nombre de commandes.');
                  }
              }
          }

          xhr.send();
      }

      function showAlert(message) {
          // Afficher la fenêtre modale Bootstrap
          $('#myModal').modal('show');

          // Mettre le message dans la fenêtre modale
          document.getElementById('modalMessage').innerHTML = message;
      }
      function showAlert(message) {
          // Afficher la fenêtre modale Bootstrap en utilisant jQuery
          $('#myModal').modal('show');

          // Mettre le message dans la fenêtre modale
          $('#modalMessage').html(message);
      }

  </script>

</body>

</html>