<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;

class CursoController extends Controller
{
    //
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        // return view('cursos.show', ['curso' => $curso]);

        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));
    }

    public function store(StoreCurso $request){
        // Validación -> como se haria sin un Form Request
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'descripcion' => 'required|min:10',
        //     'categoria' => 'required',
        // ]);

        // Si se valida continua aquí, si no lo devuelve al formulario
        // 
        // $curso = new Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        // Con create es mas facil crear
        // 
        // $curso = Curso::create([
        //     'name' => $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria
        // ]);
        
        $curso = Curso::create($request->all()); // Se puede simplificar de esta forma

        return redirect()->route('cursos.show', $curso); // no hace falta poner $curso->id
                                                         // Laravel ya sabe que tiene que mirar id si no se especifica
    }

    public function edit(Curso $curso){ // Si especificas el Modelo y mandas un id
                                        // Laravel busca el objeto con ese id en la base de datos
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        // Validación
        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required',
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        $curso->update($request->all()); // mediante asignacion masiva

        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
