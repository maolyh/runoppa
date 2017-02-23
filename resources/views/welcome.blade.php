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

<link href="Sailor/css/bootstrap.min.css" rel="stylesheet" />
<link href="Sailor/plugins/flexslider/flexslider.css" rel="stylesheet" media="screen" /> 
<link href="Sailor/css/cubeportfolio.min.css" rel="stylesheet" />
<link href="Sailor/css/style.css" rel="stylesheet" />

<!-- Theme skin -->
<link id="t-colors" href="Sailor/skins/default.css" rel="stylesheet" />

  <!-- boxed bg -->
  <link id="bodybg" href="Sailor/bodybg/bg1.css" rel="stylesheet" type="text/css" />

<!-- =======================================================
    Theme Name: Sailor
    Theme URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

</head>
<body>

<?php
// Imprime ejemplo 'Versión actual de PHP'
//echo 'Versión actual de PHP: ' . phpversion();
?>


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
                            <li><a href="#historia">Historia</a></li>
                            <li><a href="#objetivos">Objetivos</a></li>
                          </ul>       
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tablas básicas <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                              <li><a href="{{ url('/popularorganization') }}">Organizaciones populares</a></li>
                              <li><a href="">Comunidades indígenas</a></li>
                              <li><a href="">Unidades de producción</a></li>
                              <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Básicas</a>
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

      <!-- Slider -->
        <div id="main-slider" class="main-slider flexslider">
            <ul class="slides">
              <li>
                <img src="Sailor/img/slides/flexslider/banner_distribuidores.jpg" alt="" />
                <div class="flSailor/ex-caption">
                    <h3>Productores certificados</h3> 
                    <p>Conoce nuestras políticas de certificación</p> 
                    <a href="#" class="btn btn-theme">Ver aquí</a>
                </div>
              </li>
              <li>
                <img src="Sailor/img/slides/flexslider/banner_distribuidores2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Productores activos</h3> 
                    <p>Trabajando la tierra para un mejor país</p> 
                    <a href="#" class="btn btn-theme">Conozca más</a>
                </div>
              </li>
              <li>
                <img src="Sailor/img/slides/flexslider/banner_distribuidores3.jpg" alt="" />
                <div class="flex-caption">
                    <h3>Registro en línea</h3> 
                    <p>Rápido, cómodo y seguro </p> 
                    <a href="#" class="btn btn-theme">Conozca más</a>
                </div>
              </li>
            </ul>
        </div>
  <!-- end slider -->
     </div>    
    </div>
    </div>
  
<!--Historia-->
 <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-justify">
          <a name="historia"></a>
          <h2><span class="highlight">Historia</span></h2>         
          <p>RUNOPPA 2.0 es un software que permitirá mejorar los procesos de registro y
            las estadı́sticas del Ministerio de Agricultura Productiva y Tierras. La intención
            del registro es que el proceso sea sencillo y amigable para los productores
            del paı́s. Debido a esto la nueva versión del sistema se conceptualiza como
            un autoregistro que permita a los productores poder certificarse en cualquier
            momento de manera rápida.
            El autoregistro consta de dos fases; una de carga de información y otra de
            validación por medio de un baremo que indicará quien certifica como productor,
            en este último paso aquellos que no certifiquen como productores mediante el
            baremo, serán inspeccionados para validar la información y de cumplir con las
            condiciones, serán certificados.
            Además de esto, el proceso de autoregistro se fortalecerá con procesos de
            auditorías para aquellos productores que se encuentre certificados, mediante la
            toma de muestras estadisticamente significativas que permita darle fiabilidad
            respecto a la calidad de la información que ofrecerá.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="text-justify">
        
          <h2><span class="highlight">Objetivos</span></h2>         
          <p>
          <ul class="unstyled">
            <li>Crear usuario y contraseña por parte de los productores para registrase y actualizar los datos del mismo</li>
            <li>Recuperar usuario y contrase ̃na por medio de correo electrónico.</li>
            <li>Formulario de registro con los campos especificados por las unidades técnicas</li>
            <li>Permitir la actualización de datos por medio del usuario.</li>
            <li>Desarrollar el módulo para la gestión de usuarios (asignación de roles).</li>   
          </ul> 
          </p>
        </div> 
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
  
    <!-- Portfolio Projects -->
    <div class="container marginbot50">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="heading">Galería</h4>

        <div id="filters-container" class="cbp-l-filters-button">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Todas<div class="cbp-filter-counter"></div></div>
          <div data-filter=".identity" class="cbp-filter-item">En el campo<div class="cbp-filter-counter"></div></div>
          <div data-filter=".web-design" class="cbp-filter-item">Certificándose<div class="cbp-filter-counter"></div></div>
          <div data-filter=".graphic" class="cbp-filter-item">Pecuaria<div class="cbp-filter-counter"></div></div>
          <div data-filter=".logo" class="cbp-filter-item">Avícola<div class="cbp-filter-counter"></div></div>
        </div>
        

        <div id="grid-container" class="cbp-l-grid-projects">
          <ul>
            <li class="cbp-item graphic">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/1.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                      <a href="Sailor/img/works/1big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Dashboard<br>by Paul Flavius Nechita">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Agrícola</div>
              <div class="cbp-l-grid-projects-desc">Ganaderos / Productores</div>
            </li>
            <li class="cbp-item web-design logo">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/2.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                      <a href="Sailor/img/works/2big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="World Clock Widget<br>by Paul Flavius Nechita">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Avícola</div>
              <div class="cbp-l-grid-projects-desc">Aves / Fauna</div>
            </li>
            <li class="cbp-item graphic logo">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/3.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                    
                      <a href="http://vimeo.com/14912890" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="To-Do Dashboard<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Pecuario</div>
              <div class="cbp-l-grid-projects-desc">Peces / Mar</div>
            </li>
            <li class="cbp-item web-design graphic">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/4.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                    
                      <a href="Sailor/img/works/4big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Events and  More<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Granjas</div>
              <div class="cbp-l-grid-projects-desc">xxxx</div>
            </li>
            <li class="cbp-item identity web-design">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/5.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                      
                      <a href="Sailor/img/works/5big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="WhereTO App<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Bovino</div>
              <div class="cbp-l-grid-projects-desc">yyyyyyyy</div>
            </li>
            <li class="cbp-item identity web-design">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/6.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                      
                      <a href="Sailor/img/works/6big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Ski * Buddy<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Categoría</div>
              <div class="cbp-l-grid-projects-desc">Subcate1 / Subcate2</div>
            </li>
            <li class="cbp-item graphic logo">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/7.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                    
                      <a href="Sailor/img/works/7big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Categoría 2</div>
              <div class="cbp-l-grid-projects-desc">Subcate1 / Subcate2</div>
            </li>
            <li class="cbp-item graphic logo">
              <div class="cbp-caption">
                <div class="cbp-caption-defaultWrap">
                  <img src="Sailor/img/works/8.jpg" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                  <div class="cbp-l-caption-alignCenter">
                    <div class="cbp-l-caption-body">
                    
                      <a href="Sailor/img/works/8big.jpg" class="cbp-lightbox cbp-l-caption-buttonRight" data-title="Seemple* Music for iPad<br>by Tiberiu Neamu">Ampliar</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cbp-l-grid-projects-title">Categoría 3</div>
              <div class="cbp-l-grid-projects-desc">SubCate3 / Subcate3</div>
            </li>
          </ul>
        </div>
        

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
<script src="Sailor/js/jquery.min.js"></script>
<script src="Sailor/js/modernizr.custom.js"></script>
<script src="Sailor/js/jquery.easing.1.3.js"></script>
<script src="Sailor/js/bootstrap.min.js"></script>
<script src="Sailor/plugins/flexslider/jquery.flexslider-min.js"></script> 
<script src="Sailor/plugins/flexslider/flexslider.config.js"></script>
<script src="Sailor/js/jquery.appear.js"></script>
<script src="Sailor/js/stellar.js"></script>
<script src="Sailor/js/classie.js"></script>
<script src="Sailor/js/uisearch.js"></script>
<script src="Sailor/js/jquery.cubeportfolio.min.js"></script>
<script src="Sailor/js/google-code-prettify/prettify.js"></script>
<script src="Sailor/js/animate.js"></script>
<script src="Sailor/js/custom.js"></script>

  
</body>
</html>