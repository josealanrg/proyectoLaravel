
 
@extends('index')
@section('grupos')

  </article>

   <article id="articulo2">

       <div class="panel panel-primary" id="panelgrupos">
        <div class="panel-heading">
        <h3 class="panel-title">Grupos disponibles</h3>
        </div>
            @yield('grupos')


<div class="panel-body" >

              @foreach ($grupos as $grupo)

            <center><button  class="btn btn-primary" style='width:50px; height:35px'>

              {{  $grupo->aula}}
         
                </button></center>
              @endforeach
 
       
      </div>

</article>



@stop
