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
                      <li class="nav-item active">
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
        Ordinateur
        </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/8.jpg" alt="">
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
                <div class="buy-button" data-product-id="56" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/7.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                  
                  <span>
                    200,900 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
                <div class="buy-button" data-product-id="57" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/6.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                  
                  <span>
                    300,900 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
                <div class="buy-button" data-product-id="58" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/5.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Ordinateur
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
                <div class="buy-button" data-product-id="59" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/4.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                  <span>
                    370,250 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
                <div class="buy-button" data-product-id="60" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/3.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                  <span>
                    150,000 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>

              </div>
                <div class="buy-button" data-product-id="61" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/2.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                  
                  <span>
                    222,680 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
                <div class="buy-button" data-product-id="62" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
                </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
              <div class="img-box">
                <img src="Ordinateur/1.jpg" alt="">
              </div>
              <div class="detail-box">
                <h6>
                Ordinateur
                </h6>
                <h6>
                
                  <span>
                    292,900 FCFA
                  </span>
                </h6>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
                <div class="buy-button" data-product-id="63" data-product-type="Ordinateur">
                    <button onclick="addToCart(this)">Commander</button>
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
  <!-- Fenêtre modale Bootstrap -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Alerte</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" id="modalMessage">
                  <!-- Le message sera placé ici par JavaScript -->
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
              </div>
          </div>
      </div>
  </div>

</body>
<script>document.addEventListener('DOMContentLoaded', function () {
        updateCartCount(); // Initialiser le nombre d'articles dans le panier
    });
</script></html>