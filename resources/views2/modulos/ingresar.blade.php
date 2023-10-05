
@extends('plantilla')
@section('contenido')


<center>
<br><br><br>

<div class="login-box">

    <div class="login-logo">

       <b>Registro de Solicitudes</b>
        
    </div>

    <div class="login-box-body">

        <p class="login-box-msg"> Ingresar al sistema </p>
    
        <form method="post" action="">

            @csrf
                       
            <div class="form-group has-feedback">

                <input type="email" name="email" class="form-control" required="" value="">

                @error('email')

                    <br>
                    <div class="alert alert-danger"> Error con el Email o la Contraseña </div>

                @enderror

                <span class="glyphicon glyphicon-user form-control-feedback"></span>

            </div>

            <div class="form-group has-feedback">

                <input type="password" name="password" class="form-control" required="" value="">

                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                
            </div>

            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                <label class="form-check-label" for="exampleCheck2">Recuérdame</label>
            </div><br>

            <div class="form-group has-feedback">

                <div class="form-group has-feedback">
                    
                    <button type="submit" class="btn btn-success btn-block btn-flat"> Ingresar </button>
                </div>

            </div>


        </form>

    </div>

</div>
</center>


@endsection
