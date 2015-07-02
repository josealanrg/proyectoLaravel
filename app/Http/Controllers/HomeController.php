<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Materia;
use App\Grupo;
use View;

class HomeController extends Controller {


    public function index()
    {
        $materias = Materia::all();
		return View::make('index')->with('materias',$materias);

	
    }

         public function grupos($id)
    {
   
		return View::make('grupos')->with(['materias' => Materia::all() ,
                                           'grupos' => Grupo::where ('id_materia','=',$id)->get()]);


    }





}