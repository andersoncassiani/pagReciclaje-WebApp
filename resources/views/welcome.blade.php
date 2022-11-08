<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="img/logo-de-reciclar.jpg" type="img/jpg">  <!-- Para ponerle icono a la Web -->
	<title>Reportar | Inicia sesion para empezar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="stylo.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="/inicio"><img src="img/logo-de-reciclar.jpg" width="45" height="40" alt=""></a>

<!--Boton de 3 lineas al hacer menu responsive--> 
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   <span class="text-center resposive text-uppercase px-5">Reporta los residuos que observes a tu arrededor, de esa manera nos ayudas a cuidar el medio ambiente!</span>

<!--Desplegable del boton, aqui en el div centro los botones para cuando se le de clic queden centraditos-->
  <div class="collapse navbar-collapse align-items-center justify-content-center text-center" id="menu">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
      <a href="{{ route('register') }}" class="btn btn-outline-success my-2 my-sm-0 m-2"type="submit"><b>Crear cuenta</a>

     <a href="{{ route('login') }}" class="btn btn-outline-success my-2 my-sm-0"type="submit"><b>Iniciar sesion</a>
  
      </li>  
    </ul>     
  </nav>

<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  
    <div class="card-group">
  <div class="card">
    <img src="../img/basura1.jpg" class="card-img-top" height="303">
    <div class="card-body">
      <h5 class="card-title text-success text-center">Mercado de Bazurto</h5>
      <p class="card-text text-justify">Esta imagen fue tomada a la altura del mercado de Bazurto, exactamente en la Av. del Lago, donde varias ciudadanos confirman que la basura lleva varios dias allí.</p>
      <p class="card-text"><small class="text-muted"><br>Publicado hace 2 semanas</small></p>
    </div>
  </div>
  <div class="card">
    <img src="../img/basura2.jpg" class="card-img-top" height="303">
    <div class="card-body">
      <h5 class="card-title text-success text-center">Via Perimetral</h5>
      <p class="card-text">Este reciduo se encuentra en la via Perimetral, y varias personas han hecho reporte de la misma.</p>
      <p class="card-text text-justify "><small class="text-muted"><br><br><br>Publicado hace 1 mes</small></p>
    </div>
  </div>
  <div class="card">
    <img src="../img/basura3.jpg" class="card-img-top" height="303"><!-- Le puse ese heigth para alargar un poco la imagen -->
    <div class="card-body">
      <h5 class="card-title text-success text-center">Avenida Pedro de Heredia</h5>
      <p class="card-text text-justify">La fotografia fue tomada hacen varios meses ya donde, como lo vemos le toco a los mismo habitantes del sector con la ayuda de otros cuidadanos que transitan por la via, recojer esos reciduos.</p>
      <p class="card-text"><small class="text-muted">Publicado hace 3 meses</small></p>
    </div>
  </div>
</div>

<div class="card bg-dark text-white ">
  <img src="../img/zona-verde.jpg" class="card-img " height="500">
  <div class="card-img-overlay pt-5 mt-5 align-items-center">
    
    <h3 class="card-title text-center  rounded-top font-weight-light text-success bg-success bg-white py-md-1 m-0 "><b>¿Que esperas para empezar a reportar?</h3>
     
    <p class="card-text text-justify rounded-bottom font-weight-normal bg-success py-2  p-0 ">Recuerda que con tu reporte nos ayudas a cuidar y preservar el medio ambiente. Lo cual no libra a todos de infecciones y problemas como calentamiento global, enfermedades respiratorias entre otas, causadas por la contaminacion. Formas sencillas para proteger el medio ambiente: <b>Planta árboles, Ahorrar agua, No quemar basuras, No arrojar basura en lugares piblicos, ETC.</b></p> 


    <div class=" align-items-center justify-content-center text-center pt-2"> <!--Aqui centro el boton que esta debajo "Has clic aqui para empezar"-->
    <a href="{{ route('login') }}" class="btn btn-success border border-white" type="submit"><b>Has clic aqui para empezar</a>
     
  </div>
  
   </div>
</div>

<footer class="text-center text-white" style="background-color: #f1f1f1;">
 
  <!-- Copyright -->
  <div class="text-center bg-light text-dark p-3" >
    © Copyright 2022 | Desarrollador Anderson Cassiani - Todos los derechos resevados.
    <a class="text-success" href="https://youtube.com/">Ir a nuestro canal de YouTube</a>
  </div>
  <!-- Copyright -->
</footer>


</body>  
</html>