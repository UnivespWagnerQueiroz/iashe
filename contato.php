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

    <title>IASHE - P&aacute;gina de contato</title>

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

    <?php include 'assets/header.php' ?>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contato</h1>
            <span>Gostariamos muito de ouvir você, basta preencher o formul&aacute;rio abaixo!</span>
          </div>
        </div>
      </div>
    </div>

    <div class="contact-information">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-phone"></i>
              <h4>Telefone</h4>
              <p>Sinta se livre para nos contactar por telefone ou whatsapp.</p>
              <a href="#">(11) 96096-0467</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-envelope"></i>
              <h4>Email</h4>
              <p>Temos tamb&eacute;m um email para contato:</p>
              <a href="mailto:leandro@floscont.com.br">leandro@floscont.com.br</a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-item">
              <i class="fa fa-map-marker"></i>
              <h4>Endere&ccedil;o</h4>
              <p>Avenida Trindade, 254 Sala 604<br>Bethaville I, Barueri - SP <br>CEP: 06404-326</p>
              <a href="https://www.google.com.br/maps/search/Avenida%20Trindade%20254%20Bethaville%20I%20Barueri%20SP">Veja no Google Maps</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="callback-form contact-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Envie-nos uma<em>mensagem</em></h2>
              <span>Teremos imenso prazer em atender</span>
            </div>
          </div>
          <div class="col-md-12">
            <div class="contact-form">
              <form id="contact" action="" method="get">
                <div class="row">
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nome completo" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Endere&ccedil;o de email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-4 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Sua Mensagem" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Enviar Mensagem</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="map">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
--><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.72194561217!2d-46.8683061!3d-23.5065227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03d22ffb1e47%3A0x872f33af5d4784aa!2sAv.%20Trindade%2C%20254%20-%20Bethaville%20I%2C%20Barueri%20-%20SP%2C%2006404-326!5e0!3m2!1spt-BR!2sbr!4v1726603816891!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

    <!-- Footer Starts Here -->
    <?php include 'assets/rodape.php'; ?>