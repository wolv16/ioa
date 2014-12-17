<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('titulo')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <script src="js/jquery-1.11.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.js"></script>
    <!-- BootstrapValidator JS -->

  </head>
  <body>
<!-- navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="admin"><img src="imgs/pdmu.png" alt=""> PDMU</a>
          </div>
          <div class="hidden-xs">
                  <ul class="nav navbar-nav navbar-right">

                      <li id="fat-menu" class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="fa fa-user"></i>
                              <i class="fa fa-caret-down"></i>
                          </a>

                          <ul class="dropdown-menu">
                              <li><a href="#">My Account</a></li>
                              <li class="divider"></li>
                              <li><a class="visible-phone" href="#">Settings</a></li>
                              <li class="divider"></li>
                              <li><a href="logout"><i class="fa fa-sign-out"></i> Logout</a></li>
                          </ul>
                      </li>
                  </ul>
          </div>
      </div>
  </div>
<!-- end navbar -->
<div class="navbar-collapse collapse">
  <div id="main-menu">
      <ul class="nav nav-tabs ">
          <li class="active"><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
          <li ><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa icon-plus"></i> <span>Nuevo</span></a></li>
          <li ><a href="#" ><i class="icon-cogs"></i> <span>Components</span></a></li>
          <li ><a href="#"><i class="icon-magic"></i> <span>Pricing</span></a></li>
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cog"></i> Settings <b class="caret"></b></a>
              <ul class="dropdown-menu">
                  <li><a href="#"><span>Sign-in Page</span></a></li>
                  <li><a href="#"><span>Sign-up Page</span></a></li>
                  <li><a href="#"><span>Forgot Password Page</span></a></li>
              </ul>
          </li>
      </ul>
  </div>
</div>
<!-- sidenavbar -->
  <div id="sidebar-nav" class="hidden-xs">
      <ul id="dashboard-menu" class="nav nav-list">
          <li class="active "><a rel="tooltip" data-placement="right" data-original-title="Dashboard" href="index.html"><i class="fa fa-home"></i> <span class="caption">Administración</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Reports" href="reports.html"><i class="fa fa-bar-chart-o"></i> <span class="caption">Reportes</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="UI Features" href="components.html"><i class="icon-archive"></i> <span class="caption">Paquetes</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Pricing" href="pricing.html"><i class="icon-money"></i> <span class="caption">Precios</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Media" href="<?=URL::to('users'); ?>"><i class="fa icon-group"></i> <span class="caption">Usuarios</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog" href="blog.html"><i class="icon-envelope"></i> <span class="caption">Mensajes</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Blog Entry" href="blog-item.html"><i class="icon-print"></i> <span class="caption">Plantillas</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Help" href="help.html"><i class="icon-question-sign"></i> <span class="caption">Ayuda</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Faq" href="faq.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Calendar" href="calendar.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Forms" href="forms.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>

          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Tables" href="tables.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
          <li class=" theme-mobile-hack"><a rel="tooltip" data-placement="right" data-original-title="Mobile" href="mobile.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
          <li class=" "><a rel="tooltip" data-placement="right" data-original-title="Icons" href="icons.html"><i class="icon-ban-circle"></i> <span class="caption">Vacío</span></a></li>
      </ul>
  </div>
<!-- end sidenavbar -->
    <div class="content">
    @yield('contenido')
      <footer>
          <hr>
          <p class="pull-right">Design by <a href="#" target="_blank">Omar Ruiz</a></p>
          <p>© 2014 Omar Ruiz</p>
      </footer>
    </div>
  </body>
  @yield('scripts')
</html>
