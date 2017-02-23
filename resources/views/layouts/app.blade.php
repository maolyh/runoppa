<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Runoppa</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="Bootstrap 3 template for corporate business" />
<!-- css -->
<link href="/css/app.css" rel="stylesheet" />
<link href="/css/mycss.css" rel="stylesheet" />

<link href="/Sailor/css/bootstrap.min.css" rel="stylesheet" />
<link href="/Sailor/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" /> 
<link href="/Sailor/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="/Sailor/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="/Sailor/skins/default.css" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="/Sailor/bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>



<div id="wrapper">
  <!-- start header -->
  <header>
      <div class="top">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <ul class="topleft-info">
                <li>Ministerio del poder popular para la Agricultura y Tierras</li>
              </ul>
            </div>
            <div class="col-md-6">
              <div id="sb-search" class="sb-search">
                <form>
                  <input class="sb-search-input" placeholder="Búsqueda..." type="text" value="" name="search" id="search">
                  <input class="sb-search-submit" type="submit" value="">
                  <span class="sb-icon-search" title="Click to start searching"></span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>  
      
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.agriculturaproductiva.gob.ve/"><img src="Sailor/img/logo.jpeg" alt="" width="199" height="52" /></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                          <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Inicio <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="{{url('/')}}">Historia</a></li>
                            <li><a href="{{url('/')}}">Objetivos</a></li>
                          </ul>       
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Catálogos básicas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ url('/popularorganization') }}">Organizaciones populares</a></li>
                              <li><a href="">Comunidades indígenas</a></li>
                              <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Básicos</a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{ url('/status') }}">Estatus</a></li>
                                  <li><a href="">Estado</a></li>
                                  <li><a href="">Parroquias</a></li>
                                  <li><a href="">Ciudades</a></li>
                                </ul> 
                              </li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/producer') }}">Productores</a></li>
                        <li><a href="">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
  </header>
  <!-- end header -->
  
  <section id="content">
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        @yield('content')

      </div>    
    </div>
    </div>
    
    
  
    
    <!-- divider -->
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="solidline">
        </div>
      </div>
    </div>
    </div>
    <!-- end divider -->
  
    
    
    <!-- divider -->
    <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="solidline">
        </div>
      </div>
    </div>
    </div>
    <!-- end divider -->
    
    <!-- clients -->
    <div class="container">
        <div class="row">
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo1.png" class="img-responsive" />
                </div>                      
                          
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo2.png" class="img-responsive" />
                </div>                      
                          
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo3.png" class="img-responsive" />
                </div>                      
                          
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo4.png" class="img-responsive" />
                </div>                  
                
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo5.png" class="img-responsive" />
                </div>                  
                <div class="col-xs-6 col-md-2 aligncenter client">
                  <img alt="logo" src="Sailor/img/clients/logo6.png" class="img-responsive" />
                </div>  

        </div>
    </div>
  
  </section>
  
  <footer>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-12">
        <div class="widget">
          <h4>Ubícanos en</h4>
          <address>
          <strong>Ministerio del Poder Popular para Agricultura y Tierras Rif: G20002311-2.</strong><br>
            Av Urdaneta.La Candelaria. </address>
          <p>
            <i class="icon-phone"></i> (212) 555000 - (123) 555-7891 <br>
            <i class="icon-envelope-alt"></i> email@mpat.gob.ve
          </p>
        </div>
      </div>
     

    </div>
  </div>
  <div id="sub-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="copyright">
            <p>&copy; Runoppa - All Right Reserved</p>
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                           
                        </div>
          </div>
        </div>
        <div class="col-lg-6">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

<!-- Placed at the end of the document so the pages load faster -->
<script src="/Sailor/js/jquery.min.js"></script>
<script src="/Sailor/js/modernizr.custom.js"></script>
<script src="/Sailor/js/jquery.easing.1.3.js"></script>
<script src="/Sailor/js/bootstrap.min.js"></script>
<script src="/Sailor/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="/Sailor/plugins/flexslider/flexslider.config.js"></script>
<script src="/Sailor/js/jquery.appear.js"></script>
<script src="/Sailor/js/stellar.js"></script>
<script src="/Sailor/js/classie.js"></script>
<script src="/Sailor/js/uisearch.js"></script>
<script src="/Sailor/js/jquery.cubeportfolio.min.js"></script>
<script src="/Sailor/js/google-code-prettify/prettify.js"></script>
<script src="/Sailor/js/animate.js"></script>
<script src="/Sailor/js/custom.js"></script>

  
</body>
</html>