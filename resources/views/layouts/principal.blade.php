<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Escuela de Posgrado</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
          
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
    <!--enaces de iconos-->
          
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css\bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css\estilos.css') }}">
      <!-- Our Custom CSS -->
<link rel="stylesheet" href="{{ asset('css\estilos.css') }}">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
  </head>
  <body>
<!-- barra de menu-->
  <header>
      <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <a href="#" class="navbar-brand">UTN-FRT</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-frt">
                  <span class="sr-only">Desplegar / Ocultar Menu</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">Escuela de Posgrado</a>
              </div>

              <!-- Inicia el Menu -->
              <div class="collapse navbar-collapse" id="navegacion-frt">
            <li>
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Inicio</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                      Carreras <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Carrera #1</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Carrera #2</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Carrera #3</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Carrera #4</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Carrera #5</a></li>
                    </ul>
                  </li>
                  <li>
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                    Cursos <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Curso #1</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Curso #2</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Curso #3</a></li>

                  </ul>
                </li>
                  <li><a href="#">Contacto</a></li>
                </ul>
                <div class="bannerheader"></div>
                    <header id="header" class="hidden-xs">
                    <div class="container">

                    <!--TEXBOX BUSCAR-->
            <li>
                <form action="" class="navbar-form navbar-right" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="buscar">
                  </div>
                  <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-search"></span>
                  </button>
                </form>
              </div>
            </div>
          </nav>

    </header>
    <!-- banner con logo-->
    <section class="jumbotron">
        <div class="container">
      <a href="/"><img alt="logo" width="150" height="80" src="{{ asset('imagen/logo.png') }}">
                </a>
            </div>
      </section>

@yield ('carousel')

<div>@yield('sidebar')</div>

                            <!-- pies de pagina-->
    <footer>
      <div class="footerimg">
        <div class="container">
            <img src="{{ asset('imagen/logoFooter.png')  }}" alt="">
        </div>
    </div>
            <!-- conenido de datos de facultad colum izquierda-->
    <div class="footercontent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <h3>Reseña</h3>
                        <p>La Facultad Regional Tucumán Cuenta en la actualidad con más de 13.000 alumnos activos entre carreras de grado, posgrado y pregrado. Su sede se encuentra en la zona norte de la ciudad de San Miguel de Tucumán.</p>
                        <div class="contacto">
                            <h3>Contacto</h3>
                            <p><i class="fa fa-map-marker"></i> Rivadavia 1050 - San Miguel de Tucumán</p>
                            <p><i class="fa fa-phone"></i> (0381) 4217150 / 4307387 / 4307385  - Interno 200</p>
                            <p><i class="fa fa-clock-o"></i> Información: CIU (Centro de Información Universitaria) Lunes a Viernes de 9 a 13 hs y 15 a 21 hs</p>

                        </div>
                                    <!-- redes sociles-->
                        <div class="footersocial">
                            <h3>Seguinos</h3>
                            <p><a title="Facebook" href="https://www.facebook.com/frtutneduar-139222906142047/"><span class="danger fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x"></i></span></a>
                                <a title="Twitter" href="https://twitter.com/utntucuman"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x"></i></span></a>
                                <a title="YouTube" href="https://www.youtube.com/channel/UCWaIbpk3cx_9L80bedXziGQ"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x"></i></span></a>
                                <a title="Instagram" href="https://www.instagram.com/utntucuman/"><span class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x"></i></span></a>
                            </p>
                        </div>

                    </div>
                                <!--Acesos a carreras colum derecha-->
                    <div class="col-md-">
                        <h3>Carreras de Posgrado</h3>
                        <ul class="footer-ul">
                            <li><a href=""> Maestría en Ingeniería Ambiental</a></li>
                            <li><a href=""> Maestría en Docencia Universitaria</a></li>
                            <li><a href=""> Maestría en Ing. en Sistemas de Información</a></li>
                            <li><a href=""> Esp. en Ingeniería Gerencial</a></li>
                            <li><a href=""> Esp. en Higiene y Seguridad en el Trabajo</a></li>
                            <li><a href=""> Esp. en Ingeniería Bioenergética</a></li>
                            <li><a href=""> Esp. en Ingeniería en Sistemas de Información</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                      <!--contenido legal-->
    <div class="footerfoot">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-6 col-xs-12">
                        <p>Copyright 2020. UTN-FRT-Escuela de Posgrado. </p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <p class="pull-right"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </footer>
                        <!--fin de piede pagina -->

<script src="{{ asset('js\jquery.js') }}"></script>
<script src="{{ asset('js\bootstrap.min.js') }}"></script>
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  </body>
</html>
