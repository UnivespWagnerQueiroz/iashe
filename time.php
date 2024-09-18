<!DOCTYPE html>
<html lang="pt-br">
<?php
  // contem o nome do arquivo atual para comparacao do menu 
  $arquivo =  substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IASHE ONG Instituto habitacao Popular, Pagina do time da ONG">
    <meta name="author" content="Wagner de Queiroz">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>IASHE - Nosso time</title>

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
            <h1>Nosso time</h1>
            <span>Uma equipe sólida é composta por voluntários engajados</span>             
          </div>
        </div>
      </div>
    </div>

    <div class="team" style="margin: 0">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>A força vem do <em>Voluntáriado</em> </h2>
              <span>Nosso time da <em>IASHE</em> é formada por pessoas como nós e voluntários engajados</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-item">
              <img src="assets/images/team-image-1-646x680.jpg" alt="">
              <div class="down-content">
                <h4>Regiane Araújo</h4>
                <span>Presidente</span>
                <p>Ajudar é a vocação que mais importa.</p>

                <p>
                  <a href="#"><span><i class="fa fa-linkedin"></i></span></a>
                </p>
              </div>
            </div>
          </div>
 
        </div>
      </div>
    </div>

    <!-- Footer Starts Here -->
     <?php include 'assets/rodape.php'; ?>