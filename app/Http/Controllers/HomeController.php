<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Grupo;
use App\Alumno;
use View;

class HomeController extends Controller {


    public function index()
    {
        $materias = Materia::all();
		return View::make('index')->with('materias',$materias);

	
    }

         public function gruposMaterias($id)
             {

        $grupos=Grupo::getGrupos($id);
        
        $materias=Materia::allmaterias();

        return view('grupos',compact ('grupos','materias'));
   
		//return View::make('grupos')->with(['materias' => Materia::all() ,
          //                                 'grupos' => Grupo::where ('id_materia','=',$id)->get()]);


    }


    public function generapdf($id)
    {
        $grupo = Grupo::getInfoGrupo($id);
        $alumnos = Alumno::getAlumnos($id);
        $vista = view('generapdf', compact('grupo','alumnos'));
        $dompdf = \App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
    }





}