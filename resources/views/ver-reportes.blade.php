<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo-de-reciclar.jpg" type="img/jpg"> <!-- Para ponerle icono a la Web -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mis reportes</title>
        <link rel="stylesheet" type="text/css" href="stylo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

        <!--Este Script es para ponerle el capChat a la pagina-->
        <script src="https://www.google.com/recaptcha/api.js"></script>

      <!--Icono del usuario logeado-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="bg-success">
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top"><!--La propiedad Sticky-top es para que el menu se quede estatico al subir en la pagina-->
  <a class="navbar-brand" href="#"><img src="img/logo-de-reciclar.jpg" width="45" height="40" alt=""></a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col-sm-3 col-md-3 col-lg-4 "> <p class="justify-content-center text-center d-flex  my-0 ">Usted esta identificado(a) como: </p> <b class="text-uppercase d-flex text-center justify-content-center my-0" >{{Auth::user()->nombre}} {{Auth::user()->apellido}}<label class="bi bi-person-circle  d-felx mx-1"></label></b></div>
    
 <div class="collapse navbar-collapse align-items-center justify-content-center text-center" id="menu">
<div class="dropdown ml-auto"> <!--Este ml-auto es para posicionarlo a la izquierda, y en la clase button le pongo un ml-5-->


<a href="{{ route('dashboard') }}" class="btn btn-outline-success my-2 my-sm-0 m-2"type="submit"><i class="bi bi-house-door-fill mx-1"></i><b>Inicio</a>

     
  <button class="btn btn-success dropdown-toggle ml-5 mx-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Mas opciones
  </button>
  <ul class="dropdown-menu mx-auto">
    <li><a class="dropdown-item text-success" href="/reportes"><i class="bi bi-list-task mx-1 "></i>Ver mis reportes</a></li>
    
    
    @auth
    <!--Para cerrar session, se debe enviar el action por el metodo POST -->
    <form action="{{ route('logout') }}" method="POST"> <!--Para cerrar sesion se debe hacer por el metodo POST en el action.-->
      @csrf
    <li><a class="dropdown-item text-success" href="#" onclick="this.closest('form').submit()"><i class="bi bi-box-arrow-right mx-1"></i>Salir</a></li>
    @endauth
  </form>
  </ul>
  

</div>
</div>
</nav>

<div class = "col-lg-6 col-12 mx-auto pt-2 ">
  @if($errors->any())
  <div class="alert alert-danger">
  <h4 class="text-center"><b>Se encontraron errores:</b></h4>
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
  </ul>
 </div>
 @endif
 </div>


<div class="container">
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th class="text-uppercase" scope="col"><b>Descripcion del Reporte</th>
        <th class="text-uppercase" scope="col"><b>Imagen</th>
        <th class="text-uppercase" scope="col"><b>Ciudad</th>
      </tr>
    </thead>
    <tbody>
      @if (count($repotesUsuario)>=1)
      @foreach ($repotesUsuario as $item)
      <tr>
        <td>{{$item['id']}}</td>
        <td>{{$item['descripcion_reporte']}}</td>

        <!--Ajustar tamaño a la imagen-->
        <td><img class="img-thumbnail rounded float-start px-2 py-2" src="/storage/{{$item['imagen']}}" alt=""></td>
        <td>{{$item['cuidad']}}</td>
      </tr>
@endforeach
@else
<tr>
  <td colspan="4">
    <div class="alert alert-primary" role="alert">
      <h2><b>Usted aun no ha hecho ningun reporte.</b></h2>Lo invitamos a reportar!!
    </div>
  </td>
</tr>

      @endif
      
    </tbody>
  </table>
</div>

 

  
 
	
</body>
</html>
