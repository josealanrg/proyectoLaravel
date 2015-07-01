
@extends('base')

@section ('materias')

	
        <nav>
            @foreach ($materias as $materia)

            <center><button class="btn btn-primary">
         
              {{ $materia->Nombre}}


                    </button> </center> <br>

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

      
      </div>
    </div>

    </article>
    
    

@stop

