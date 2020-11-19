<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refugio de animales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo(base_url("public/styles/estilos.css")) ?>">
    <script src="https://kit.fontawesome.com/26f428e24a.js" crossorigin="anonymous"></script>

</head>
 <body background="img/fondo1.jpg" >
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Refugio de animales</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      
    </ul>
    
  </div>
</nav>
</header>
<main>
<div>
  </div class="container">
    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo (base_url("public/img/logo1.png"))?>" class="d-block w-100 imagenes " alt="imagen1">
            </div>
            <div class="carousel-item">
                 <img src="<?php echo (base_url("public/img/logo2.jpg"))?>"  class="d-block w-100 imagenes " alt="imagen2">
            </div>
            <div class="carousel-item">
                <img src="<?php echo (base_url("public/img/logo3.jpg"))?>"  class="d-block w-100 imagenes " alt="imagen3">
    </div>
  </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
<h1><?php  echo ($nombre1)?> </h1>
<h1><?php  echo ($nombre2)?> </h1>
<form class="mt-5" class="main-login main-center" action="<?php echo(base_url("public/animales/registro"))?>" method="POST" >
                <h5>REGISTRO DE ANIMALES:</h5>
                <div class="row mt-7">
                    <div class="col-12 col-md-6 ">
                    
                    <span class="input-group-text"><i class="fas fa-paw"></i>
                        <input type="text" class="form-control" placeholder="Nombre del animal" name="nombreanimal"   >
                        </span>
                    </div>
                   </div>
                   
                    <div class="row mt-3">
                    <div class="col-12 col-md-6">
                    <span class="input-group-text"><i class="fas fa-sort-numeric-up-alt"></i>
                        <input type="number" class="form-control" placeholder="Edad" name="edadanimal">
                        </span>
                    </div>
                    </div>
                <div class="row mt-3">
                <div class="col-12 col-md-6">
                <span class="input-group-text"><i class="fas fa-cookie-bite"></i>
                        <input type="text" class="form-control" placeholder="Alimento" name="alimentoanimal">
                        </span>
                    </div>
                    
                    <div class="col-12 col-md-6">
                    <span class="input-group-text"><i class="fas fa-question"></i>
                        <select class="form-control" name="tipoanimal">
                            <option value="0">Tipo de animal</option>
                            <option value="1">Doméstico</option>
                            <option value="2">Fauna silvestre</option>
                            
                        </select>
                        </span>
                    </div>
                </div>
                <div class="row mt-3" >
                    <div class="col-12" >
                        <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripción del animal"></textarea>
                    </div>   
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <input type="text" class="form-control" placeholder="URL imagen" name="foto">
                    </div>   
                </div>
                <button type="submit" class="btn btn-info btn-block mt-3">registrar</button>
            </form>
            <div class="container">
            <h2>info</h2>
            <div class="row row-cols-3 row-cols-md-3 mt-5">

                <div class="col mb-4">

                    <div class="card h-100">
                    <img src="<?php echo (base_url("public/img/imagen1.jpg"))?> ">
                        <div class="card-body">
                            <h5 class="card-title" id="titulo1">¿Cuales son los animales domésticos?</h5>
                            <h7>Los animales domésticos son las especies de animales que, a través de la selección artificial, han sido domesticados por los seres humanos. </h7>
                            
                        </div>
                    </div>
                </div>
                <div class="col mb-4">

                    <div class="card h-100">
                    <img src="<?php echo (base_url("public/img/imagen2.jpg"))?> ">
                        <div class="card-body">
                            <h5 class="card-title" id="titulo2">¿Que es la fauna silvestre?</h5>
                            <h7>La legislación establece que la fauna silvestre son las especies animales no domesticadas que viven libremente en su hábitat natural, así como los ejemplares de especies domesticadas que por abandono u otras causas se asimilen en sus hábitos a la vida silvestre, excepto las especies diferentes a los anfibios, que nacen en las aguas marinas y continentales, las cuales se rigen por sus propias leyes.</h7>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">

                    <div class="card h-100">
                    <img src="<?php echo (base_url("public/img/imagen3.jpg"))?> ">
          
                    
                        
                    </div>
                </div>
              
               
              
            </div>

        </div>
    

        
  </main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>