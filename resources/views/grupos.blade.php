
 
@extends('index')
@section('grupos')


            



              @foreach ($grupos as $grupo)

            <center> <b>Aula :</b> <a href="{{ route('pdf',[$grupo->id_grupo]) }}"><button  class="btn btn-primary" style='width:70px; height:35px'>

              {{ $grupo->aula}}
         
                </button> </a><BR>


                <b>Maestro :</b> {{ $grupo->Nombre}}<br>

                <b>Hora :</b> {{ $grupo->hora}}
<br>

_______________________________________________________________________________</center> <br>
              @endforeach


             
 
 
       
   



@stop
