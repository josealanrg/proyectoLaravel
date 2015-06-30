
@extends('base')

@section ('materias')

	
        <nav>
            @foreach ($materias as $materia)

            <center><button class="btn btn-primary">
                    {{ $materia->Nombre}}             
                    </button> </center> <br>

            @endforeach
        </nav>
   holaaholaholahola

@stop

