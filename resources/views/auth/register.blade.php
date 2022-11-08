<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="img/logo-de-reciclar.jpg" type="img/jpg"> <!-- Para ponerle icono a la Web -->
  <link rel="stylesheet" type="text/css" href="stylo.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crear cuenta</title>

  <meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="stylo.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
  </script>

  <!--Js-->
  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
  <script src="script.js"></script>

 <!--CDN de JQuery para validar las-->
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>

<body>


  <nav class="navbar bg-success py-5 sticky-top">
    <!--Aqui hago que el borde tome toda la pantalla, y luego centro el texto vertical y horizontalmente-->
    <div class="container-fluid align-content-center justify-content-center">
      <span class="text-center text-white"><b>¡Crea tu cuenta gratuita!</b><br>De esa manera prodras empezar a reportar
        sin ningun problema.</span>
    </div>
  </nav>
  <!--Para mostrar mensajes cuando alguno de los campos este vacio-->
  <div class = "col-lg-6 col-12 mx-auto pt-2">
  @if($errors->any())
  <div class="alert alert-danger">
  <h4 class="text-center">Se encontraron errores: </h4>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
  </ul>
 </div>
 @endif
 </div>

  <!--Para mostrar el mensaje cuando el usuario se regristre en la parte de arriba
      El mensaje esta en el controlador en la partde de abajo-->
  <div class = "col-lg-6 col-12 mx-auto pt-2">
   @if(Session::has('success'))
   <div class="alert alert-success text-center">
    <h4>Su registro ha sido satisfactorio.</h4>
    {{Session::get('success')}}
    <a class="text-wrap" href="/login"><br>Haga clic aqui para iniciar.</a>

      </div>
      @endif
      </div>

  <div class="container">
    <form action="{{ route('register') }}" method="post">
    
      
      <div class="row border border-success shadow-lg text-center mt-5 rounded ml-auto">

      @csrf
        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="text" class="form-control border-success" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">
           <!--Para mostrar el campo que es el nombre es requerido.--->
        
        </div>

        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="text" class="form-control border-success" name="apellido" placeholder="Apellido" value="{{ old('apellido') }}">
          
        </div>

        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="text" class="form-control border-success" name="nombre_usuario" placeholder="Nombre de usuario" value="{{ old('nombre_usuario') }}">
        </div>


        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="text" class="form-control border-success" name="email" placeholder="Correo eletronico"value="{{ old('email') }}">
        </div>


        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="password" id="contrasena" min="8" max="20" name="password" class="form-control border-success" title="" placeholder="Contraseña" value="{{ old('pass') }}">

        </div>

        <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb-3">
          <input type="password" id="contrasena1" min="8" max="20" name="password_confirmation" class="form-control border-success" placeholder="Vuelva a escribir la contraseña" value="{{ old('pass_confirmation') }}">

    

          <div id="passwordHelpBlock" class="fw-normal mt-1" style="font-size: 11px;">
            Su contraseña debe tener entre 8 y 10 caracteres, contener letras y números, y no debe contener espacios,
            caracteres especiales ni emoji.
          </div>
        
        </div>
      </div>
    
  </div>

  </div>

  <div class="col-12 col-sm-3 col-md-4 col-lg-4 mt-3 mb- mx-auto d-flex flex-column justify-content-center align-items-center">
    <div class="form-check mt-3">
      <input class="form-check-input" type="checkbox" value="" name="acepto_terminos" id="flexCheckDefault" required>
      <label class="form-check-label" for="flexCheckDefault">
        Acepto terminos y condiciones.
      </label>
    </div>
    <button class="btn btn-success mt-2" type="submit" name="" id="" value="Enviar"><a href="/iniciar-sesion"></a><b>Registrarme</button>
    </form>
  </div>

  <footer class="text-center text-white " style="background-color: #f1f1f1;">
    <!-- Copyright -->
    <div class="text-center bg-light text-dark" style="margin-top: 145px;">
      © Copyright 2022 | Desarrollador Anderson Cassiani - Todos los derechos resevados.
      <a class="text-success" href="https://youtube.com/">Ir a nuestro canal de YouTube</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>

</html>