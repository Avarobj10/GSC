
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>

    <div class="content-wrapper">
    
        <section class="content-header">
    
            <h1><th>Registrar Paciente</th>
        </h1>
    
        </section>
    
        <section class="content">
            
            <div class="box">
    
                <div class="box-body">
    
                    <form method="post">
    
                        @csrf
                        <div class="form-group">
    
                            <h3>Nombre y Apellido:</h3>
                            <input type="text" name="name" class="form-control input-lg">
                            
                        </div>
    
                        <div class="form-group">
    
                            <h3>Documento:</h3>
                            <input type="text" name="documento" class="form-control input-lg">
                            
                        </div>
    
                        <div class="form-group">
    
                            <h3>Email:</h3>
                            <input type="text" name="email" class="form-control input-lg">
                            
                            @error('email')
    
                                <div class="alert alert-danger"> El Email ya existe </div>
    
                            @enderror
    
                        </div>
    
                        <div class="form-group">
    
                            <h3>Contraseña:</h3>
                            <input type="text" name="password" class="form-control input-lg">
                            
                        </div>
    
                        <br>
    
                        <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
    
                    </form>
    
                </div>
    
            </div>
    
        </section>
    
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>


