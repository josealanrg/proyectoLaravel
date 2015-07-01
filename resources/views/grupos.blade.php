


@extends('base')

@section ('grupos')


    <article id="articulo2">

  <div class="panel panel-primary" id="panelgrupos">
      <div class="panel-heading">
        <h3 class="panel-title">Grupos disponibles</h3>
      </div>
      <div class="panel-body" >

        @foreach ($grupos as $grupo)

            <center> Aula : <button class="btn btn-primary">
                  {{ $grupo->aula}}             
                    </button>  <br>  <br>             

                   </center>


            @endforeach
      
      </div>
    </div>

    </article>
    

@stop
