<!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>leandro@floscont.com.br</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>(11)96096-0467</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
   <?php echo $arquivo; ?>
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><img src='assets/images/logo.png' width='100px.' alt="Logotipo IASHE"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php if ($arquivo=='index.php') echo('active');?>">
                <a class="nav-link" href="index.php">Home <?php if ($arquivo=='index.php') echo ('<span class="sr-only">(current)</span>'); ?>
                </a>
              </li>
              <li class="nav-item <?php if ($arquivo=='blog.php') echo('active');?>"> 
                <a class="nav-link" href="blog.php">Blog <?php if ($arquivo=='blog.php') echo ('<span class="sr-only">(current)</span>');  ?>
                </a>
              </li>

              <li class="nav-item <?php if ($arquivo=='sobre.php') echo('active');?>">
                <a class="nav-link" href="sobre.php">Sobre
                <?php if ($arquivo=='sobre.php') echo ('<span class="sr-only">(current)</span>'); ?>
                </a>
              </li>

              <li class="nav-item <?php if ($arquivo=='time.php') echo('active');?>">
                <a class="nav-link" href="time.php">Nosso time</a>
              </li>
              <li class="nav-item <?php if ($arquivo=='contato.php') echo('active');?>">
                <a class="nav-link" href="contato.php">Contato
                <?php if ($arquivo=='contato.php') echo ('<span class="sr-only">(current)</span>');  ?>
     
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

