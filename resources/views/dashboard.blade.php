<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo-de-reciclar.jpg" type="img/jpg"> <!-- Para ponerle icono a la Web -->

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Crear reporte | Empieza a reportar para llegar hasta el lugar</title>
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

 
      
  <button class="btn btn-success dropdown-toggle ml-5 mx-auto" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Mas opciones
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item text-success" href="/reportes"><i class="bi bi-list-task mx-1  "></i>Ver mis reportes</a></li>
    
    
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

 <div class = "col-lg-6 col-12 mx-auto pt-2">
  @if(Session::has('success'))
  <div class="alert alert-success text-center">
   <h4><b>Su reporte fue enviado al sistema :)</b></h4>
   {{Session::get('success')}}
   
     </div>
     @endif
     </div>

  <div class="container">
    <!--enctype="multipart/form-data" es para codificar la imagen y se guarde en formato binario en la DB-->
<form action="{{ route('reportar.store')}}" method="post" enctype="multipart/form-data">
  @csrf
    <div class="row border border-white shadow-lg text-center mt-5 ml-4 mr-4 rounded">
  <!--Cuadro de descripcion-->
  <div class="input-group col-12 col-sm-12 col-md-6 col-lg-12 mt-3 ">
    <span class="input-group-text text-success">Reporteje</span>
    <textarea class="form-control"  aria-label="With textarea" name="descripcion_reporte"  value="{{ old('descripcion_reporte') }}" placeholder="Redacta de forma detallada el reciduo que obcervas:  (direccion, calle, entre otas cosas)."required></textarea>
  </div>

  <!--Insertar imagen-->
  <div class="col-12 col-sm-6 col-md-4 col-lg-12 mb-3">
    <label for="formFile" class="form-label text-white float-left my-1"><b>Insertar imágen</b></label>
    <input class="form-control text-success"name="imagen" type="file" id="formFile" value="{{ old('imagen') }}"required>
  </div>

  <!--Selector de ciudad donde se encuentra-->
  <div class="mx-auto">
    <div class="col-12 col-sm-6 col-md-4 col-lg-12 mb-3 my-0">
      <label for="formFile" class="form-label text-white text-center"><b>¿Donde se encuentra?</label>
      <div class="input-group d-flex" >
                  <label class="input-group-text"  for="inputGroupSelect01">Ciudad de donde reporta</label>
                  <select class="form-select text-dark" name="cuidad" id="inputGroupSelect01"required>
                    <option class="text-success" value="">Selecione...</option>
                    <option class="text-success" value="Cartagena">Cartagena</option>
                    <option class="text-success" value="Barranquilla">Barranquilla</option>
                    <option class="text-success" value="Bogota">Bogota</option>
                    <option class="text-success" value="Medellin">Medellin</option>
                    <option class="text-success" value="Sincelejo">Sincelejo</option>
               </select>

                </div>
              </div>
            </div>

  </div>
  
  <!--Captcha-->
  <div class="d-flex">
    <div class="g-recaptcha mt-3 mx-auto text-success" data-sitekey="TU CLAVE DEL SITIO AQUÍ" data-callback="correctCaptcha"></div>
</div>

  <!--Boton que va debajo enviar reporte.-->
  <div class=" mt-3 text-center ">
  <button type="submit" class="btn btn-light border border-dark text-success"><b>Enviar reporte</button>
  </div> 

</form>

</div>
  
<footer class="text-center text-white">
<!-- Copyright -->
    <div class="text-center bg-light text-dark py-3" style="margin-top: 130px;">
      © Copyright 2022 | Desarrollador Anderson Cassiani - Todos los derechos resevados.
      <a class="text-success" href="https://youtube.com/">Ir a nuestro canal de YouTube</a>
    </div>
    <!-- Copyright -->
  </footer>



 
	
</body>
</html>
