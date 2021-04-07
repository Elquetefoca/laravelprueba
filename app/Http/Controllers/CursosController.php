<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        //return view('cursos.index');
        $cursos= Curso::paginate();

        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }
    public function show($id,$cat=null){
        //compact('curso') -> crea un array ['curso' => $curso]

        $curso = Curso::find($id);
      return view('cursos.show',['id' => $curso, 'cat' => $cat ]);
    }
}
