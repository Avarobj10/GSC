<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro de solicitudes</title>
  
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/GSC/public/dist/css/AdminLTE.min.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/GSC/public/dist/css/skins/_all-skins.min.css">
  
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/morris.js/morris.css">
  
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/jvectormap/jquery-jvectormap.css">
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/GSC/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">
 
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
 
    @if(Auth::user())
       


            <header class="main-header" >
                <!-- Logo -->
                <a href="" class="logo" style="background-color: #1a1919;">

                    <!-- mini logo for sidebar mini 50x50 pixels-->
                    <span class="logo-mini">GS</span>

                    <!--logo for regular state and mobile devices -->
                    <span class="logo-lg">Gestión de Solicitudes</span>    
                </a>


                <!-- Header Navbar: style can be found in header.less -->

                <nav class="navbar navbar-static-top" style="background-color: #000000;">
                    
                    <!-- Sidebar toggle button-->
                    {{-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a> --}}

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <!-- Messages: style can be found in dropdown.less-->
                            
                            <!-- Notifications: style can be found in dropdown.less -->

                            <!-- Tasks: style can be found in dropdown.less -->

                            <!-- User Account: style can be found in dropdown.less -->

                            <li class="dropdown user user-menu">
                                
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    
                                    <span class="hidden-xs" > {{ auth()-> user() -> name}}</span>

                                </a>
                                
                                <ul class="dropdown-menu">
                                
                                
                                <!-- User image -->

                                <li class="user-header">

                                    <img src="http://localhost/GSC/public/dist/img/avatar6.jpg" class="img-circle" alt="User Image">

                                    <p>{{ auth()-> user() -> name}} - Clientes LUVEGI</p>
                                    
                                </li>

                                <!-- Menu Body -->
                                                
                                <!-- Menu Footer-->
                                
                                <li class="user-footer">

                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Mis datos</a>
                                    </div>

                                    <div class="pull-right">
                                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Salir</a>
                                    </div>

                                    <form method="POST" id="logout-form" action="{{route('logout')}}">

                                        @csrf

                                    </form>

                                </li>

                                </ul>
                            </li>

                            <!-- Control Sidebar Toggle Button -->
                            <!-- <li>
                                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                            </li> -->

                        </ul>
                    </div>
                </nav>
            </header>
            
            @yield('contenido_Auth')

        <div class="wrapper"></div> 

            <section class="content">
        
                <div class="box">
        
                    <div class="box-header">
        
                        <a href="registroSolicitud">
        
                            <button class="btn btn-primary btn-lg">Registrar solicitud</button>
        
                        </a>
                    </div>
        
                    <div class="box-body">
        
                        <table class="table table-bordered table-hover table-striped dt-responsive">
                        
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Documento</th>
                                    <th>Email</th>                      
                                    <th>Teléfono</th>
                                    <th>Editar / Borrar</th>
                                </tr>
                            </thead>
        
                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody>

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 

                            <tbody>        
                                                              
                                <tr>
    
                                    <td>001</td>
                                    <td>Alfonso Ugarte</td>
                                    <td>72345618</td>
                                    <td>alfonso@gmail.com</td>
                                    <td>989456123</td>
                                    <td>
                                          
                                        <button class="btn btn-success"> <i class="fa-pencil"> </i> </button>                                    
    
                                        <button class="btn btn-danger" ><i class="fa-trash"> </i> </button>
    
                                    </td>
                                </tr>
        
                            </tbody> 
        
                        </table> 
        
                    </div>
        
                </div>
        
            </section>

         
               
    @else
    
        @yield('contenido_notAuth')

    @endif
    
    

    <!-- php artisan make:model ejemplo_nombre -cr -->
    

    <!-- Left side column. contains the logo and sidebar -->


    <!-- <aside class="main-sidebar">
        
        <section class="sidebar">
        
            <div class="user-panel">

                <div class="pull-image">
                    <img src="http://localhost/SGSC/public/dist/img/luvegi.jpg" class="img-responsive" >
                </div>
                
            </div>

            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MENÚ DE OPCIONES</li>
                <li class="active treeview">
            </ul>

        </section>

    </aside> -->
    


    <!-- ./wrapper -->


    <!-- jQuery 3 -->
    <script src="http://localhost/GSC/public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/GSC/public/bower_components/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.7 -->
    <script src="http://localhost/GSC/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Morris.js charts -->
    <script src="http://localhost/GSC/public/bower_components/raphael/raphael.min.js"></script>
    <script src="http://localhost/GSC/public/bower_components/morris.js/morris.min.js"></script>

    <!-- Sparkline -->
    <script src="http://localhost/GSC/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="http://localhost/GSC/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

    <!-- daterangepicker -->
    <script src="http://localhost/GSC/public/bower_components/moment/min/moment.min.js"></script>
    <script src="http://localhost/GSC/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- datepicker -->
    <script src="http://localhost/GSC/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- Slimscroll -->
    <script src="http://localhost/GSC/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->
    <script src="http://localhost/GSC/public/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->
    <script src="http://localhost/GSC/public/dist/js/adminlte.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="http://localhost/GSC/public/dist/js/pages/dashboard.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="http://localhost/GSC/public/dist/js/demo.js"></script>

</body>

</html>
