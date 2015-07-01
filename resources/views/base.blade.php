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
          <h1>Proyecto Laravel <br> <small>Instituto Tecnológico de Culiacán
          </small></h1>
        </div>
       <figure>
        <img src={{ asset('imagen.png') }}>
    </figure>
    </header>
    <section id="primeraseccion">
        <article id="articulo">

    @yield('materias')    

     </article>

    @yield('grupos')

    </section>  

    <footer>
        <small>
            DR &copy; Ingenieria Web Verano 2015.
        </small>
    </footer>
</body>
</html>

