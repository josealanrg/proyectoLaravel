<?php 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;
use App\Materia;
use View;

class HomeController extends Controller {


    public function index()
    {
        $materias = Materia::all();
		return View::make('index')->with('materias',$materias);
    }

}