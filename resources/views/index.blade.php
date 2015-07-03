

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto Laravel</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div class="page-header">
          <h1>Grupos Actuales <br> <small>Instituto Tecnológico de Culiacán
          </small></h1>
        </div>
       <figure>
        <img src={{ asset('imagen.png') }}>
    </figure>
    </header>
    <section id="primeraseccion">
        <article id="articulo">
      <nav>
        <a href="{{ url (' ')}} ">  <center><button class="btn btn-success" style='width:250px; height:35px'> Inicio </button></center> </a>
        <br>
            @foreach ($materias as $materia)

            <a href="{{ route('grupo',[$materia->id_materia,$materia->Nombre]) }}"><center><button  class="btn btn-default" style='width:250px; height:35px'>

              {{ $materia->Nombre}}
         
        
                    </button></a> </center> <br>

            @endforeach
        </nav>
          </article>

   <article id="articulo2">

       <div class="panel panel-primary" id="panelgrupos">
        <div class="panel-heading">
        <h3 class="panel-title">Grupos disponibles</h3>
        </div>

        <br>
    
        
        


    <div class="panel-body" >
   @yield('grupos')

      </div>

</article>

    </section>  

    <footer>
        <small>
            DR &copy; Ingenieria Web Verano 2015.
        </small>
    </footer>
</body>
</html>
