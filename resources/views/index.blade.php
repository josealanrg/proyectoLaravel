
@extends('base')

@section ('materias')


	
        <nav>
            @foreach ($materias as $materia)

            <a href="/proyectoLaravel/public/grupos?id={{$materia->id_materia}}"><center><button  class="btn btn-default" style='width:250px; height:35px'>

            	{{  $materia->Nombre}}
         
              


                    </button></a> </center> <br> <br>

            @endforeach
        </nav>
    

@stop

@section ('grupos')


    <article id="articulo2">

  <div class="panel panel-primary" id="panelgrupos">
      <div class="panel-heading">
        <h3 class="panel-title">Grupos disponibles</h3>
      </div>
      <div class="panel-body" >

      
      
     
      	<br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	<br><br>
      	
       
      </div>
    </div>

    </article>

    @stop