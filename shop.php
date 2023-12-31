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

  <title>MPK-BOUTIK</title>

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
                      <li class="nav-item ">
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

  </div>
  <!-- end hero area -->

  <!-- shop section -->

  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Tous les articles
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="images/image_search_3.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ordinateur
                </h6>
                <h6>
                
                  <span>
                    130,000 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_16.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Clavier
                </h6>
                <h6>
                  
                  <span>
                    29,900 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_33.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Serveur
                </h6>
                <h6>
                  
                  <span>
                    29,900 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_9.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Bureau
                </h6>
                <h6>
                  
                  <span>
                    569,900 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_49.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Souris
                </h6>
                <h6>
                  
                  <span>
                    3,250 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_55.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Fibre optique
                </h6>
                <h6>
                  
                  <span>
                    15,000 FCFA
                  </span>
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
            <a href="">
              <div class="img-box">
                <img src="images/image_search_56.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Clé USB
                </h6>
                <h6>
                  
                  <span>
                    2,680 FCFA
                  </span>
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
            <a href="shop.php">
              <div class="img-box">
                <img src="images/image_search_15.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Imprimante
                </h6>
                <h6>
                
                  <span>
                    29,900 FCFA
                  </span>
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
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- end shop section -->

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
                <input type="email" placeholder="Enter votre email">
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
            apeller le 6060
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
          &copy; <span id="displayYear"></span>Fait par MARIE PAULE
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

</body>

</html>