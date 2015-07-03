
 
@extends('index')
@section('grupos')


            



              @foreach ($grupos as $grupo)

            <center> <b>Aula :</b><button  class="btn btn-primary" style='width:63px; height:35px'>

              {{ $grupo->aula}}
         
                </button> <BR>


                <b>Maestro :</b> {{ $grupo->Nombre}}<br>

                <b>Hora :</b> {{ $grupo->hora}}
<br>

_______________________________________________________________________________</center> <br>
              @endforeach


             
 
 
       
   



@stop
