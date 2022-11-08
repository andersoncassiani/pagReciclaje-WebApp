<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo-de-reciclar.jpg" type="img/jpg"><!-- Para ponerle icono a la Web -->
  <link rel="stylesheet" type="text/css" href="stylo.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Iniciar sesión</title>

	<meta charset="UTF-8">
      
        <link rel="stylesheet" type="text/css" href="stylo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-success py-5 ">
   <h2 class="text-white mx-auto text-center"><b>¡Inicia sesión y empieza a reportar!</h2>
</nav>

<div class = "col-lg-6 col-12 mx-auto pt-2">
  @if($errors->any())
  <div class="alert alert-danger">
  <h4 class="text-center">Error al iniciar sesion.</h4>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
  </ul>
 </div>
 @endif
 </div>
 

<div class="container"> 


<div class="text-center mt-5 border border-success rounded p-2x mx-5" border-style= "dotted">
<form action="{{ route('login') }}" method="post">
  @csrf

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-center w-auto mt-2"><b>Ingresar correo electronico</b></label>
    <input type="email" class="form-control w-50 mx-auto" name="email" aria-describedby="emailHelp" placeholder="Escribe tu correo electronico" value="{{ old('email') }}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label m-0"><b>Clave</b></label>
    <input type="password" name="password" class="form-control w-50 mx-auto m-0" id="exampleInputPassword1" placeholder="Escribe tu contraseña" value="{{ old('pass') }}">
  </div>
  <div class="mb-3 checkbox checkbox-success checkbox-success">
    <input type="checkbox" class="form-check-input checkbox-success" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Recordarme</label>
  <a href="/register" class="text-success m-2 "><b>Registrate aquí.</a>
 </div>


  <button type="submit" class="btn btn-success px-4 mb-2"><b>Entrar</button>
</form>
</div>
</div>

</body>



</html>