<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //
    public function index(){
        //return view('cursos.index');
        $cursos= Curso::orderBy('id','desc')->paginate();

        return view('cursos.index',compact('cursos'));
    }
    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){
       // return $request->all();

       $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
       ]);
        


       /* $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        */

        $curso = Curso::create($request);

        return redirect()->route('cursos.show',$curso);
    }

    public function show(Curso $curso){
        //compact('curso') -> crea un array ['curso' => $curso]

      return view('cursos.show',['id' => $curso]);
    }

    public function edit(Curso $curso){ //Así laravel entiende que es una instancia del objeto curso con ese id
     /* una forma de obtener esto
        $curso = Curso::find($id);
        return $curso;*/
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request,Curso $curso){
        //return $curso;

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
       ]);

        /*
        $curso->name= $request-> name;
        $curso->descripcion = $request-> descripcion;
        $curso->categoria = $request-> categoria;
        */
        //$curso->save();
        $curso->update($request->all());
        return redirect()->route('cursos.show',$curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
