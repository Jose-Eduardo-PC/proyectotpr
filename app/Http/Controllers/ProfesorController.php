<?php

namespace App\Http\Controllers;
use App\Models\Profesor;


use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    //
    public function index()
    {
       $datos['profesor']=Profesor::paginate(5);
        return view('profesor.index',$datos );
        
    }

    ///////////////////
    public function create()
    {
        return view('profesor.create');
    }

    //////////////////////////
    public function store(Request $request)
    {

      // $datosProveedor = request()->all();
       $datosProfesor = request()->except('_token');


       Profesor::insert($datosProfesor);

       return redirect('profesor');
 



       // return response()->json($datosProveedor);

            
            $profesor= Profesor::All();
            return view('profesor.index', compact('profesor')); 
    }

    /////////////
    public function show($id)
    {
        $profesor= Profesor::find($id);
        return view('profesor.show', compact('profesor'));
    }

///////////////////////
public function update(Request $request, $id){   // recibe el id 

   
    $datosProfesor = request()->except(['_token','_method']);
    Profesor::where('id','=',$id)->update($datosProfesor);          // busca la informacion con el id si encuentra hace la actualizacion 

    $profesor=Profesor::findOrFail($id);
    return view('profesor.edit', compact('profesor') );
   
 ////////////




    //////////////////
}

///
public function edit($id){   // recibe el id


    $profesor=Profesor::findOrFail($id);  // 

    return view('profesor.edit', compact('profesor') );


}

public function destroy($id){

  profesor::destroy($id);//aqui elimina el id
  return redirect('profesor'); //redirecciona a empleado


}







    /////





}
