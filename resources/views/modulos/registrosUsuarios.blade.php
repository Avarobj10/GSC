

{{-- @extends('plantilla')
@section('title','Crear Registros')

@section('content')

    <div class="content-wrapper">
        
        <section class="content-header">
            <h1>Gestor de Registros</h1>
        </section>

        <section class="content">
            
            <div class="box">

                <div class="box-header">

                    <a href="Crear-Paciente">

                        <button class="btn btn-primary btn-lg">Agregar Registro</button>

                    </a>
                </div>

                <div class="box-body">

                    <table class="table table-bordered table-hover table-striped dt-responsive">
                    
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Fecha de Llegada</th>
                                <th>Hora de llegada</th>                      
                                <th>Potencia requerida</th>
                                <th>Voltaje requerido</th>
                                <th>Dirección exacta</th>
                                <th>Referencias</th>
                                <th>Metraje de cableado</th>
                                <th>Nombre de contacto - LDS</th>
                                <th>Celular de contacto - LDS</th>
                                <th>Estado de solicitud</th>
                                <th>Observaciones</th>
                                <th>Editar / Borrar</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($pacientes as $paciente)

                            @endforeach
                            
                            <tr>

                                <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td>

                                <td>001</td>
                                <td>Carlos@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>Dirección1</td> 
                                <td>Referencia1</td>
                                <td>50 metros</td>
                                <td>Carlos Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                                

                            

                        </tbody>    

                    </table> 

                </div>

            </div>

        </section>

    </div>
@endsection --}}


{{-- ************************************************************************************************************************************************************************ --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

  
    <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  
  <!-- Font Awesome -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/font-awesome/css/font-awesome.min.css">
  
  <!-- Ionicons -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/Ionicons/css/ionicons.min.css">
  
  <!-- Theme style -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/dist/css/AdminLTE.min.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/dist/css/skins/_all-skins.min.css">
  
  <!-- Morris chart -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/morris.js/morris.css">
  
  <!-- jvectormap -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/jvectormap/jquery-jvectormap.css">
  
  <!-- Date Picker -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  
  <!-- Daterange picker -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/bootstrap-daterangepicker/daterangepicker.css">

  <!-- DataTables -->

  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- FullCalendar -->

  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">

  <!-- Select 2 -->
  <link rel="stylesheet" href="http://localhost/SRSC/public/bower_components/select2/dist/css/select2.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-----------------------------------------------favicon----------------------------------------------->

    <!-----------------------------------------------estilos----------------------------------------------->
    
</head>

<body class="hold-transition skin-red sidebar-mini login-page">


    <!----------------------------------------------- header ----------------------------------------------->
    


    <header class="main-header">
        <a href="{{ url('Inicio')}}" class="logo">
            <span class="logo-mini"><b>L</b></span>
            <span class="logo-lg"><b>LUVEGI</b></span>
        </a>
    
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            
            </a>
    
            <div class="navbar-custom-menu">
    
                <ul class="nav navbar-nav">
    
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            
                            <span class="hidden-xs"> </span>
                        </a>
                    
    
                        <ul class="dropdown-menu">
    
                            <li class="user-footer">
    
                                <center>
    
                                <div class="pull-right">
    
                                    <a href="" class="btn btn-primary btn-flat"> Mis datos </a>
    
                                    <a href="" onclick="" class="btn btn-danger btn-flat"> Salir </a>       
    
                                </div>
    
                                </center>
    
                                <form method="post" id="logout-form" action="">
    
                                    @csrf
    
                                </form>
    
                            </li>
    
                        </ul>
                    </li>
                </ul>
    
            </div>
        </nav>

        {{-- <aside class="main-sidebar">

            <section clas="sidebar">
                <ul class="sidebar-menu">
        
                    <li>
                        <a href="">
                            <i class='fa fa-home'></i>
                            <span> Inicio </span>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-calendar-check-o"></i>
                            <span> Citas </span>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span> Pacientes </span>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span> Historial </span>
                        </a>
                    </li>
        
                </ul>
            </section>
        
        </aside> --}}
    
    </header>



    {{-- @if(Auth::user())

    <div class="wrapper">

      @include('modulos.cabecera')

      @if(auth() -> user() -> rol == "Administrador")

        @include('modulos.menuAdministrador')

      @elseif(auth() -> user() -> rol == "Usuario")

        @include('modulos.menuUsuario')

      @endif
      
      @elseif(auth() -> user() -> rol == "Paciente")

        @include('modulos.menuPaciente')

      @else

        @include('modulos.menuAdministrador')
   
      @yield('content')

    </div>

    @else

        @yield('contenido')

    @endif --}}


    <!----------------------------------------------- nav ----------------------------------------------->

    {{-- @yield('content') --}}

    <div class="content-wrapper">
        
        <aside class="main-sidebar">

            <section clas="sidebar">
                <ul class="sidebar-menu">
        
                    <li>
                        <a href="">
                            <i ></i>
                            <h1 class='fa fa-home'> Registro de solicitud </h1>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-calendar-check-o"></i>
                            <span> Historial de solicitudes </span>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span> Clientes </span>
                        </a>
                    </li>
        
                    <li>
                        <a href="">
                            <i class="fa fa-users"></i>
                            <span> Usuarios </span>
                        </a>
                    </li>
        
                </ul>
            </section>
        
        </aside>
        
        
        
        
        
        <section class="content-header">
            <h1>Historial de Solicitudes</h1>
        </section>

        <section class="content">
            
            <div class="box">

                <div class="box-header">

                    {{-- <a href="Crear-Paciente">

                        <button class="btn btn-primary btn-lg">Agregar Registro</button>

                    </a> --}}
                </div>

                <div class="box-body">

                    <table class="table table-bordered table-hover table-striped dt-responsive">
                    
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Fecha de Llegada</th>
                                <th>Hora de llegada</th>                      
                                <th>Potencia requerida</th>
                                <th>Voltaje requerido</th>
                                <th>Dirección exacta</th>
                                <th>Referencias</th>
                                <th>Metraje de cableado</th>
                                <th>Nombre de contacto - LDS</th>
                                <th>Celular de contacto - LDS</th>
                                <th>Estado de solicitud</th>
                                <th>Observaciones</th>
                                <th>Editar / Borrar</th>
                            </tr>
                        </thead>

                        <tbody>

                            {{-- @foreach($pacientes as $paciente)

                            @endforeach --}}
                            
                            <tr>

                                {{-- <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td> --}}

                                <td>001</td>
                                <td>Carlos@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>X voltios</td>
                                <td>Dirección1</td> 
                                <td>Referencia1</td>
                                <td>50 metros</td>
                                <td>Carlos Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                            <tr>

                                {{-- <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td> --}}

                                <td>002</td>
                                <td>mario@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>X voltios</td>
                                <td>Dirección2</td> 
                                <td>Referencia2</td>
                                <td>50 metros</td>
                                <td>Mario Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                            <tr>

                                {{-- <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td> --}}

                                <td>002</td>
                                <td>mario@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>X voltios</td>
                                <td>Dirección2</td> 
                                <td>Referencia2</td>
                                <td>50 metros</td>
                                <td>Mario Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                            <tr>

                                {{-- <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td> --}}

                                <td>002</td>
                                <td>mario@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>X voltios</td>
                                <td>Dirección2</td> 
                                <td>Referencia2</td>
                                <td>50 metros</td>
                                <td>Mario Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                            <tr>

                                {{-- <td>{{$paciente -> id}}</td>
                                <td>{{$paciente -> name}}</td> 
                                <td>{{$paciente -> documento}}</td>
                                <td>{{$paciente -> email}}</td> --}}

                                <td>002</td>
                                <td>mario@gmail.com</td> 
                                <td>FY</td>
                                <td>HL</td>
                                <td>10 KW</td>
                                <td>X voltios</td>
                                <td>Dirección2</td> 
                                <td>Referencia2</td>
                                <td>50 metros</td>
                                <td>Mario Gomez</td>
                                <td>99999876</td> 
                                <td>En proceso</td>
                                <td>Ninguna</td>
                                <td><a href=""> <button class="btn btn-success"> <i class="fa fa-pencil"> </i> </button> </a><button class="btn btn-danger EliminarPaciente" Pid=""><i class="fa fa-trash"> </i> </button></td>
                                
                            </tr>

                                

                            

                        </tbody>    

                    </table> 

                </div>

            </div>

        </section>

        

    </div>






    <!-----------------------------------------------footer ----------------------------------------------->

    <!----------------------------------------------- script ----------------------------------------------->

    <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  
  <!-- Bootstrap 3.3.7 -->
  <script src="http://localhost/SRSC/public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  
  <!-- Morris.js charts -->
  <script src="http://localhost/SRSC/public/bower_components/raphael/raphael.min.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/morris.js/morris.min.js"></script>
  
  <!-- Sparkline -->
  <script src="http://localhost/SRSC/public/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
  
  <!-- jQuery Knob Chart -->
  <script src="http://localhost/SRSC/public/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  
  <!-- daterangepicker -->
  <script src="http://localhost/SRSC/public/bower_components/moment/min/moment.min.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  
  <!-- datepicker -->
  <script src="http://localhost/SRSC/public/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  
  <!-- Slimscroll -->
  <script src="http://localhost/SRSC/public/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  
  <!-- FastClick -->
  <script src="http://localhost/SRSC/public/bower_components/fastclick/lib/fastclick.js"></script>
  
  <!-- AdminLTE App -->
  <script src="http://localhost/SRSC/public/dist/js/adminlte.min.js"></script>
  
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="http://localhost/SRSC/public/dist/js/pages/dashboard.js"></script>
  
  <!-- AdminLTE for demo purposes -->
  <script src="http://localhost/SRSC/public/dist/js/demo.js"></script>

  <!-- DataTables -->

  <script src="http://localhost/SRSC/public/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  
  <!-- FullCalendar -->


  <script src="http://localhost/SRSC/public/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/fullcalendar/dist/locale/es.js"></script>
  <script src="http://localhost/SRSC/public/bower_components/moment/moment.js"></script>

  <!-- Select 2 -->

  <script src="http://localhost/SRSC/public/bower_components/select2/dist/js/select2.js"></script>




</body>



</html>


