
@extends('base')

@section ('materias')


	
        <nav>
            @foreach ($materias as $materia)

            <center><button class="btn btn-default">

            	<a href="/proyectoLaravel/public/grupos?id={{$materia->id_materia}}">{{  $materia->Nombre}}</a>
         
              


                    </button> </center> <br> <br>

            @endforeach
        </nav>
   

@stop


