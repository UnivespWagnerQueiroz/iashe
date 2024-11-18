<!DOCTYPE html>
<html lang="pt_br">
<?php
  // contem o nome do arquivo atual para comparacao do menu 
  $arquivo =  substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="IASHE - Instituto ONG Habitacao Economica">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>IASHE | Ação Social de Habitacao Econômica</title>

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
  <?php    include 'assets/header.php'; ?>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Uma boa moradia é um direito de todos!</h6>
                  <h4>Nossa maior Alegria<br> é ajudar </h4>
                  <p>Bem vindo ao nosso site A IASHE promove a qualidade de vida com a construção de moradias de forma Economica. Conheça nossos eventos abaixo</p>
                  <a href="blog.html" class="filled-button">Saiba mais</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Contruindo uma vida por vez</h6>
                  <h4>Nosso sonho é construir<br> um mundo melhor </h4>
                  <p>Onde cada pessoa, possa ter uma moradia digna, segura e construida de forma economica. </p>
                  <a href="sobre.php" class="filled-button">Sobre a IASHE</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>Entre em contato</h6>
                  <h4>Volutários são sempre <br>bem vindos.</h4>
                  <p>Assim como Tijolos que constroem casas, Você pode fazer parte da nossa grande família. Ou apenas, bater um papo. Estamos aqui para ajudar.</p>
                  <a href="contato.php" class="filled-button">Contate-nos</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="more-info">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Lorem ipsum dolor sit amet, consectetur adipisicing <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-2'>Mauris lobortis quam id dictum dignissim <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
              <li><a href='#tabs-3'>Class aptent taciti sociosqu ad litora torquent per <br> <small>John Doe &nbsp;|&nbsp; 27.07.2020 10:10</small></a></li>
            </ul>

            <br>

            <div class="text-center">
              <a href="blog.php" class="filled-button">Saiba Mais</a>
            </div>

            <br>
          </div>

          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blogB.php">Nosso blog dolor sit amet, consectetur adipisicing.</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet.</p>
              </article>
              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blogB.php">Blog Artigo2 quam id dictum dignissim</a></h4>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
              </article>
              <article id='tabs-3'>
                <img src="assets/images/blog-image-3-940x460.jpg" alt="">
                <h4><a href="blogB.php">Blog 3 sociosqu ad litora torquent per</a></h4>
                <p>Mauris lobortis quam id dictum dignissim. Donec pellentesque erat dolor, cursus dapibus turpis hendrerit quis. Suspendisse at suscipit arcu. Nulla sed erat lectus. Nulla facilisi. In sit amet neque sapien. Donec scelerisque mi at gravida efficitur. Nunc lacinia a est eu malesuada. Curabitur eleifend elit sapien, sed pulvinar orci luctus eget. 
                </p>
              </article>
            </section>
          </div>
        </div>

        
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="more-info-content">
          <div class="row">
            <div class="col-md-6">
              <div class="left-image">
                <img src="assets/images/about-1-570x350.jpg" class="img-fluid" alt="">
              </div>
            </div>
            <div class="col-md-6 align-self-center">
              <div class="right-content">
                <span>Quem somos nós</span>
                <h2>Conheca mais sobre a <em>IASHE</em></h2>
                <p>Com o Intuito de dar suporte a comunidade de baixa renda, a IASHE promove o suporte para a contrução de moradias econômicas</p>
                <a href="sobre.php" class="filled-button">Mais detalhes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer Starts Here --> 
     <?php include 'assets/rodape.php'; ?>