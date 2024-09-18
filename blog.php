<!DOCTYPE html>
<html lang="pt-br">

  <head>
  <?php
  // contem o nome do arquivo atual para comparacao do menu 
  $arquivo =  substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>IASHE - Blog</title>

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
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12"> 
            <h1>BLOG DA IASHE</h1>
            <span>Conhe&ccedil;a todas as nossas atividades</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'> <!-- Artigo -->
                <img src="assets/images/blog-image-1-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Exemplo de artigo do Blog</a></h4>
                <div style="margin-bottom:10px;">
                  <span>Nome do Autor &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comentarios</span>
                </div>
                <p>Texto do artigo criado.</p>
                <br>
                <div>
                  <a href="blog-details.html" class="filled-button">Continue a leitura</a>
                </div>
              </article>

              <br>
              <br>
              <br>

              <article id='tabs-2'>
                <img src="assets/images/blog-image-2-940x460.jpg" alt="">
                <h4><a href="blog-details.html">Titulo do segundo artigo</a></h4>
                <div style="margin-bottom:10px;">
                  <span>Autor do Artigo &nbsp;|&nbsp; 27.07.2020 10:10 &nbsp;|&nbsp; 15 comments</span>
                </div>
                <p>Sed ut dolor in augue cursus ultrices. Vivamus mauris turpis, auctor vel facilisis in, tincidunt vel diam. Sed vitae scelerisque orci. Nunc non magna orci. Aliquam commodo mauris ante, quis posuere nibh vestibulum sit amet</p>
                <br>
                <div>
                  <a href="blog-details.html" class="filled-button">Continue a leitura</a>
                </div>
              </article>
            </section>
          </div>

          <div class="col-md-4">
              <h4 class="h4">Busca de Artigos</h4>
              
              <form id="search_form" name="gs" method="GET" action="#">
                <input type="text" name="q" class="form-control form-control-lg" placeholder="Termo de busca..." autocomplete="on">
              </form>

              <br>
              <br>

              <h4 class="h4">Posts recentes</h4>

              <ul>
                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.html">Dolorum corporis ullam, reiciendis inventore est repudiandae</a></h5>
                      <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>

                  <li><br></li>

                  <li>
                      <h5 style="margin-bottom:10px;"><a href="blog-details.html">Culpa ab quasi in rerum dolorum impedit expedita</a></h5>
                      <small><i class="fa fa-user"></i> Joao Ninguem &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>

                  <li><br></li>

                  <li>
                    <h5 style="margin-bottom:10px;"><a href="blog-details.html">Explicabo soluta corrupti dolor doloribus optio dolorum</a></h5>

                    <small><i class="fa fa-user"></i> John Doe &nbsp;|&nbsp; <i class="fa fa-calendar"></i> 27.07.2020 10:10</small>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </div>

    <br>  
    <br>  
    <br>  
    <br>  

    <!-- Footer Starts Here --> 
    <?php include 'assets/rodape.php'; ?>