<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <section class="h-100 gradient-form" style="background-color: #6fbd62;">
        <div class="container py-4 h-50">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-xl-10">
              <div class="card rounded-3 text-black">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="card-body p-md-5 mx-md-4">

                        <form action="{{route('login')}}" method="post">
                            @csrf
                            
                            <center><h1>Iniciar sesión</h1></center>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Correo electronico</label>
                                <input type="email" name="email" id="form2Example1" class="form-control" />
                                
                            </div>
                        
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Contraseña</label>
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                                
                            </div>
                        
                            <!-- 2 column grid layout for inline styling -->
                             <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                        <label class="form-check-label" for="form2Example31"> Recuerdame </label>
                                    </div>
                                    
                                </div>
                        
                            <div class="col">
                                <!-- Simple link -->
                                <a href="#!">Olvidaste tu contraseña?</a>
                            </div>
                                                    
                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Ingresar</button>
                        
                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Aún no estás registrado? <a href="{{route('register')}}">Registrarse</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

</body>

</html>



