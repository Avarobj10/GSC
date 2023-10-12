@extends('plantilla')
@section('contenido_Auth')


<div class="content-wrapper">
    
    <section class="content-header">
        <h1>Gestor de Pacientes</h1>
    </section>

    <section class="content">
        
        <div class="box">

            <div class="box-header">

                <a href="Crear-Paciente">

                    <button class="btn btn-primary btn-lg">Agregar Paciente</button>

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

                        @foreach($pacientes as $paciente)
                        
                            <tr>

                                <td>001</td>
                                <td>Alfonso Ugarte</td>
                                <td>72345618</td>
                                <td>alfonso@gmail.com</td>
                                <td>989456123</td>
                            </tr>

                            

                        @endforeach

                    </tbody>    

                </table> 

            </div>

        </div>

    </section>

</div>



{{-- <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
    <a class="dropdown-item" href=""
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="" method="POST" class="d-none">
        @csrf
    </form>
</div>  --}}


@endsection



