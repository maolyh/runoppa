<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>RUNOPPA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">      
      
    <link href="bootstrap-gen-2/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-gen-2/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <link href="/css/mycss.css" rel="stylesheet" />

    <!-- Icons -->
    <link href="bootstrap-gen-2/scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="bootstrap-gen-2/scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="bootstrap-gen-2/scripts/fontawesome/css/font-awesome.min.css">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="bootstrap-gen-2/scripts/carousel/style.css" rel="stylesheet" type="text/css" />
    <link href="bootstrap-gen-2/scripts/camera/css/camera.css" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Allura" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Palatino+Linotype" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Calligraffitti" rel="stylesheet" type="text/css">

    <link href="bootstrap-gen-2/styles/custom.css" rel="stylesheet" type="text/css" />
</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">

        <div class="divPanel topArea notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="index.html" id="divSiteTitle">Runoppa</a><br />
                        <a href="index.html" id="divTagLine">Registro Único Obligatorio <br>Permanente de Productores Agrícolas</a>
                    </div>

                    <div id="divMenuRight" class="pull-right">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown active"><a href="/">Inicio</a></li>
                <li class="dropdown"><a href="{{ url('/producer') }}">Productores</a></li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle">Catálogos <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                            <li><a href="{{ url('/popularorganization') }}">Organizaciones populares</a></li>
                            <li><a href="">Comunidades indígenas</a></li>
                            <li><a href="">......</a></li>

              <li class="dropdown">
                            <a href="#" class="dropdown-toggle">Básicas &nbsp;&raquo;</a>
                            <ul class="dropdown-menu sub-menu">
                            <li><a href="{{ url('/status') }}">Estatus</a></li>
                            <li><a href="#">Parroquia</a></li>
                            <li><a href="#">Municipio</a></li>
                            </ul>
                            </li>
                            </ul>
                                </li>
                                <li class="dropdown"><a href="">Galería</a></li>
                                <li class="dropdown"><a href="">Contacto</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

  <!-- end header -->
  
<div class="container">
  <div class="divPanel page-content">
    <!--Edit Main Content Area here-->
    <div class="row-fluid">
      <div class="span12" id="divMain">
        @yield('content')
       </div>    
    </div>
  </div>
</div>  
    
  
<div id="footerInnerSeparator"></div>    
<div id="footerOuterSeparator"></div>

<div id="divFooter" class="footerArea">

  <div class="container">

    <div class="divPanel">

      <div class="row-fluid">
        
        <div class="span3" id="footerArea1">
                
                    <h3>Nosotros</h3>

                    <p>Ministerio del Poder Popular para la Agricultura Productiva y Tierras</p>
                    
                    <p> 
                        <a href="#" title="Terms of Use">Términos de uso</a><br />
                        <a href="#" title="Privacy Policy">Políticas de privacidad</a><br />
                        <a href="#" title="FAQ">FAQ</a><br />
                    </p>

        </div>
        <div class="span3" id="footerArea2">

                    <h3>Normativa</h3> 
                    <p>
                        <a href="#" title="">Si deseas conocer más acerca de nuestra nomativa, visita nuestro espacio</a><br />
                    
                    </p>

        </div>
        <div class="span3" id="footerArea3">

                    <h3>Lo nuevo</h3> 
                    <p>Nuestras mejoras inclyen:
                    <ul>
                    <li>xxxx</li>
                    <li>yyyy</li>
                    <li>zzzz</li>
                    </ul>
                    </p>

        </div>
        <div class="span3" id="footerArea4">

                    <h3>Contacto</h3>  
                                                               
                    <ul id="contact-info">
                    <li>                                    
                        <i class="general foundicon-phone icon"></i>
                        <span class="field">Teléfono:</span>
                        <br />
                        (212) 555 7890 / 456 7891                                                                      
                    </li>
                    <li>
                        <i class="general foundicon-mail icon"></i>
                        <span class="field">Email:</span>
                        <br />
                        <a href="mailto:email@mpat.gob.ve" title="Email">email@mpat.gob.ve</a>
                    </li>
                    <li>
                        <i class="general foundicon-home icon" style="margin-bottom:50px"></i>
                        <span class="field">Dirección:</span>
                        <br />
                        Av. Urdaneta<br />
                        La Candelaria<br />
                        Caracas
                    </li>
                    </ul>

        </div>
      </div>
      <div class="row-fluid">
        <div class="span12">
                    <p class="copyright">
                        Copyright © 2017 MPPAT. Todos los derechos reservados.
                    </p>

                    <p class="social_bookmarks">
                        <a href="#"><i class="social foundicon-facebook"></i> Facebook</a>
          <a href=""><i class="social foundicon-twitter"></i> Twitter</a>
          <a href="#"><i class="social foundicon-pinterest"></i> Pinterest</a>
          <a href="#"><i class="social foundicon-rss"></i> Rss</a>
                    </p>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="bootstrap-gen-2/scripts/jquery.min.js" type="text/javascript"></script> 
<script src="bootstrap-gen-2/scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="bootstrap-gen-2/scripts/default.js" type="text/javascript"></script>


<script src="bootstrap-gen-2/scripts/carousel/jquery.carouFredSel-6.2.0-packed.js" type="text/javascript"></script><script type="text/javascript">$('#list_photos').carouFredSel({ responsive: true, width: '100%', scroll: 2, items: {width: 320,visible: {min: 2, max: 6}} });</script><script src="bootstrap-gen-2/scripts/camera/scripts/camera.min.js" type="text/javascript"></script>
<script src="bootstrap-gen-2/scripts/easing/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">function startCamera() {$('#camera_wrap').camera({ fx: 'scrollLeft', time: 2000, loader: 'none', playPause: false, navigation: true, height: '65%', pagination: true });}$(function(){startCamera()});</script>
</body>
</html>