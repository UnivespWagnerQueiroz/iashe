<!DOCTYPE html>
<html lang="pt-br">
<?php
  // contem o nome do arquivo atual para comparacao do menu 
  $arquivo =  substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>IASHE - Sobre nosso instituto</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
    <?php include 'assets/preloader.php'; ?>
    </div>  
    <!-- ***** Preloader End ***** -->
<?php include 'assets/header.php'; ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>SOBRE A IASHE</h1>
            <span>A IASHE, Instituto de A&ccedil;&atilde;o Social de habita&ccedil;&atilde;o econ&ocirc;mica </span>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info about-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Voluntários que fazem a diferença</span>
                    <h2>Mais sobre a<em>IASHE</em></h2>
                    <p>A IASHE promove suporte técnico para a reforma ou construção de moradias economicas e ajudar a comunidade 
                    <br><br>Promovemos eventos periódicos para a comunidade, trazendo alegria para nossas crianças.</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="assets/images/about-1-570x350.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <span>Nossa ONG, nossos resultados</span>
              <h2>Moradias <em>Economicas</em></h2>
              <p>Construindo um mundo melhor, um tijolo de cada vez. 
              <br><br>A IASHE mostra seus números .</p>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1200</div>
                  <div class="count-title">Moradias</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">128</div>
                  <div class="count-title">Crianças assistidas</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">720</div>
                  <div class="count-title">Cestas básicas entregues</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">11</div>
                  <div class="count-title">Cidades</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here --> 
     <?php include 'assets/rodape.php'; ?>